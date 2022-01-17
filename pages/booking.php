<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../styles/style.css">
    <script src="../jquery.js"></script>
    <script src ="../jquery-cookie/src/jquery.cookie.js"></script>
    <title>BPS | Заказ</title>
</head>
<body>
    <?php
        if($_COOKIE['Status'] != 1){
            ob_start();
            header('Location: ../index.php');
            ob_end_flush();
        }
    ?>
    <div class="wrapper">
        <?php
            include "../templates/header.php";
        ?>
        <div class="basket-box">
            <div class="basket">
                <h1 class="head-basket">
                    Корзина
                </h1>
                <div class="exit-basket">
                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                </div>
                <div class="products-basket">
                    <?php
                        if($_COOKIE['Status']==0 || !$_COOKIE['Status']){
                            echo "<h2 class='message-basket'>
                                Войдите в Аккаунт чтобы пользоваться карзиной
                            </h2>";
                        }
                    ?>
                </div>
                <?php
                    if($_COOKIE['Status'] == 1){
                        echo "<a href='booking.php' class='basket-button-booking'>Заказ</a>";
                    }
                ?>
            </div>
        </div>
        <?php
            include "../BaseData/login_db.php";
        ?>
        <div class="login-box" <?php if($prov==false){echo 'style="display:flex"';} ?>>
            <div class="block_form">
                <h1 class="heading_form">Войти на BPS</h1>
                <div class="exit-forms">
                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                </div>
                <p class="win_warning">
                    <?php
                        echo $win_warning;
                    ?>
                </p>
                <form class="forms" method="POST">
                    <input class="form_inputs" type="text" name="login" placeholder="Логин">
                    <input class="form_inputs" type="password" name="password" placeholder="Пороль">
                    <input class="button_form" type="submit" value="Войти">
                    <div class="dopfun_form">
                        <a class="dopfun-Case" href="">
                            Смена пороля
                        </a>
                        |
                        <a class="dopfun-Case" href="register.php">
                            Регистрация
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div id="drop-menu">
            <div class="box-head_drop-menu">
                <h1 class="head_drop-menu">Каталог</h1>
                <div class="exit_drop-menu">
                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                </div>
            </div>
            <a href="productMP.php"><div class="options_drop-menu"><p class="text_drop-menu">Материнские платы</p></div></a>
            <a href="productP.php"><div class="options_drop-menu"><p class="text_drop-menu">Процессоры</p></div></a>
            <a href="productOP.php"><div class="options_drop-menu"><p class="text_drop-menu">Оперативная память</p></div></a>
            <a href="productVK.php"><div class="options_drop-menu"><p class="text_drop-menu">Видеокарты</p></div></a>
            <a href="productBP.php"><div class="options_drop-menu"><p class="text_drop-menu">Блоки питания</p></div></a>
            <a href="productSO.php"><div class="options_drop-menu"><p class="text_drop-menu">Системы охлаждения</p></div></a>
            <a href="productN.php"><div class="options_drop-menu"><p class="text_drop-menu">Накопители</p></div></a>
            <a href="productS.php"><div class="options_drop-menu"><p class="text_drop-menu">Серверные</p></div></a>
            <a href="productK.php"><div class="options_drop-menu"><p class="text_drop-menu">Корпуса</p></div></a>
            <a href="productR.php"><div class="options_drop-menu"><p class="text_drop-menu">Расширения</p></div></a>
            <a href="productO.php"><div class="options_drop-menu"><p class="text_drop-menu">Обслуживание</p></div></a>
        </div>
        <div id="main-box-booking">
            <div class="box-product-booking">
                <div class="box-product-booking-list">

                </div>
                <div class="box-product-booking-status">
                    <div class="status_block-booking">
                        <?php
                            if($_COOKIE['status_booking']==1){
                                echo "Активен";
                            }else{
                                echo "Не активен";
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="box-form-booking">
                <h1 class="head-form">
                    Введите данные
                </h1>
                <div class="data-user-booking">
                    <div class="number-user-booking">
                        <p class="insert-number-user">
                            Телефон
                        </p>
                        <input type="text" class="form_inputs number-user">
                    </div>
                </div>
                <h2 class="head-form head-form-booking">
                    Где получить
                </h2>
                <p class="town-box">
                    В г. Ленивый
                </p>
                <div class="box-address">
                    <div class="description-booking">
                        <p class="address-text">
                            ул. Ленивая, д. 31
                        </p>
                        <p class="address-time-text">
                            Пн с 12:00 до 12:01
                        </p>
                        <button class="address-button-shop">
                            Оформить заказ
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "../templates/footer.php";
        ?>
    </div>
    <script src="../script.js"></script>
</body>
</html>