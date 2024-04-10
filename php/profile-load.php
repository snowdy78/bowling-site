<?php
    include_once "src/DataBase.php";
    session_start();
    if (empty($_SESSION['login']))
    {
        echo "<div class='register-frame'><a href='login.php'>Войти</a><a href='register.php'>Регистрация</a></div>";
    }  
    else 
    {
        $log = $_SESSION['login'];
        $db = new DataBase("localhost", "root", "", "test1", 3306);
        $user = $db->getUser($log);
        if (empty($user))
            echo "user not found :(";
        else 
            echo "<div class='register-frame' style='grid-template-columns: 2fr'><a href='profile.php'>".$user->data['login']."</a></div>";
    }
?>