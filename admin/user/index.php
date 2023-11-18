<?php
session_start();
    if(!isset($_SESSION["user"])){
        header('location:login.php');
    }
?>
<a href="logout.php" title="logout">Logout</a>