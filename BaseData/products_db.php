<?php
    include "db_connection.php";
    $product = $_GET['product'];
    $number = $_GET['number'];
    if($number == ''){
        $number = 1;
    }
    $product_result = mysqli_query($link,"SELECT * FROM `products` WHERE shortName='$product'");
    $check = mysqli_fetch_assoc($product_result);
    $checkID = $check['id'];
    $loginCheck = $_COOKIE['login'];
    $Add = $checkID.','.$number.'~';
    if (preg_match("/([%$#<>*=&?]+)/", $number)){
        echo 'Недопустимые символы!';
        exit;
    }
    $product_user = mysqli_query($link,"SELECT * FROM `users` WHERE login='$loginCheck'");
    $check_user = mysqli_fetch_assoc($product_user);

    $user_resulte = $check_user['bascet'];
    $ResultFinal = $user_resulte.$Add;
    $sql = mysqli_query($link,"UPDATE users SET bascet='$ResultFinal' WHERE login='$loginCheck'");
    $sqle = mysqli_query($link,"UPDATE bookings SET booking='$ResultFinal' WHERE login='$login'");
    if($sql == true){
        echo $check['name'].'~'.$check['price'].'~'.$checkID.'~'.$number;
    }else{
        echo 'errorDB';
    }
?>