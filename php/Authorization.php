<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <title>Document</title>
</head>
<body>
<form id="loginform" method="post">
    <h1>Вход</h1>
    <p>Логин <input type="login" name="login" id="login" value="Vova337"></p>
    <p>Пароль <input type="password" name="password" id="password" value="abcd1234"></p>
    <p><input type="button" name="submit" onclick="define()" value="Войти"></input]></p>
    <p><input type="button" name="submit" value="Зарегистрироваться" onclick="window.location.href = 'Registration.php'"></input></p>
    <script src="../js/Definition.js?ver=1.0.1"></script>
</form>
</body>
</html>