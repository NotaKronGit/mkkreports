<?php

/**
 * Created by PhpStorm.
 * User: Admindb
 * Date: 11.04.2017
 * Time: 11:01
 */
class MsSQL
{
    private $_alias;
    private $conn;

    function __construct($alias)
    {
        ini_set('max_execution_time', 10500);

        $this->_alias = $alias;
        $conArray = $this->getConnectionString();
        $serverName = $conArray['serverName'];
        $connectionInfo = array("Database" => $conArray['dataBase'], "UID" => $conArray['uid'], "PWD" => $conArray['pwd'], "CharacterSet" => "UTF-8");
        $this->conn = sqlsrv_connect($serverName, $connectionInfo);
        if ($this->conn) {
        }else {
            echo "Соединение не удалось, ошибка:";
            die(print_r(sqlsrv_errors(), true));
            echo "<br>";
          //  print_r($conArray);
        }

    }

    function __destruct()
    {
        sqlsrv_close($this->conn);
    }

    private function getConnectionString()
    {
        $conInfo['serverName'] = $this->splitConString("Data Source=");
      //  echo "<br>" . $this->splitConString("Data Source=");
        $conInfo['dataBase'] = $this->splitConString("Catalog=");
        $conInfo['uid'] = $this->splitConString("User ID=");
        $conInfo['pwd'] = $this->splitConString("Password=");
       // print_r($conInfo);
        return $conInfo;

    }

    private function splitConString($part)
    {
        $pattern = '#' . $part . '(.*);#Uis';
        if (preg_match($pattern, $this->_alias, $arr))
            return $arr[1];
    }

    public function getResult($sql)
    {
        $data=NULL;
        $stmt = sqlsrv_query($this->conn, $sql);
      //  echo "<br>".$sql."<br>";
        if ($stmt === false) {
           die(print_r(sqlsrv_errors(), true));
            echo "<br>".$sql."<br>";
        }
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $data[] = $row;
        }
        sqlsrv_free_stmt($stmt);
        return $data;
    }

    public function showConfigInfo()
    {
        $conArray = $this->getConnectionString();
        echo "Database" . $conArray['dataBase'] . "<br>UID" . $conArray['uid'] . "<br>PWD" . $conArray['pwd'] . "<br>CharacterSet" . "UTF-8";
    }
}