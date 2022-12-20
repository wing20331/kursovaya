<?php

$login = $_POST['auth_login'];
$password = $_POST['auth_password'];

$mysql = new mysqli('localhost', 'root', '', 'fps');

$result = $mysql->query("SELECT * FROM `user` WHERE `email` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();

$mysql->close();

setcookie("id", $user['id'], time() + 42000, "/");

if (count($user) == 0) {
    header("Location: ../pages/index.php");
    echo ("<script type='text/javascript'> alert('Пользователь не найден'); </script>");
    
} else {
    if($user["isAdmin"])
    {
        header("Location: ../pages/admin.php");
    }
    else{
        header("Location: ../pages/profile.php");
    }

}
