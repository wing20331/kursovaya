<?php
    $delete = $_POST["delete"];

    $mysql = new mysqli('localhost', 'root', '', 'fps');

    $mysql->query("DELETE FROM `purchase` WHERE id = $delete");

    $mysql->close();

    header("Location: /pages/basket.php");
?>