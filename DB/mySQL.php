<?php

/**
 * Created by PhpStorm.
 * User: Admindb
 * Date: 15.01.2018
 * Time: 11:40
 */
class mySQL
{
    private $_connection;
    private $_db;

    function __construct($arrayConnection)
    {
        $this->_connection = mysqli_connect($arrayConnection['hostName'], $arrayConnection['userName'], $arrayConnection['userPass']);
        if (!$this->_connection) {
            echo("<P>В настоящий момент сервер базы данных не доступен, поэтому корректное отображение страницы невозможно.</P>");
            exit();
        }
    }

    function selectDB($dbName)
    {
        $this->_db = mysqli_select_db($this->_connection, $dbName);
        if (!$this->_db) {
            echo("<P>В настоящий момент база данных не доступна, поэтому корректное отображение страницы невозможно.</P>");
            exit();
        }
    }

    function getData($sql)
    {
        $sqlExecute = mysqli_query($this->_connection, $sql);
        if (is_bool($sqlExecute)) return true;
        $res = array();
        while ($row = mysqli_fetch_array($sqlExecute)) {
            $res[] = $row;
        }
        return $res;
    }

    function close()
    {
        mysqli_close($this->_connection);
    }
}