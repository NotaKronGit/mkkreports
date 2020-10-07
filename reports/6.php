<?php
session_start();
$_SESSION['id']=6;
require_once '../modules/ProcessingRequest/KurskActGames.php';
require_once '../DB/MsSQL.php';
$selectItems=null;
//$source= new KurskActGames();
//$conStr=$source->getConnectionString();
$con = new MsSQL('Password=12Fltzkja;Persist Security Info=True;User ID=sa;Initial Catalog=gkArcade;Data Source=172.16.42.18;');
$dataArray = $con->getResult('SELECT NAME as Name  FROM gkArcade.gk.GK_SUBSCRIPTIONS');
foreach ($dataArray as $item => $value) {
    $selectItems=$selectItems. "\t<option selected value =\"".$value['Name']."\">" . $value['Name'] . "</option>\r\n";
}
include '../template/chooseDateWithComboBox.html';
?>
