<?php

/**
 * Created by PhpStorm.
 * User: Admindb
 * Date: 15.01.2018
 * Time: 10:49
 */
class userAuthorization
{
    private $_conArray;

    function __construct()
    {
        require_once './DB/mySQL.php';
        $this->_conArray['hostName'] = 'localhost';
        $this->_conArray['userName'] = 'root';
        $this->_conArray['userPass'] = '';

    }
    public function checkValidation($login, $pass)
    {

        require 'mkk7BaseFunction.php';
        $user_id = null;
        $users = getUserData($login);
        var_dump($users);
        if ($users) {
            if (password_verify($pass . $users[0]["salt"], $users[0]["User_pass"])) {
                echo "<br> Пароль ВЕРЕН!!!!<br>";
                $user_id = $users[0]['User_id'];
            } else {
                echo "<br>Пароль не ВЕРНЫЙ!!!!<br>";

            }
        }
        return $user_id;

    }



}