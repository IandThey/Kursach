<?php
    include "db_connection.php";
    $bascet = $_GET['bascet'];
    $arr = explode(',',$bascet);
    $ID = $arr[0];
    $login = $_GET['login'];
    $user_check = mysqli_query($link,"SELECT * FROM `users` WHERE login='$login'");
    $check = mysqli_fetch_assoc($user_check);
    $bascet_check = $check['bascet'];
    $bascet_check_castrat = str_replace($bascet,'',$bascet_check);
    $sql = mysqli_query($link,"UPDATE users SET bascet='$bascet_check_castrat' WHERE login='$login'");
    $sqle = mysqli_query($link,"UPDATE bookings SET booking='$bascet_check_castrat' WHERE login='$login'");
    echo $ID;
?>