<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/Style.css"></link>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <title>Document</title>
</head>
<body>
<?php if(isset($_SESSION['login'])): ?>
<form id="helloform">
    <h1><?php echo 'Hello, ' . $_SESSION['login'] . '!';?></h1>
    <p><input type="button" name="submit" value="Выход" onclick="logout()"></input></p>
    <script src="../js/Definition.js?ver=1.0.5"></script>
</form>
<? endif ?>
<?php if(!isset($_SESSION['login'])): ?>
<form id="registrationform" method="post">
    <h1>Регистрация</h1>
    <p>Логин <input type="login" name="login" id="login" value=""> <text id="loginSignal" class="alert"> </text></p>
    <p>Пароль <input type="password" name="password" id="password" value=""> <text id="passwordSignal" class="alert"></text></p>
    <p>Подтвердите пароль <input type="password" name="confirm_password" id="confirm_password" value=""> <text id="confirm_passwordSignal" class="alert"></text></p>
    <p>Адрес электронной почты <input type="email" name="email" id="email" value=""> <text id="emailSignal" class="alert"></text></p>
    <p>Имя <input type="name" name="name" id="name" value=""> <text id="nameSignal" class="alert"></text></p>
    <p hidden>Flag <input type="flag" name="flag" id="flag" value="" onchange="addUser(document.getElementById('login').value, document.getElementById('password').value, document.getElementById('email').value, document.getElementById('name').value, document.getElementById('flag').value)"></p>
    <p><input type="button" name="submit" value="Зарегистрироваться" onclick="verify()"></input]></p>
    <script src="../js/Verification.js?ver=1.0.5"></script>
    <script src="../js/Definition.js?ver=1.0.7"></script>
</form>
<? endif ?>
</body>
</html>