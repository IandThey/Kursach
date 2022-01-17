<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../styles/style.css">
    <script src="jquery.js"></script>
    <script src ="../jquery-cookie/src/jquery.cookie.js"></script>
    <title>BPS | Регистрация</title>
</head>
<body>
    <div class="wrapper">
        <?php
            include "../BaseData/register_db.php";
        ?>
        <header>
            <a href="/index.php" id="blockLogo_header">
                <div class="bluresLogo"></div>
                <img id="logo_header" src="../img/logo.png">
            </a>
        </header>
        <div class="register-box">
            <div class="register_form">
                <h1 class="heading_form">Регистрация на BPS</h1>
                <p class="win_warning">
                    <?php
                        echo $win_warning;
                    ?>
                </p>
                <form class="forms" method="POST">
                    <input class="form_inputs" type="text" name="login" placeholder="Логин">
                    <input class="form_inputs" type="password" name="password" placeholder="Пороль">
                    <input class="form_inputs" type="password" name="passwordRepeat" placeholder="Повторите пороль">
                    <input class="button_form" type="submit" value="Зарегестрироваться">
                </form>
            </div>
        </div>
        <?php
            include "../templates/footer.php";
        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>