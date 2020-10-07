<?php
/**
 * Created by PhpStorm.
 * User: Admindb
 * Date: 12.02.2018
 * Time: 14:22
 */
require_once '../modules/ProcessingRequest/KurskActGames.php';
$report= new KurskActGames(5,'01-01-18 00:00','31-01-18 00:00');
$res= $report->getArrayData();
var_dump($res);
?>