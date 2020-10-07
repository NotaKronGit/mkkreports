<?php

/**
 * Created by PhpStorm.
 * User: Admindb
 * Date: 30.01.2018
 * Time: 15:35
 */
class firebirdSQL
{
    private $conn;

    function __construct($allias)
    {
        //print_r($allias);
        $this->conn = ibase_connect($allias['host'], $allias['user'], $allias['pwd'],"utf-8") or die('Error in db connect');
    }

    function __destruct()
    {
        ibase_close($this->conn);
    }

    public function getResult($sql)
    {
        $data = null;
        $rid = ibase_query($this->conn, $sql);
        if ($rid === false) errorHandle(ibase_errmsg(), $sql);
        //$data = ibase_fetch_assoc($rid);
        while ($row=ibase_fetch_assoc($rid)){
            $data[] = $row;
        }
      //  echo $sql;
       return $data;
    }
}