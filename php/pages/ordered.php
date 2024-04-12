<div id="content">
    <div class="container-fullscreen">
        <div class="text-placement flex flex-center">
            <h1>
            <?php
                if (isset($_GET['order_state']))
                {
                    if ($_GET['order_state'] === "true")
                    {
                        echo "Заказ успешно выполнен!";
                    }
                    else 
                        echo "Ошбика, невозможно сделать заказ";
                }
                else
                    echo "Ошибка, неизвестный номер дорожки"; 
            ?>
            </h1>
        </div>
    </div>
</div>