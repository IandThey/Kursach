<?php
    include "db_connection.php";
    $login = $_GET['login'];
    $user_check = mysqli_query($link,"SELECT * FROM `users` WHERE login='$login'");
    $check = mysqli_fetch_assoc($user_check);
    $bascet = $check['bascet'];
    $arr_basket = explode('~',$bascet); 
    $arr_products = [];
    foreach($arr_basket as $elem){
        $h = explode(',',$elem);
        $arr_products[] = array(
            'id' => $h[0],
            'count' => $h[1]
        );
    };
    $a = '';
    $b = [];
    $arr_d = [];
    foreach($arr_products as $elem2){
        $a = $elem2['id'];
        $b[]= $elem2['count'];
        $All_products_for_basket = mysqli_query($link,"SELECT * FROM products WHERE id='$a'");
        $arr_d[] = mysqli_fetch_assoc($All_products_for_basket);
    }
    $d = [$b,$arr_d];

    echo json_encode($d);
?>