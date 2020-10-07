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
require_once '../ProcessingRequest/KurskActGuest.php';
$db=new KurskActGuest();
$arr=$db->getArrayData();
$report=$db->getReportName();
?>

    <?php
    require_once  '../printFunction.php';
    echo "<br>";
    printHeaderKurskHotel($firstDate,$secondDate);
    echo "<br>";
    printReportName($report);
    echo "<br>";
    echo "<br>";
    echo "\r\n<table align='center' style='text-align: center'>\r\n";
    printHeadShelterGuest();
    printBodyActSummGuest($arr);
    echo "</table>\r\n";
    ?>
</div>
<?php
include "../../template/footerKursk.html";
?>
</body>