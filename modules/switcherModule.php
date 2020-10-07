<?php
/**
 * Created by PhpStorm.
 * User: Admindb
 * Date: 14.02.2018
 * Time: 11:15
 *
 */
if(!isset($_SESSION)){
    session_start();
}
$reportID = $_SESSION['id'];
$_SESSION['firstDate']=$_POST['firstDate'];
$_SESSION['secondDate']=$_POST['secondDate'];
$_SESSION['category']=$_POST['category'];
/*if($_POST['strih']){
    $_SESSION['strih']=$_POST['strih'];
}
*/
require_once 'mkk7BaseFunction.php';
$module= "Location: ./print/".getModule($reportID).".php";
header($module);
?>