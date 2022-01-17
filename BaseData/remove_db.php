<?php
    include "db_connection.php";
    $l = $_COOKIE['login'];
    mysqli_query($link,"DELETE FROM users WHERE login='$l'");
    setcookie('Status', null, -1, '/');
    setcookie('login', null, -1, '/');
    ob_start();
    header('Location: ../index.php');
    ob_end_flush();
?>