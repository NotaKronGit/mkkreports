<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Отчет</title>
    <meta charset="UTF-8"/>
    <link href="../../style.css" rel="stylesheet"/>

</head>
<body>
<?php
session_start();
$firstDate = new DateTime($_SESSION['firstDate']);
$secondDate = new DateTime($_SESSION['secondDate']);
require_once '../ProcessingRequest/KurskActGames.php';
$db=new KurskActGames();
//$arr=$db->getArrayData();
$sport= $db->getArrayDataWithOwnQuery(@"set DATEFORMAT dmy
declare @Date1 DateTime =  \$first
declare @Date2 DateTime = \$second
set DATEFORMAT dmy
declare @ArcadeID Int = (Select TOP 1 ID From gk.Arcade Order by ID)
Select 
ec.Name as CatName,
       M.NAME as Name,
	  case when(M.GamePrice= 0) then 55 
	  else M.GamePrice end as Price,
       sum(T.VALUE) as Summ,
	   sum(T.QUant) as Count
From gk.MACHINES M
     left join gk.GK_RPL_LINKS RL on @ArcadeID = 0 and M.MACHINE = RL.ITEM and DICTIONARY = 1
     left join (Select T.*, -ISNULL(LogicMidnight,0) as LM From gk.GK_TRANSACTS T
                join gk.LEVELS L on T.LEVEL = L.LEVEL  
                left join gk.ARCADE A on A.ID = T.ARCADE) T on M.MACHINE = T.CREATORADDR 
             -- and T.ACTIVITY in (1,1201) and T.ACCOUNT_TYPE != 3
              and (T.ARCADE = @ArcadeID or 0 = @ArcadeID)          
              and (DateAdd(Hour,LM,T.[DATE]) >= @Date1 and DateAdd(Hour,LM-24,T.[DATE]) <= @Date2)
     left join gk.CATEGORIES C on C.CATEGORY = M.CATEGORY 
     left join gk.Zones Z on M.Zone = Z.Zone 
     left join gk.GK_MACHINE_EXT_CTG_LINKS MLC on M.MACHINE = MLC.MACHINE  
     left join gk.GK_EXT_CATEGORIES EC on MLC.EXT_CATEGORY = EC.Ext_Category
Where Ec.Name Like '%Спортивные%' and T.ACCOUNT_TYPE not in (12,3)
Group by EC.Name,M.MACHINE,M.[PrimeCost], M.Area,T.ACTIVITY,M.Name,M.GamePrice
Order by  sum(T.VALUE)");
$kachal=$db->getArrayDataWithOwnQuery(@"set DATEFORMAT dmy
declare @Date1 DateTime =  \$first
declare @Date2 DateTime = \$second
set DATEFORMAT dmy
declare @ArcadeID Int = (Select TOP 1 ID From gk.Arcade Order by ID)
Select 
ec.Name as CatName,
       M.NAME as Name,
	   M.GamePrice  as Price,
       sum(T.VALUE) as Summ,
	   sum(T.QUant) as Count
From gk.MACHINES M
     left join gk.GK_RPL_LINKS RL on @ArcadeID = 0 and M.MACHINE = RL.ITEM and DICTIONARY = 1
     left join (Select T.*, -ISNULL(LogicMidnight,0) as LM From gk.GK_TRANSACTS T
                join gk.LEVELS L on T.LEVEL = L.LEVEL  
                left join gk.ARCADE A on A.ID = T.ARCADE) T on M.MACHINE = T.CREATORADDR 
             -- and T.ACTIVITY in (1,1201) and T.ACCOUNT_TYPE != 3
              and (T.ARCADE = @ArcadeID or 0 = @ArcadeID)          
              and (DateAdd(Hour,LM,T.[DATE]) >= @Date1 and DateAdd(Hour,LM-24,T.[DATE]) <= @Date2)
     left join gk.CATEGORIES C on C.CATEGORY = M.CATEGORY 
     left join gk.Zones Z on M.Zone = Z.Zone 
     left join gk.GK_MACHINE_EXT_CTG_LINKS MLC on M.MACHINE = MLC.MACHINE  
     left join gk.GK_EXT_CATEGORIES EC on MLC.EXT_CATEGORY = EC.Ext_Category
Where Ec.Name Like '%качалки%' and T.ACCOUNT_TYPE not in (12,3)
Group by EC.Name,M.MACHINE,M.[PrimeCost], M.Area,T.ACTIVITY,M.Name,M.GamePrice
Order by  sum(T.VALUE)");
$video=$db->getArrayDataWithOwnQuery(@"set DATEFORMAT dmy
declare @Date1 DateTime =  \$first
declare @Date2 DateTime = \$second
set DATEFORMAT dmy
declare @ArcadeID Int = (Select TOP 1 ID From gk.Arcade Order by ID)
Select 
ec.Name as CatName,
       M.NAME as Name,
	   M.GamePrice  as Price,
       sum(T.VALUE) as Summ,
	   sum(T.QUant) as Count
From gk.MACHINES M
     left join gk.GK_RPL_LINKS RL on @ArcadeID = 0 and M.MACHINE = RL.ITEM and DICTIONARY = 1
     left join (Select T.*, -ISNULL(LogicMidnight,0) as LM From gk.GK_TRANSACTS T
                join gk.LEVELS L on T.LEVEL = L.LEVEL  
                left join gk.ARCADE A on A.ID = T.ARCADE) T on M.MACHINE = T.CREATORADDR 
             -- and T.ACTIVITY in (1,1201) and T.ACCOUNT_TYPE != 3
              and (T.ARCADE = @ArcadeID or 0 = @ArcadeID)          
              and (DateAdd(Hour,LM,T.[DATE]) >= @Date1 and DateAdd(Hour,LM-24,T.[DATE]) <= @Date2)
     left join gk.CATEGORIES C on C.CATEGORY = M.CATEGORY 
     left join gk.Zones Z on M.Zone = Z.Zone 
     left join gk.GK_MACHINE_EXT_CTG_LINKS MLC on M.MACHINE = MLC.MACHINE  
     left join gk.GK_EXT_CATEGORIES EC on MLC.EXT_CATEGORY = EC.Ext_Category
Where Ec.Name Like '%Видеосимуляторы%' and T.ACCOUNT_TYPE not in (12,3)
Group by EC.Name,M.MACHINE,M.[PrimeCost], M.Area,T.ACTIVITY,M.Name,M.GamePrice
Order by  sum(T.VALUE)");
$redemtion=$db->getArrayDataWithOwnQuery("set DATEFORMAT dmy
declare @Date1 DateTime =  \$first
declare @Date2 DateTime = \$second
set DATEFORMAT dmy
declare @ArcadeID Int = (Select TOP 1 ID From gk.Arcade Order by ID)
Select 
ec.Name as CatName,
       M.NAME as Name,
	   M.GamePrice  as Price,
       sum(T.VALUE) as Summ,
	   sum(T.QUant) as Count
From gk.MACHINES M
     left join gk.GK_RPL_LINKS RL on @ArcadeID = 0 and M.MACHINE = RL.ITEM and DICTIONARY = 1
     left join (Select T.*, -ISNULL(LogicMidnight,0) as LM From gk.GK_TRANSACTS T
                join gk.LEVELS L on T.LEVEL = L.LEVEL  
                left join gk.ARCADE A on A.ID = T.ARCADE) T on M.MACHINE = T.CREATORADDR 
             -- and T.ACTIVITY in (1,1201) and T.ACCOUNT_TYPE != 3
              and (T.ARCADE = @ArcadeID or 0 = @ArcadeID)          
              and (DateAdd(Hour,LM,T.[DATE]) >= @Date1 and DateAdd(Hour,LM-24,T.[DATE]) <= @Date2)
     left join gk.CATEGORIES C on C.CATEGORY = M.CATEGORY 
     left join gk.Zones Z on M.Zone = Z.Zone 
     left join gk.GK_MACHINE_EXT_CTG_LINKS MLC on M.MACHINE = MLC.MACHINE  
     left join gk.GK_EXT_CATEGORIES EC on MLC.EXT_CATEGORY = EC.Ext_Category
Where Ec.Name Like '%Призовые аппараты%' and T.ACCOUNT_TYPE not in (12,3)
Group by EC.Name,M.MACHINE,M.Name,M.GamePrice
Order by  sum(T.VALUE)");
$atrac=$db->getArrayDataWithOwnQuery(@"set DATEFORMAT dmy
declare @Date1 DateTime =  \$first
declare @Date2 DateTime = \$second
set DATEFORMAT dmy
declare @ArcadeID Int = (Select TOP 1 ID From gk.Arcade Order by ID)
Select 
ec.Name as CatName,
       M.NAME as Name,
	   M.GamePrice  as Price,
       sum(T.VALUE) as Summ,
	   sum(T.QUant) as Count
From gk.MACHINES M
     left join gk.GK_RPL_LINKS RL on @ArcadeID = 0 and M.MACHINE = RL.ITEM and DICTIONARY = 1
     left join (Select T.*, -ISNULL(LogicMidnight,0) as LM From gk.GK_TRANSACTS T
                join gk.LEVELS L on T.LEVEL = L.LEVEL  
                left join gk.ARCADE A on A.ID = T.ARCADE) T on M.MACHINE = T.CREATORADDR 
             -- and T.ACTIVITY in (1,1201) and T.ACCOUNT_TYPE != 3
              and (T.ARCADE = @ArcadeID or 0 = @ArcadeID)          
              and (DateAdd(Hour,LM,T.[DATE]) >= @Date1 and DateAdd(Hour,LM-24,T.[DATE]) <= @Date2)
     left join gk.CATEGORIES C on C.CATEGORY = M.CATEGORY 
     left join gk.Zones Z on M.Zone = Z.Zone 
     left join gk.GK_MACHINE_EXT_CTG_LINKS MLC on M.MACHINE = MLC.MACHINE  
     left join gk.GK_EXT_CATEGORIES EC on MLC.EXT_CATEGORY = EC.Ext_Category
Where Ec.Name Like '%Аттракционы%' and T.ACCOUNT_TYPE not in (12,3)
Group by EC.Name,M.MACHINE,M.[PrimeCost], M.Area,T.ACTIVITY,M.Name,M.GamePrice
Order by  sum(T.VALUE)");
$report=$db->getReportName();
?>

    <?php
    require_once  '../printFunction.php';
    printHeaderKurskGrinnland($firstDate,$secondDate);
    printReportName($report);
    echo "\r\n<table style='text-align: center'>\r\n";
    printHeadTopApp();
    printBodyTopApp($atrac);
    printBodyTopApp($sport) ;
    printBodyTopApp($kachal);
    printBodyTopApp($video);
    printBodyTopApp($redemtion);
    echo "</table>\r\n";
    ?>
</div>
<?php
//include "../../template/footerKursk.html";
?>
</body>