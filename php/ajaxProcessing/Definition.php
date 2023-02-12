<?php
include "CRUD.php";

switch ($_POST['func']) {
    case 'check':
        check();
        break;
    }

function check(){
    $login = $_POST['login'];
    $password = cryptPassword($_POST['password']);
    $data=file_get_contents('../../json/jsondb.json');;
    $data=json_decode($data, true);
    foreach($data as $usr){
        if(strcmp($usr['login'], $login) == 0){
            if(strcmp($usr['password'], $password) == 0) return;
        }
    }
    echo 'Неверный логин или пароль';
}
?>