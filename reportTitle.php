<?php
require_once './modules/registrationFunction.php';
checkAuth();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta charset="UTF-8"/>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
<header>
    <nav class="dws-menu">
     <?php
     require_once "./modules/mkk7BaseFunction.php";
     if(!isset($_SESSION)){
     session_start();}
              $mi = getMainItemsMenu($_SESSION['user_id']);
     echo "<ul>";
         foreach ($mi as $key => $value) {
             echo "<li><a href=\"#\">" . $value["Item_Name"] . "</a><ul>";
             $si = getSubMenuItem($_SESSION['user_id'],$value["Item-_D"]);
             foreach ($si as $keyS => $valueS) {
              //   echo "<ul>";
                 echo "<li><a href=\"#\">" . $valueS["Item_Name"] . "</a>";
                 echo "<ul>";
                 $rp = getReportItem($valueS["Item-_D"]);
                 foreach ($rp as $keyR => $valueR) {
                     $url=@'"./modules/switcherMenu.php?id='. $valueR["Item-_D"].@'"';
                     echo "<li><a href=$url>" . $valueR["Item_Name"] . "</a></li>";
                 }
              echo "</ul>";
                 echo "</li>";
             }
             echo "</ul></li>";
         }
     echo "</ul>";
       ?>

    </nav>
</header>
</body>
</html>