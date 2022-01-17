<?php
    include "db_connection.php";
    $login = $_COOKIE['login'];
    $number = $_GET['number'];

    $checkOldUsers = mysqli_query($link,"SELECT * FROM bookings WHERE login='$login'");
    $checkOldUsers3 = mysqli_query($link,"SELECT * FROM users WHERE login='$login'");
    $check3 = mysqli_fetch_assoc($checkOldUsers3);
    $booking = $check3['bascet'];
    if($booking != ''){
        if($checkOldUsers == false){
            $received2 = mysqli_query($link,"INSERT INTO bookings (login,number,booking) VALUE ('$login','$number','$booking')");
            $check2 = mysqli_fetch_assoc($received2);
            setcookie('status_booking','1',time()+3650000,'/');
            echo 'Заказ оформлен';
        }elseif($checkOldUsers == true){
            mysqli_query($link,"UPDATE bookings SET number='$number', booking='$booking' WHERE login='$login'");
            $sql = mysqli_query($link,"UPDATE users SET bascet='$ResultFinal' WHERE login='$loginCheck'");
            setcookie('status_booking','1',time()+3650000,'/');
            echo 'Заказ обновлен';
        }
    }else{
        echo 'Выберите тавар';
    }
?>