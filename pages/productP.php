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
    <title>Каталог | материнские платы</title>
</head>
<body>
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
                        <a class="dopfun-Case">
                            Смена пороля
                        </a>
                        |
                        <a class="dopfun-Case" href="/pages/register.php">
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
        <div class="products-main-box">
            <h1 class="head-products">
                Процессоры
            </h1>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/P1.jpg">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Процессор AMD FX-4300 OEM [AM3+, 4 x 3.8 ГГц, L2 - 4 МБ, L3 - 4 МБ, 2хDDR3-1866 МГц, TDP 95 Вт]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            2500 р
                        </p>
                        <input type="text" class="number-buy CP1">
                        <button class="buy-button" value="P1">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/P2.jpg">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Процессор AMD FX-4320 OEM [AM3+, 4 x 4 ГГц, L2 - 4 МБ, L3 - 4 МБ, 2хDDR3-1866 МГц, TDP 125 Вт]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            2550 р
                        </p>
                        <input type="text" class="number-buy CP2">
                        <button class="buy-button" value="P2">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/P3.jpg">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Процессор AMD FX-4350 OEM [AM3+, 4 x 4.2 ГГц, L2 - 4 МБ, L3 - 8 МБ, 2хDDR3-1866 МГц, TDP 125 Вт]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            2600 р
                        </p>
                        <input type="text" class="number-buy CP3">
                        <button class="buy-button" value="P3">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/P4.jpg">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Процессор AMD FX-4300 BOX [AM3+, 4 x 3.8 ГГц, L2 - 4 МБ, L3 - 4 МБ, 2хDDR3-1866 МГц, TDP 95 Вт, кулер]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            3000 р
                        </p>
                        <input type="text" class="number-buy CP4">
                        <button class="buy-button" value="P4">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/P5.jpg">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Процессор AMD A6-9500 OEM [AM4, 2 x 3.5 ГГц, L2 - 1 МБ, 2хDDR4-2400 МГц, Radeon R5, TDP 65 Вт]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            3200 р
                        </p>
                        <input type="text" class="number-buy CP5">
                        <button class="buy-button" value="P5">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/P6.jpg">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Процессор AMD A6-9500E OEM [AM4, 2 x 3 ГГц, L2 - 1 МБ, 2хDDR4-2400 МГц, Radeon R5, TDP 35 Вт]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            3300 р
                        </p>
                        <input type="text" class="number-buy CP6">
                        <button class="buy-button" value="P6">
                            В корзину
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