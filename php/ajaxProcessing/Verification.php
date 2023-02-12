<?php
include "CRUD.php";

switch ($_POST['func']) {
    case 'checkLogin':
        checkLogin();
        break;
    case 'checkPassword':
        checkPassword();
        break;
    case 'checkConfirm_password':
        checkConfirm_password();
        break;
    case 'checkEmail':
        checkEmail();
        break;
    case 'checkName':
        checkName();
        break;
}

function checkLogin(){
    $login = $_POST['login'];
    $data=file_get_contents('../../json/Jsondb.json');;
    $data=json_decode($data, true);
    if(strlen($login)<6) {
        echo 'Логин должен содержать как минимум 6 символов';
    }
    elseif(findUserByLogin($login)){
        echo 'Этот логин уже занят, придумайте новый';
    }
}

function checkPassword(){
    $password = $_POST['password'];
    if(!preg_match("#^[aA-zZ0-9]+$#",$password)){
        echo 'Пароль должен состоять из букв и цифр';
    }
    elseif(strlen($password)<6) {
        echo 'Пароль должен содержать как минимум 6 символов';
    }
}

function checkConfirm_password(){
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if(strcmp($confirm_password,$password) != 0) {
        echo 'Пароли в обоих полях должны совпадать';
    }
}

function checkEmail(){
    $email = $_POST['email'];
    $data=file_get_contents('../../json/Jsondb.json');
    $data=json_decode($data, true);
    if (!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {
        echo "Неверно указан адрес электронной почты";
    }
    elseif(findUserByEmail($email)){
        echo 'Эта почта уже занята';
    }
}

function checkName(){
    $name = $_POST['name'];
    if(strlen($name)<2) {
        echo 'Имя должно содержать как минимум 2 символа';
    }
}
?>