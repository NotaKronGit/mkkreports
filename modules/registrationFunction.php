<?php
/**
 * Created by PhpStorm.
 * User: Admindb
 * Date: 16.01.2018
 * Time: 10:34
 *
 */
function checkRegistrationData()
{
    require_once './DB/mySQL.php';
    $conArray['hostName'] = 'localhost';
    $conArray['userName'] = 'root';
    $conArray['userPass'] = '';
    $auth = new mySQL($conArray);
    $auth->selectDB('mkk7report');
    $correct = 0;
    $users = $auth->getData(@"SELECT User_login FROM `users` WHERE User_login='" . $_POST['login'] . "'");
    $auth->close();
    if ($users) {
        $correct = 1;
    }
    if ($_POST['pass'] != $_POST['repeat_pass']) {
        $correct = 2;
    }
    return $correct;
}

function addRegistrathion()
{
    $login = $_POST['login'];
    $salt = getRandomString(15);
    $status =1;
    require_once './DB/mySQL.php';
    $conArray['hostName'] = 'localhost';
    $conArray['userName'] = 'root';
    $conArray['userPass'] = '';
    $auth = new mySQL($conArray);
    $auth->selectDB('mkk7report');
    $auth->getData('SET NAMES utf8');
    $sql="INSERT INTO `users` (`User_id`, `User_login`, `User_pass`, `salt`, `active_hex`, `status`, `User_Group_Id`) VALUES (NULL, '".$login."', '".password_hash($_POST["pass"].$salt, PASSWORD_DEFAULT)."', '".$salt."', '',". $status.", NULL)";
    $users = $auth->getData($sql);
    $auth->close();
}
function getRandomString($num)
{
    $letter = range('a', "z");
    $number = range(0, 9);
    $letter = implode('', $letter);
    $letter = $letter . strtoupper($letter) . implode('', $number);

    $randStr = '';
    for ($i = 0; $i < $num; $i++) {
        $randStr .= $letter[rand(0, strlen($letter) - 1)];
    }
    return $randStr;
}
function checkAuth(){
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['user_id'])) {
              header('Location:..\index.html');
    }
    }

?>