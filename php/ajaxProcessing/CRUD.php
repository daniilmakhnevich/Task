<?php
switch ($_POST['func']) {
    case 'addUser':
        addUser();
        break;
}

function addUser(){
    $user=setUser();
    if(!findUserByLogin($user['login'])){
        $user['password'] = cryptPassword($user['password']);
        $data=file_get_contents('../json/jsondb.json');;
        $data=json_decode($data, true);
        array_push($data, $user);
        $json = json_encode($data);
        file_put_contents('../../json/jsondb.json', $json);
        echo 'Регистрация прошла успешно';
    }
}

function setUser(){
    $user=[
        'login' => $_POST['login'],
        'password' => $_POST['password'],
        'email' => $_POST['email'],
        'name' => $_POST['name']
    ];
    return $user;
}

function cryptPassword($password){
    return crypt(md5($password), "salt");
}

function findUserByLogin($login){
    $data=file_get_contents('../../json/jsondb.json');;
    $data=json_decode($data, true);
    foreach($data as $usr){
        if(strcmp($usr['login'], $login) == 0){
            return true;
        }
    }
}

function findUserByEmail($email){
    $data=file_get_contents('../../json/jsondb.json');;
    $data=json_decode($data, true);
    foreach($data as $usr){
        if(strcmp($usr['email'], $email) == 0){
            return true;
        }
    }
    return false;
}