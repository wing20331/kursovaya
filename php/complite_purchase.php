<?php
    $mysql = new mysqli('localhost', 'root', '', 'fps');

    $id = $_COOKIE["id"];
    $ost = $colich["colich"];
    

    $result = $mysql->query("SELECT * FROM `purchase` WHERE `userId` = '$id'");

    while($userBusket = mysqli_fetch_assoc($result)) {
        $userId = $userBusket["userId"];
        $videocardId = $userBusket["videocardId"];
        $colich = $userBusket["colich"];
        $mysql->query("INSERT INTO `history` (userId, videocardId, colich) VALUES ($userId, $videocardId, $colich)");
        echo ($ost);
    }

    $mysql->query("DELETE FROM `purchase`");

    $mysql->close();

    header("Location: /pages/profile.php");


    
?>