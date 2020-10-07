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
$dop=$db->getDopArrayData();
$report=$db->getReportName();
?>
    <?php
    require_once  '../printFunction.php';
    printHeaderBelGrinnland($firstDate,$secondDate);
    printReportName($report);
    echo "\r\n<table style='text-align: center'>\r\n";
    printHeadAct();
    printBodyActDopSumm($arr,$dop);
    echo "</table>\r\n";
    ?>
</div>
<?php
include "../../template/footerKursk.html";
?>
</body>