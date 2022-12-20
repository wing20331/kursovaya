<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $colich = $_POST["colich"];

    $mysql = new mysqli('localhost', 'root', '', 'fps');

    $mysql->query("UPDATE `videocard` SET `price` = '$price', 'colich' = '$colich' WHERE `id` = '$id'");

    $mysql->close();

    header("Location: /pages/admin.php");

    
?>