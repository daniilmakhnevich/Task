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
<form id="registrationform" method="post">
    <h1>Регистрация</h1>
    <p>Логин <input type="login" name="login" id="login" value="Vova337"> <text id="loginSignal" class="alert"> </text></p>
    <p>Пароль <input type="password" name="password" id="password" value="abcd1234"> <text id="passwordSignal" class="alert"></text></p>
    <p>Подтвердите пароль <input type="password" name="confirm_password" id="confirm_password" value="abcd1234"> <text id="confirm_passwordSignal" class="alert"></text></p>
    <p>Адрес электронной почты <input type="email" name="email" id="email" value="vovan337@mail.ru"> <text id="emailSignal" class="alert"></text></p>
    <p>Имя <input type="name" name="name" id="name" value="Vova"> <text id="nameSignal" class="alert"></text></p>
    <p><input type="button" name="submit" value="Зарегистрироваться" onclick="verify()"></input]></p>
    <script src="../js/Verification.js?ver=1.0.1"></script>
</body>
</html>