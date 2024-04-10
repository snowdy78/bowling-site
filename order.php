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
    <div class="container-fullscreen">           
        <div class=col-flex>
            <h3>Введите ваши контактные данные и мы вам позвоним!</h3>
            <div class=order-form>
                <p>Имя и Фамилия</p>
                <input type="text">
                <p>E-Mail</p>
                <input type="text">
                <p>Телефон</p>
                <input type="tel">
                <p>Количество дорожек</p>
                <input type="number">
                <p>Количество часов</p>
                <input type="number">
                <button class="btn">
                    Заказать
                </button>
                
            </div>
        </div>
        
    </div>
</body>
</html>