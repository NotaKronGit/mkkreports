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
<?php
require_once './modules/registrationFunction.php';
if (isset($_POST['singUp']))
{
$correct=checkRegistrationData();
  switch ($correct){
      case 0:
          addRegistrathion();
          break;
      case 1:
          echo "<p style='color: red; font-size: 24px;'align='center'>Пользователь с таким именем уже существует.</p>";
          echo "<hr>";
          break;
      case 2:
          echo  "<p style='color: red; font-size: 24px;'align='center'>Пароли не совпадают.</p>";
          echo "<hr>";
          break;
  }
}
?>
<form id="loginForm" action="singUp.php" method="post" >
    <div class="field">
        <label>Имя пользователя:</label>
        <div class="input"><input type="text" name="login" value="" id="login" required="required"/></div>
    </div>

    <div class="field">
        <label>Пароль:</label>
        <div class="input"><input type="password" name="pass" value="" id="pass" required="required"/></div>
    </div>

    <div class="field">
        <label>Повторите пароль:</label>
        <div class="input"><input type="password" name="repeat_pass" value="" id="repeat_pass" required="required"/></div>
    </div>

    <div class="submit">
        <button type="submit" name="singUp">Регистрация</button>
    </div>

</form>

</body>
</html>