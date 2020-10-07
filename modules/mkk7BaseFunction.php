<?php
/**
 * Created by PhpStorm.
 * User: Admindb
 * Date: 24.02.2018
 * Time: 14:52
 */
define("hostName", "localhost");
define("userName", "root");
define("password", "");

function conncetDB()
{

    require_once("C:/xampp/htdocs/mkkrk7/DB/mySQL.php");
    $conArray['hostName'] = hostName;
    $conArray['userName'] = userName;
    $conArray['userPass'] = password;
    $auth = new mySQL($conArray);
    $auth->selectDB('mkk7report');
    $auth->getData('SET NAMES utf8');
    return $auth;

}
function disconnectDB($auth)
{
    $auth->close();
}

function getReportName($id)
{
    $auth = conncetDB();
    $reportName = $auth->getData(@"SELECT Name FROM `reports` WHERE ID=" . $id);
    disconnectDB($auth);
    return $reportName[0]['Name'];
}
function getSqlQuery($id)
{
    $auth = conncetDB();
    $reportName = $auth->getData(@"SELECT SQLQUery FROM `reports` WHERE ID=" . $id);
    $auth->close();
    return $reportName[0]['SQLQUery'];
}
function getDbAllias($id)
{
    $auth = conncetDB();
    $reportName = $auth->getData(@"SELECT DBAllias FROM `reports` WHERE ID=" . $id);
    $auth->close();
    return $reportName[0]['DBAllias'];
}
function getDbType($id){
    $dbAlias=getDbAllias($id);
    $auth = conncetDB();
    $dbInfo = $auth->getData(@"SELECT * FROM `dbalias` WHERE DBAlias='" . $dbAlias.@"'");
    $dbtype=$dbInfo[0]['DbType'];
    $auth->close();
    return $dbtype;
}
function getConnectionString($id){
    $dbAlias=getDbAllias($id);
    $auth = conncetDB();
    $dbInfo = $auth->getData(@"SELECT * FROM `dbalias` WHERE DBAlias='" . $dbAlias.@"'");
    $dbtype=$dbInfo[0]['DbType'];
    switch ($dbtype){
        case 'MsSQL':
            $con="Password=" . $dbInfo[0]["Pass"] . ";Persist Security Info=True;User ID=" . $dbInfo[0]["User"] . ";Initial Catalog=" . $dbInfo[0]["Catalog"] . ";Data Source=" . $dbInfo[0]["DataSource"] . ";";
     break;
        case 'Firebird':
            $con['host'] = $dbInfo[0]['DataSource'];
            $con['user'] = $dbInfo[0]['User'];
            $con['pwd'] = $dbInfo[0]['Pass'];
            break;
    }
    $auth->close();
    return $con;
}

function getModule($id)
{
    $auth = conncetDB();
    $reportName = $auth->getData(@"SELECT Module FROM `reports` WHERE ID=" . $id);
    $auth->close();
    return $reportName[0]['Module'];
}
function getCategory($id)
{
    $auth = conncetDB();
    $catID= $auth->getData(@"SELECT IdCategory FROM `reports` WHERE ID=" . $id);
    if ($catID[0]['IdCategory']==NULL){
        $auth->close();
        return NULL;
    }
    $catQuery=$auth->getData(@"SELECT Query FROM `category` WHERE ID=" . $catID[0]['IdCategory']);
    $auth->close();
    return $catQuery[0]['Query'];
}

function getDopReport($id){
    $auth = conncetDB();
    $dopID= $auth->getData(@"SELECT * FROM `menu` WHERE ItemType='dr' And Parrent_ID =" . $id);
    $auth->close();
    if($dopID!=Null)
    return $dopID[0]['Item-_D'];
    else return NULL;
}

function getUserData($login)
{
    $auth = conncetDB();
    $reportName = $auth->getData(@"SELECT * FROM users where User_login = '" . $login . "'");
    $auth->close();
    return $reportName;
}
function getUserRights($id){
    $auth = conncetDB();
    $query=@"SELECT * FROM users where User_id = ".$id;
    $userInfo=$auth->getData($query);
    $idGroup=$userInfo[0]['User_Group_Id'];
    $query2=@"SELECT UserRight FROM `usergroups` WHERE GroupId=".$idGroup;
    $rightsArray= $auth->getData($query2);
    $auth->close();
    return $rightsArray[0]['UserRight'];

}

function getMainItemsMenu($id)
{
    $rights=getUserRights($id);
    $auth = conncetDB();
    $mi = $auth->getData("SELECT * FROM `menu` WHERE ItemType='mi' AND `Item-_D` IN (".$rights.")");
    $auth->close();
    return $mi;
}
function getSubMenuItem($id,$mi)
{
    $rights=getUserRights($id);
    $auth = conncetDB();
    $si = $auth->getData("SELECT * FROM `menu` WHERE (ItemType='si') AND (Parrent_ID = $mi)AND `Item-_D` IN (".$rights.")");
    $auth->close();
    return $si;
}
function getReportItem($si)
{

    $auth = conncetDB();
    $rp = $auth->getData("SELECT * FROM `menu` WHERE (ItemType='rp') AND (Parrent_ID = $si)");
    $auth->close();
    return $rp;
}

function getFormName($id)
{

    $auth = conncetDB();
    $sl=@"SELECT * FROM `menu` WHERE `Item-_D`= $id";
    $two = $auth->getData($sl);
    $sl2=@"SELECT * FROM `menu` WHERE `Item-_D`= ".$two[0]["Parrent_ID"];
    $one = $auth->getData($sl2);
    $auth->close();

    $str=$one[0]["Item_Name"].": ".$two[0]["Item_Name"];

  return $str;
}

function getUserInfo($id){

}



?>