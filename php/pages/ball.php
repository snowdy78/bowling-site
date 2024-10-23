<div id=content>
    <div class="container-fullscreen">
        <div class="text-placement flex flex-center">
            <?php
                if (isset($_GET['ball']))
                {
                    $id = intval($_GET['ball']);
                    $db = DataBase::getDataBase();
                    $ball = $db->getBall($id);
                    if ($ball !== NULL)
                    {
                        print "<div id='ball'>";
                        print "<div class='flex flex-center'><img class='image' src='img/ball$id.png' /></div>";
                        print "<div class='description'>
                            <h1>".$ball->data['name']."</h1>
                            <p align=center>
                                ".$ball->data['color']."/".$ball->data['secondary_color']."
                            </p>
                            <h2 align=right>
                                ".$ball->data['price']."р.
                            </h2>
                            <a id='context' class='inv-btn' onclick='buy()'>
                                Купить
                            </a>
                        </div>";
                        print "</div>";
                    }
                }
                else 
                {
                       
                }
            ?>
        </div>
    </div>
</div>

<script>
    function buy()
    {
        let ctx = document.getElementById('context');
        ctx.innerText = '*Делаем вид, что куплено*';
    }
</script>