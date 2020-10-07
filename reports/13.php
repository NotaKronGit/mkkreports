<?php
session_start();
$_SESSION['id']=13;
require_once '../DB/MsSQL.php';
$selectItems=null;
$con = new MsSQL('Password=123456;Persist Security Info=True;User ID=sa;Initial Catalog=gkArcade;Data Source=172.21.8.57;');
$dataArray = $con->getResult('  Select 
       ISNULL(M.[NAME],\'\') as Name
 
From gk.GK_TRANSACTS T 
         join gk.MACHINES M on T.PARAM1 = M.MACHINE
     left join gk.POSES P on P.POS = T.CREATORADDR
     left join gk.CATEGORIES C on C.CATEGORY = M.CATEGORY     
Where T.Activity in (2,3,802,803) and ISNULL(T.ACCOUNT_TYPE,0) != 2   -- продажа НЕ за купоны 
Group by  M.[NAME]
Order by M.Name ');
foreach ($dataArray as $item => $value) {
    $selectItems=$selectItems. "\t<option selected value =\"".$value['Name']."\">" . $value['Name'] . "</option>\r\n";
}
include '../template/chooseDateWithComboBox.html';
?>