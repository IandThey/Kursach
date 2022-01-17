<header>
    <a href="/index.php" id="blockLogo_header">
        <div class="bluresLogo"></div>
        <img id="logo_header" src="../img/logo.png">
    </a>
    <div class="header-boxLeft">
        <div class="catalog">
            <h3 class="textCatalog">
                Каталог
            </h3>
        </div>
        <form id="search_header" action="" method="GET">
            <input class="searchInput_header text" type="text" placeholder="Поиск по сайту">
        </form>
    </div>
    <div class="header-boxRight">
        <div class="blockBasket_header">
            <img class="Basket_header" src="../img/basket.png">
        </div>
        <div class="user-menu">
            <p class="user-name">
                <?php
                    if($_COOKIE['Status']==1){
                        echo $_COOKIE['login'];
                    }
                ?>
            </p>
            <div class="box-option-user">
                <p class="option-exit-user">
                    Выход
                </p>
            </div>
        </div>
        <?php
            if($_COOKIE['Status']==0 || !$_COOKIE['Status']){
                echo "<div class='blockLoginOFF_header'>
                            Войти
                        </div>";
            }elseif($_COOKIE['Status']==1){
                echo "<div class='blockLoginON_header'>
                        <i class='fa fa-user-circle-o' aria-hidden='true'></i>
                    </div>";
            }
        ?>
    </div>
</header>