<?php

$data = [
    "popup_name" => $_POST['popup_name'],
    "popup_email" => $_POST['popup_email'],
    "popup_password" => $_POST['popup_password']
];

$name = $data["popup_name"];
$mail = $data["popup_email"];
$password = $data["popup_password"];

$mysql = new mysqli('localhost', 'root', '', 'fps');

$mysql->query("INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name','$mail','$password')");

$mysql->close();

header("Location: ../pages/index.php");
?>