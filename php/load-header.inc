<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./favicon.ico" style="border-radius:100%;" sizes="any">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/roads.css">
    <link rel="stylesheet" href="./css/balls.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/ball.css">
    <?php
        $page = new Page();
        echo "<meta name='description' content='".$page->description."'>";
        echo "<title>".$page->title."</title>";
    ?>
    
</head>
<body>
    <div id="header">
        <a class="header-button logo" href="./index.php?page=main">
            
        </a>
        <a class="header-button capsule" href="./index.php?page=roads">
            Арендовать дорожку
        </a>
        <a class="header-button capsule" href="./index.php?page=about">
            О нас
        </a>
        <a class="header-button capsule" href="./index.php?page=turnir">
            Турниры и праздники
        </a>
        <ul class="header-button top-menu">
            <li class="dropdown-standart">
                Больше

                <ul class="submenu-standart">
                    <li><a href="./index.php?page=filial">Филиалы</a></li>
                    <li><a href="./index.php?page=balls">Эксклюзивные шары</a></li>
                    <li><a href="./index.php?page=roads">Задействованные дорожки</a></li>
                </ul>
            </li>
        </ul>
        <?php
            include_once "php/header-profile-load.php";
        ?>
    </div>
</body>
</html>