<div id=content>
    <div class="scalable">
        <div>
            <div class=block-100px>

            </div>
            <div class="flex flex-center column-flex-direction">
                <form class=search-container method="post" action="/php/ball-search.php">
                    <input class="search" type="text" name="search" placeholder="Поиск">
                    <button class='inv-btn' type='submit'>
                        Поиск
                    </button>
                </form>
                <div>
                    <?php
                        if ($_GET['feedback'] === 'error')
                        {
                            echo '<b class="error-feedback">
                                Запрос не найден.
                            </b>';
                        }
                    ?>
                </div>
            </div>
            <div id="balls">
                
                <style>
                    .text-center {
                        text-align:center;
                        line-height:1.5em;
                    }
                </style>
                <div style="padding:50px;">
                    <div align=center>
                    <?php
                        $db = DataBase::getDataBase();
                        $balls_count = $db->getBallsCount();
                        for ($i = 1; $i <= $balls_count; $i++)
                        {
                            $ball = $db->getBall($i);
                            if ($ball !== NULL)
                            {
                                print "
                                    <div class='ball-container'>
                                        <h2 class='grid-center'>".$ball->data['name']."</h2>
                                        <div class='flex flex-center'>
                                            <img width=220 height=220 src='img/ball".$ball->data['id'].".png'/>
                                        </div>
                                        <p class='grid-center text-center'>
                                            ".$ball->data['price']."р.<br>
                                            ".$ball->data['color']."/".$ball->data['secondary_color']."
                                        </p>
                                        <a class='grid-center btn' href='index.php?page=ball&ball=".$ball->data['id']."'>
                                            Купить
                                        </a>
                                    </div>
                                ";
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>