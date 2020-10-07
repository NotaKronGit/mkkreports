<?php
/**
 * Created by PhpStorm.
 * User: Admindb
 * Date: 16.05.2018
 * Time: 11:42
 */

class KurskSailsSinema
{
    private $_id;
    private $_firstDate;
    private $_secondDate;

    function __construct()
    {
        if (!isset($_SESSION)) {
            session_sart();
        }
        $this->_firstDate = new DateTime($_SESSION['firstDate']);
        $this->_secondDate = new DateTime($_SESSION['secondDate']);
        $this->_id = $_SESSION['id'];
    }

    public function getArrayData()
    {
        require_once '..\mkk7BaseFunction.php';
        $con = getConnectionString($this->_id);
        $query = getSqlQuery($this->_id);

        $first = "'" . $this->_firstDate->format('Y/m/d') . " 08:00'";
        $second = "'" . $this->_secondDate->format('Y/m/d') . " 08:00'";
        $tmp = str_replace('$first', $first, $query);
        $query = str_replace('$second', $second, $tmp);

        if(isset($_SESSION['category'])){
            $cat = "('" . implode("','", str_replace("'", "''", $_SESSION['category'])) . "')";
            $query = str_replace('$category', $cat, $query);}

        require_once '../../DB/firebirdSQL.php';
        $con = new firebirdSQL($con);
       // echo $query;
        $dataArray = $con->getResult($query);
        // var_dump($dataArray);
        return $dataArray;
    }
    public function getReportName()
    {
        require_once '..\mkk7BaseFunction.php';
        return getReportName($this->_id);
    }

}