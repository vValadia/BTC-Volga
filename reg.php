<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTS-Volga</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="static/style/style-reg-log.css">
</head>

<body>
    <DIV class="header">
        <div class="logo"> <a href="index.php"><img src="static/image/Logo.svg" alt="logo"></a></div>
        <div class="menu1">
            <nav>
                <ul>
                    <a class="link" href="rules.php">
                        <li>Правила</li>
                    </a>
                    <a class="link"  href="AML.php">
                        <li>Политика</li>
                    </a>
                    <a class="link"  href="help.php">
                        <li>Поддержка</li>
                    </a>
                </ul>
            </nav>
        </div>
        <?php
             if(isset($_COOKIE['user']) == false):
        ?>
        <div class="menu2">
            <nav>
                <ul>
                    <a class="link"  href="log.php">
                        <li>Войти</li>
                    </a>
                    <a class="link"  href="reg.php">
                        <li>Регистрация</li>
                    </a>
                </ul>
            </nav>      

        </div>
        <?php else:?>
        <p style="Color:white; grid-column: 8/9;text-align:right;"><?=$_COOKIE['user']?></p><a href="/exit.php"><button style="border:none; color:white; background-color:#0B8AFF;width:180%; height:100%; font-size:25px;">Выход</button></a>
        <?php endif;?>
        <div class="menu3">
            <button class="burger">&#9776</button>
            <div class="menu1">
                <a href="rules.php">Правила</a>
                <a href="AML.php">Политика</a>
                <a href="help.php">Поддержка</a>
                <a href="log.php">Войти</a>
                <a href="reg.php">Регистрация</a>
            </div>
        </div>
    </DIV>
        <div class="main">
            <img src="static/image/background.jpg" alt="">
            
                <form action="validation/check.php" method="post" class="reg">
                <span>Регистрация</span>
                <input type="text"placeholder="Логин" name="login" id="login">
                <input type="text"placeholder="Email"name="Email" id="Email">
                <input type="text"placeholder="Пароль"name="pass" id="pass">
                <input type="text"placeholder="Повтор пороля">
                <div class="switch">
                    <input type="checkbox">
                    <p>Я согласен с правилами обмена и AML/KYC политикой</p>
                </div>
                <button class="btn-success" type="submit">Зарегистрироваться</button>
            </form>
<div class="footer">
        <div><span>© Btc-Volga | Политика AML | Правила | Поддержка</span>
        <img src="static/image/Logo BestChange.png" alt=""></div>
</div>
</body>

</html>