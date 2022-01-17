<?php
    include "db_connection.php";
    $login_db = trim($_POST['login']);
    $password_db = trim($_POST['password']);
    $passwordRepeat_db = trim($_POST['passwordRepeat']);
    $Status = 0;
    if (preg_match("/([%$#<>*=&?]+)/", $login_db)) {
        echo 'Недопустимые символы!';
        exit;
    }
    if (preg_match("/([%$#<>*=&?]+)/", $password_db)) {
        echo 'Недопустимые символы!';
        exit;
    }
    if (preg_match("/([%$#<>*=&?]+)/", $passwordRepeat_db)) {
        echo 'Недопустимые символы!';
        exit;
    }
    if (!empty($_POST)){
        if($link != true){
            echo "<h1 class='error_text'>
                Ошибка 400
            </h1>";
        }else{
            if(!$login_db || !$password_db || !$passwordRepeat_db){
                $win_warning = 'Не все поля заполнены';
            }else{
                if($password_db == $passwordRepeat_db){
                    $checkOldUsers = mysqli_query($link,"SELECT * FROM users WHERE login='$login_db'");
                    $check = mysqli_fetch_assoc($checkOldUsers);
                    if($check['login'] != $login_db){
                        $received = mysqli_query($link,"INSERT INTO users (login,password,bascet) VALUE ('$login_db','$password_db','')");
                        $check = mysqli_fetch_assoc($received);
                        ob_start();
                        header('Location: ../index.php');
                        ob_end_flush();
                    }else{
                        $win_warning = 'Пользователь с таким ником уже есть';
                    }
                }else{
                    $win_warning = 'Вы не правельно ввели пороль второй раз';
                }
            }
        }
    }
?>