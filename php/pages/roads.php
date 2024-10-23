<div id="content">
    <div class="container-fullscreen">
        <div id="roads">
            <?php
                $db = DataBase::getDataBase();
                for ($i = 1; $i <= 10; $i++)
                {
                    print "<div class='img$i roads-container'><div class='roads-text'><h1>Дорожка $i</h1>";
                    print "<a class='btn";
                    $road = $db->getRoadState($i);

                    if ($road->data['user_id'] !== NULL)
                    {
                        print " inactive-btn'";
                        print " href='#'>";
                        print "Занята";
                    }
                    else
                    { 
                        print "'";
                        print " href='./php/order-redirection.php?&road=$i'>";
                        print "Заказать";
                    }
                    
                    print "</a>";
                    print "</div></div>";
                }
            ?>
        </div>
    </div>
</div>