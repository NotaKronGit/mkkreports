<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link href="../style.css" rel="stylesheet"/>
    <!-- ... -->  <!-- 1. Подключить библиотеку jQuery -->
    <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
    <!-- 2. Подключить скрипт moment-with-locales.min.js для работы с датами -->
    <script type="text/javascript" src="../js/moment-with-locales.min.js"></script>
    <!-- 3. Подключить скрипт платформы Twitter Bootstrap 3 -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- 4. Подключить скрипт виджета "Bootstrap datetimepicker" -->
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.min.js"></script>
    <!-- 5. Подключить CSS платформы Twitter Bootstrap 3 -->
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <!-- 6. Подключить CSS виджета "Bootstrap datetimepicker" -->
    <link rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css"/>

    <title>Title</title>
</head>
<body style="margin:40px">
<h3 align="center">Формирование отчета:</h3>
<p>Считайте штрих код</p>
<?php
session_start();
echo $_SESSION['strih'];
?>
</body>
</html>