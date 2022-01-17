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
                Материнские платы
            </h1>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/MP1.png">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Материнская плата Biostar A68N-2100K [BGA 769 (FT3b), AMD A68H, AMD E1-6010 2x1.35 ГГц, 2xDDR3, DDR3L-1333 МГц, 1xPCI-Ex16, аудио 7.1, Mini-ITX]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            3000 р
                        </p>
                        <input type="text" class="number-buy CMP1">
                        <button class="buy-button" value="MP1">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/MP2.png">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Материнская плата Esonic G31CHL3 [LGA 775, Intel G31, 2xDDR2-800 МГц, 1xPCI-Ex16, аудио 5.1, Micro-ATX]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            3000 р
                        </p>
                        <input type="text" class="number-buy CMP2">
                        <button class="buy-button" value="MP2">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/MP3.png">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Материнская плата GIGABYTE GA-E6010N [BGA 769 (FT3b), AMD E1-6010 2x1.35 ГГц, 2xDDR3-1333 МГц, аудио 7.1, Mini-ITX]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            3200 р
                        </p>
                        <input type="text" class="number-buy CMP3">
                        <button class="buy-button" value="MP3">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/MP4.png">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Материнская плата Esonic G41CRL3 [LGA 775, Intel G41, 2xDDR2-800 МГц, 1xPCI-Ex16, аудио 5.1, Micro-ATX]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            3200 р
                        </p>
                        <input type="text" class="number-buy CMP4">
                        <button class="buy-button" value="MP4">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/MP5.png">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Материнская плата Esonic G41CPL3 [LGA 775, Intel G41, 2xDDR3-1333 МГц, 1xPCI-Ex16, аудио 5.1, Micro-ATX]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            3500 р
                        </p>
                        <input type="text" class="number-buy CMP5">
                        <button class="buy-button" value="MP5">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="products-box">
                <div class="product-img-box">
                    <img class="product-img" src="../img/MP6.png">
                </div>
                <div class="description-box-products">
                    <p class="description-products">
                        Материнская плата GIGABYTE H310M H [LGA 1151-v2, Intel H310, 2xDDR4-2666 МГц, 1xPCI-Ex16, аудио 7.1, Micro-ATX]
                    </p>
                    <div class="buy-box">
                        <p class="price">
                            3500 р
                        </p>
                        <input type="text" class="number-buy CMP6">
                        <button class="buy-button" value="MP6">
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