<?php
/**
 * Created by PhpStorm.
 * User: Admindb
 * Date: 05.03.2018
 * Time: 12:17
 */
require_once '../registrationFunction.php';
checkAuth();

header("Location: ../../singUp.php");
?>