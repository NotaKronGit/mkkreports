<?php
session_start();
$_SESSION['id']=15;
require_once '../DB/MsSQL.php';
require_once '../modules/ProcessingRequest/KurskActGames.php';
$selectItems=null;
//$source= new KurskActGames();
//$conStr=$source->getConnectionString();
$con = new MsSQL('Password=mkb-gkdb1;Persist Security Info=True;User ID=sa;Initial Catalog=gkArcade;Data Source=172.18.31.8;');
$dataArray = $con->getResult('SELECT M.Name
  FROM gkArcade.gk.MachinesView M
  left join [gkArcade].[gk].[GK_MACHINE_EXT_CTG_LINKS] ML on M.MACHINE=ML.MACHINE
  where ML.EXT_CATEGORY IN(7) 
  and M.Name NOT in(\'1\',\'2\',\'3\',\'4\',\'5\')
  order by M.NAME  ');
foreach ($dataArray as $item => $value) {
    $selectItems=$selectItems. "\t<option selected value =\"".$value['Name']."\">" . $value['Name'] . "</option>\r\n";
}
include '../template/chooseDateWithComboBox.html';
?>