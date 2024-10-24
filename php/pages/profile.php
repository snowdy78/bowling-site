
<div id="content">
    <div class="container-fullscreen">
        <div class='text-placement'>
            <div id="profile" class="flex flexh-center column-flex-direction">
                <?php
                    include_once "./php/src/DataBase.php";
                    
                    $db = DataBase::getDataBase();
                    $login = $_SESSION['login'];

                    if (isset($login)) 
                    {
                        $user = $db->getUser($login);
                        if (!empty($user))
                        {
                            echo "
                                <div class='profile-container'>
                                    <div class='profile-label'>
                                        <span>login: </span><span>".$user->data["login"]."</span> 
                                    </div>
                                    <div class='profile-label'>
                                        <span>phone: </span><span>".$user->data["phone_number"]."</span> 
                                    </div>
                                    <div class='profile-label'>
                                        <span>email: </span><span>".$user->data["email"]."</span> 
                                    </div>
                                </div> 
                            ";
                        }
                    }

                ?>
                <a class="logout-btn" href="./php/logout.php">
                    Log Out
                </a>
            </div>
        </div>
    </div>
</div>