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

