<div id="content">
    <div class="container-fullscreen">
        <div id="roads">
            <?php
                $db = DataBase::getDataBase();
                for ($i = 1; $i <= 10; $i++)
                {
                    print "<div class='img$i roads-container'><div class='roads-text'><h1>Дорожка $i</h1>";
                    print "<button type='submit' class='";
                    if ($db->getRoadState($i) !== 0)
                    {
                        print "inactive-btn'>";
                    }
                    else
                    { 
                        print "btn'";
                    }
                    print " onclick=\"window.location='/index.php?page=order&road=$i';\">";
                    print "Заказать";
                    print "</button>";
                    print "</div></div>";
                }
            ?>
        </div>
    </div>
</div>