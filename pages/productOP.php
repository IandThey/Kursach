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
    <title>Каталог | Оперативная память</title>
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
                Оперативная память
            </h1>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/OP1.png">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Оперативная память Kingston FURY Beast Black [KF432C16BBK2/16] 16 ГБ [DDR4, 8 ГБx2 шт, 3200 МГц, PC25600, 16-18-18]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            6500 р
                        </p>
                        <input type="text" class="number-buy COP1">
                        <button class="buy-button" value="OP1">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/OP2.png">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Оперативная память AMD Radeon R9 Gamer Series [R9S416G3206U2K] 16 ГБ [DDR4, 8 ГБx2 шт, 3200 МГц, PC25600, 16-18-18]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            5700 р
                        </p>
                        <input type="text" class="number-buy COP2">
                        <button class="buy-button" value="OP2">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/OP3.png">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Оперативная память Kingston FURY Beast Black [KF432C16BB1K2/32] 32 ГБ [DDR4, 16 ГБx2 шт, 3200 МГц, PC25600, 16-18-18]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            12100 р
                        </p>
                        <input type="text" class="number-buy COP3">
                        <button class="buy-button" value="OP3">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/OP4.png">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Оперативная память Crucial Ballistix Black [BL2K8G32C16U4B] 16 ГБ [DDR4, 8 ГБx2 шт, 3200 МГц, PC25600, 16]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            6800 р
                        </p>
                        <input type="text" class="number-buy COP4">
                        <button class="buy-button" value="OP4">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/OP5.png">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Оперативная память Kingston FURY Beast Black [KF426C16BBK2/16] 16 ГБ [DDR4, 8 ГБx2 шт, 2666 МГц, PC21300, 16-18-18]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            6400 р
                        </p>
                        <input type="text" class="number-buy COP5">
                        <button class="buy-button" value="OP5">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/OP6.png">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Оперативная память AMD Radeon R7 Performance Series [R7S416G2606U2K] 16 ГБ [DDR4, 8 ГБx2 шт, 2666 МГц, PC21300, 16-18-18-35]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            4800 р
                        </p>
                        <input type="text" class="number-buy COP6">
                        <button class="buy-button" value="OP6">
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