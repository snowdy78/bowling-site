<?php
    include "php/make-order-redirection.php";
?>
<div id=content>
    <div class="container-fullscreen">           
        <div class=col-flex>
            <h3>Введите ваши контактные данные и мы вам позвоним!</h3>
            <?php 
                if (isset($_GET['road']))
                    echo "<p style='font-size:0.8em;text-indent:20px;line-height:30px;'>Вы заказываете дорожку ".$_GET['road']."</p>";
            ?>
            <form class="order-form" method="post" action="php/order-redirection.php">
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
                
            </form>
        </div>
        
    </div>
</div>