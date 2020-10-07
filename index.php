<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta charset="UTF-8"/>
    <link href="style.css" rel="stylesheet"/>

</head>

<body>

<?php
require_once "./modules/userAuthorization.php";
if (isset($_POST['do_login'])) {
    $user = new userAuthorization();
    $check = $user->checkValidation($_POST['login'], $_POST['pass']);
    if ($check == null) {
        echo "<p style='color: red; font-size: 24px;'align='center'>Такого пользователя не существует или пароль не верен.</p>";
        echo "<hr>";
    } else {
if(!isset($_SESSION)){
    session_start();
}
$_SESSION['user_id']=$check;
 header('Location: reportTitle.php');
    }
}
?>
<form id="loginForm" action="" method="post">
    <p style="font-size: 14px">Пожалуйста зарегистрируйтесь</p>
    <br>
    <div class="field">
        <label>Имя пользователя:</label>
        <div class="input"><input type="text" name="login" value="" id="login" required="required"/></div>
    </div>

    <div class="field">
        <label>Пароль:</label>
        <div class="input"><input type="password" name="pass" value="" id="pass" required="required"/></div>
    </div>

    <div class="submit">
        <button type="submit" name="do_login">Войти</button>
    </div>

</form>

</body>
</html>