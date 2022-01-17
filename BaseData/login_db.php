<?php
    include "db_connection.php";
    $login_db = trim($_POST['login']);
    $password_db = trim($_POST['password']);
    $Status = 0;
    $prov = true;
    if (preg_match("/([%$#<>*=&?]+)/", $login_db)) {
        echo 'Недопустимые символы!';
        exit;
    }
    if (preg_match("/([%$#<>*=&?]+)/", $password_db)) {
        echo 'Недопустимые символы!';
        exit;
    }
    if (!empty($_POST)){
        if($link != true){
            echo "<h1 class='error_text'>
                Ошибка 400
            </h1>";
        }else{
            if($login_db =='' || $password_db ==''){
                $prov = false;
                $win_warning = 'Не все поля заполнены';
            }else{
                $received = mysqli_query($link,"SELECT * FROM `users` WHERE login='$login_db' AND password='$password_db'");
                $check = mysqli_fetch_assoc($received);
                if($check == null){
                    $prov = false;
                    $win_warning = 'Вы не правельно ввели Логин или Пороль';
                }else{
                    $prov = true;
                    $Status = 1;
                    setcookie("Status", 1,time()+60*60*24*30*12,'/');
                    setcookie("login", $login_db,time()+60*60*24*30*12,'/');
                    ob_start();
                    header('Location: ../index.php');
                    ob_end_flush();
                }
            }
        }
    }
    
?>