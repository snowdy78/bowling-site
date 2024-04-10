<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

</head>
<body>
    <div id="header">
        <a class=logo href="index.php">
            
        </a>
        <a class=capsule href="order.php">
            Арендовать дорожку
        </a>
        <a class=capsule href="about.php">
            О нас
        </a>
        <a class=capsule href="turnir.php">
            Турниры и праздники
        </a>
        <a class=capsule href="filial.php">
            Филиалы
        </a>
        <?php
            include_once "php/profile-load.php";
        ?>
    </div>
    <div class="container-fullscreen flex-start" style="padding-left:10%;padding-right:10%;">
        <div id="about" class="text-placement">
            <h2>
                Добро пожаловать в BowlingCrown
            </h2>
            <p style="text-align: justify">
                Мы приветствуем вас! На данном сайте вы сможете узнать наши ближайшие точки, где вы 
                сможете увлечся игрой в боулинг. :)
            </p>
            <p style="text-align: justify">
                Мы можете посмотреть даты турниров на ближайший месяц <a href="turnir.html">здесь.</a> 
                
            </p>
            <p style="text-align: justify">
                Чтобы заказать дорожку нужно <a href="order.html">здесь</a> всего лишь ввести контактные данные, 
                время (количество часов) игры и номер количество дорожек, если вы играете большой компанией людей. 
            </p>
        </div>
    </div>
    <?php
        include "php/load-footer.php";
   ?>
</body>
</html>