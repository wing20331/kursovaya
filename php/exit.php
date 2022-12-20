<?php

    setcookie("id", '', time() - 42000, '/');
    header("Location: ../pages/index.php");
?>