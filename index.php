<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTS-Volga</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="static/style/style.css">
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
        <p style="Color:white; grid-column: 8/9; text-align:right;"><?=$_COOKIE['user']?></p><a href="/exit.php"><button style="border:none; color:white; background-color:#0B8AFF;width:180%; height:100%; font-size:25px;">Выход</button></a>
        <?php endif;?>
        <div class="menu3">
            <button class="burger">&#9776</button>
            <div class="menu1">
                <a href="rules.php">Правила</a>
                <a href="AML.php">Политика AML</a>
                <a href="help.php">Поддержка</a>
                <a href="log.php">Войти</a>
                <a href="reg.php">Регистрация</a>
            </div>
        </div>
    </DIV>
    <div class="mainmain"><img src="static/image/background.jpg" alt="">
        <div class="main">
            <div class="trade">
                <div class="info">
                    <p style="font-size: 10px; grid-row: 1/1">btc-Volga.com</p>
                    <p style="font-weight: bold; grid-row: 2/2;">Безопасный обмен криптовалют</p>
                    <p style="grid-row: 3/3;">Быстро. Выгодно. Надежно.</p>
                    <p style="font-size: 16px;grid-row: 4/4;">График работы <br>Каждый день с 9:00 до 23:00 (UTC+3)</p>
                    <p style="font-size: 16px;grid-row: 5/5;">support@btc-volga.com</p>
                </div>
                <div class="between"></div>
                <div class="forma">
                    <div class="g1">
                        <button>Как совершить обмен</button>
                        <button>Поддержка</button>
                    </div>
                    <div class="form1">
                        <div class="pay">
                            <input type="text" name="pay" placeholder="Отдаете">
                        </div>
                        <img src="static/image/between.png" alt="between">
                        <div class="burgerPay">
                            <button> <img src="static/image/Btc.png" alt="">BTC</button>
                        </div>
                        <div class="minmax">
                            <span>max.: 0.94319491 BTC</span>
                            <span>min.: 0.0188639 BTC</span>
                        </div>
                    </div>
                    <div class="swap">
                        <button><img src="static/image/row.png" alt="swap"></button>
                    </div>
                    <div class="form2">
                        <div class="pay">
                            <input type="text" name="take" placeholder="Получаете">
                        </div>
                        <img src="static/image/between.png" alt="between">
                        <div class="burgerPay">
                            <button> <img src="static/image/Btc.png" alt="">BTC</button>
                        </div>
                        <div class="minmax">
                            <span>max.: 3000000 RUB</span>
                            <span>min.: 60000 RUB</span>
                        </div>
                    </div>
                    <div class="form3">
                        <div class="card"> <input type="text" name="card" placeholder="Номер карты"> </div>
                        <div class="email"> <input type="text" name="email" placeholder="E-MAIL"> </div>
                    </div>
                    <div class="clue">
                        <span>Укажите номер карты куда перевести ваши средства</span>
                    </div>
                    <div class="buttontrade">
                        <button>Обменять</button>
                    </div>
                    <div class="switch">
                        <input type="checkbox">
                        <span>Я согласен с правилами обмена и AML/KYC политикой</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div>
        <span>© Btc-Volga | Политика AML | Правила | Поддержка</span>
        <img src="static/image/Logo BestChange.png" alt=""></div>
    </div>
</body>

</html>