<?php
function listUsers($conection) {
    $users = array();
    $result = mysqli_query($conection, "select * from users");
    while($user = mysqli_fetch_assoc($result)) {
    array_push($users, $user);
    }
return $users;
}

function insertUser($conection, $user, $email, $password ) {
    $query = "insert into users (user, email, password) values ('{$user}', '{$email}',      '{$password}')";
    $resultInsert = mysqli_query($conection, $query);
return $resultInsert;
}

function verifyUser($conection, $user) {
    $result = mysqli_query($conection, "select * from users where user= '{$user}'");
    return mysqli_fetch_assoc($result);
}

function verifyPassword($conection, $password) {
    $result = mysqli_query($conection, "select * from users where password= '{$password}'");
    return mysqli_fetch_assoc($result);
}

function removeUser($conection, $id) {
    $query = "delete from users where id = {$id}";
    return mysqli_query($conection, $query);
}

function findUser($conection, $id) {
    $query = "select * from users where id = {$id}";
    $resultado = mysqli_query($conection, $query);
    return mysqli_fetch_assoc($resultado);
}

function changeUser($conection, $id, $user, $email, $password) {
    $query = "update users set user='{$user}', email = '{$email}', password = '{$password}' where id = {$id}";
    return mysqli_query($conection, $query);
}