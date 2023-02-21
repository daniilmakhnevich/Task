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
        echo json_encode('Логин должен содержать как минимум 6 символов');
    }
    elseif(!preg_match("#^[aA-zZ0-9]+$#",$login)){
        echo json_encode('Логин должен состоять из букв и цифр');
    }
    elseif(findUserByLogin($login)){
        echo json_encode('Этот логин уже занят, придумайте новый');
    }
}

function checkPassword(){
    $password = $_POST['password'];
    if(!preg_match("#^[aA-zZ0-9]+$#",$password)){
        echo json_encode('Пароль должен состоять из букв и цифр');
    }
    elseif(strlen($password)<6) {
        echo json_encode('Пароль должен содержать как минимум 6 символов');
    }
}

function checkConfirm_password(){
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if(strcmp($confirm_password,$password) != 0) {
        echo json_encode('Пароли в обоих полях должны совпадать');
    }
}

function checkEmail(){
    $email = $_POST['email'];
    $data=file_get_contents('../../json/Jsondb.json');
    $data=json_decode($data, true);
    if (!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email) && !preg_match("#^[aA-zZ0-9]+$#", $email)) {
        echo json_encode('Неверно указан адрес электронной почты');
    }
    elseif(findUserByEmail($email)){
        echo json_encode('Эта почта уже занята');
    }
}

function checkName(){
    $name = $_POST['name'];
    if(strlen($name)<2) {
        echo json_encode('Имя должно содержать как минимум 2 символа');
    }
    elseif(!preg_match("#^[aA-zZаА-яЯ0-9]+$#",$name)){
        echo json_encode('Имя должно состоять только из букв латиницы или кириллицы');
    }
}
?>