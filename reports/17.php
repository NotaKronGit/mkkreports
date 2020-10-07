<?php
session_start();
$_SESSION['id']=17;
require_once '../DB/MsSQL.php';
$selectItems=null;
$con = new MsSQL('Password=mkb-gkdb1;Persist Security Info=True;User ID=sa;Initial Catalog=gkArcade;Data Source=172.18.31.8;');
$dataArray = $con->getResult('declare @ArcadeID Int = (Select TOP 1 ID From gk.Arcade Order by ID)
Select 
      case when T.PARAM2 = 0 then \'Замена карты\'
           when T.ACTIVITY in (304, 1102) then \'Возврат карты\'
		   when P.NAME is NULL then \'Продажа карты через киоск\'
           else P.NAME end as Name
From gk.GK_TRANSACTS T
     left join (Select *, -ISNULL(LogicMidnight,0) as LM From gk.ARCADE) AR on AR.ID = T.ARCADE
     left join gk.PACKAGES P on T.PARAM1 = P.PACKAGE
     left join gk.POSES POS on T.CREATORADDR = POS.POS
     left join gk.Zones Z on POS.Zone = Z.Zone
Where T.ACTIVITY in (301,304,1102)
      and (T.ARCADE = @ArcadeID or 0 = @ArcadeID)
     Group by  
      case when T.PARAM2 = 0 then \'Замена карты\'
           when T.ACTIVITY in (304, 1102) then \'Возврат карты\'
		   when P.NAME is NULL then \'Продажа карты через киоск\'
           else P.NAME end
,T.ACTIVITY
Order by Name');
foreach ($dataArray as $item => $value) {
    $selectItems=$selectItems. "\t<option selected value =\"".$value['Name']."\">" . $value['Name'] . "</option>\r\n";
}
include '../template/chooseDateWithComboBox.html';
?>