<?php
/**
 * Created by PhpStorm.
 * User: Admindb
 * Date: 26.02.2018
 * Time: 11:28
 */
require_once '../modules/registrationFunction.php';
checkAuth();

if(isset($_GET['id']))
    $id=$_GET['id'];
if(!isset($_SESSION)){
    session_start();
}
$_SESSION['id']=$id;
/*if($id='47') {
    include '../template/checkGuest.html';
} else {*/
    require_once 'mkk7BaseFunction.php';
    $cat = getCategory($id);
    $dopId = getDopReport($id);
    $reportname = getFormName($id);
    $dopCat = Null;
    if ($dopId) {
        $_SESSION['dopId'] = $dopId;
        $dopCat = getCategory($dopId);
    }
    $dbType = getDbType($id);

    if ($cat != NULL) {
        $dbType = getDbType($id);
        $conStr = getConnectionString($id);

        switch ($dbType) {
            case 'MsSQL':
                require_once '../DB/MsSQL.php';
                $selectItems = null;
                $con = new MsSQL($conStr);
                $dataArray = $con->getResult($cat);
                foreach ($dataArray as $item => $value) {
                    $selectItems = $selectItems . "\t<option selected value =\"" . htmlspecialchars($value['Name']) . "\">" . $value['Name'] . "</option>\r\n";
                }
                if ($dopCat != NULL) {
                    $dopCon = getConnectionString($dopId);
                    $dcon = new MsSQL($dopCon);
                    $dArray = $dcon->getResult($dopCat);
                    foreach ($dArray as $item => $value) {
                        $selectItems = $selectItems . "\t<option selected value =\"" . htmlspecialchars($value['Name']) . "\">" . $value['Name'] . "</option>\r\n";
                    }
                }
                include '../template/chooseDateWithComboBox.html';
                break;
            case 'Firebird':
                require_once '../DB/firebirdSQL.php';
                $selectItems = null;
                $con = new firebirdSQL($conStr);
                $dataArray = $con->getResult($cat);
               // var_dump($dataArray);
                foreach ($dataArray as $item => $value) {
                    $selectItems = $selectItems . "\t<option selected value =\"" . htmlspecialchars($value['NAME']) . "\">" . $value['NAME'] . "</option>\r\n";
                }
                include '../template/chooseDateWithComboBox.html';
                break;
        }
    } else {
        if ($dbType != NULL)
            include '../template/chooseDate.html';
        else header("Location: switcherModule.php");
   // }
}
?>