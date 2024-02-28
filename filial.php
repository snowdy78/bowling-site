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
            include_once "profile-load.php";
        ?>
    </div>
    <div class="container-fullscreen">
        <div id="filials" class="text-placement">
            <div id="filial-map">

            </div>
            <p>
                Павловский тракт, 188, 4 этаж, Барнаул, Алтайский край, 656922
            </p>
            <p>
                Барнаул, Алтайский край, 656031
            </p>
            <p>
                просп. Красноармейский, 47 а, Барнаул, Алтайский край, 656049
            </p>
            <p>
                Павловский тракт, 251в, Барнаул, Алтайский край, 656057
            </p>
        </div>
    </div>
</body>
</html>