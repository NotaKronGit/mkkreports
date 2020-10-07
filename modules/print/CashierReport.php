<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Отчет</title>
    <meta charset="UTF-8"/>
    <link href="../../style.css" rel="stylesheet"/>

</head>
<body>
<?php
session_start();
$firstDate = new DateTime($_SESSION['firstDate']);
$secondDate = new DateTime($_SESSION['secondDate']);
require_once '../ProcessingRequest/KurskActGames.php';
$db=new KurskActGames();
$arr=$db->getArrayData();
$report=$db->getReportName();
$keys=array_keys($arr[0]);
$sqlText=$db->getSqlText();
preg_match_all('/\"(.*?)\"/sei', $sqlText, $matches);
//$filteredColumn=$matches[1];
//print_r($filteredColumn);
require_once '../ProcessingRequest/unionReport.php';
$un= new unionReport($arr,$sqlText);
$un->test();


?>
</body>