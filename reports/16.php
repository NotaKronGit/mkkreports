<?php
session_start();
$_SESSION['id']=16;
require_once '../modules/ProcessingRequest/KurskActGames.php';
require_once '../DB/MsSQL.php';
$selectItems=null;
$con = new MsSQL('Password=mkb-gkdb1;Persist Security Info=True;User ID=sa;Initial Catalog=gkArcade;Data Source=172.18.31.8;');
$dataArray = $con->getResult('SELECT NAME as Name  FROM gkArcade.gk.GK_SUBSCRIPTIONS');
foreach ($dataArray as $item => $value) {
    $selectItems=$selectItems. "\t<option selected value =\"".$value['Name']."\">" . $value['Name'] . "</option>\r\n";
}
include '../template/chooseDateWithComboBox.html';
?>
