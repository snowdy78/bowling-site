<?php

    session_start();
    if (empty($_SESSION['login']))
    {
        echo "<div class='register-frame'><a href='login.php'>Войти</a><a href='register.php'>Регистрация</a></div>";
    }  
    else 
    {
        $log = $_SESSION['login'];
        $query = 'SELECT * FROM users WHERE login="'.$log.'" or email="'.$log.'"';
        $mysqli = new mysqli("localhost","root", "", "test1", 3307);
        $result = mysqli_query($mysqli, $query);
        $user = mysqli_fetch_assoc($result);
        if (empty($user))
            echo "user not found :(";
        else 
            echo "<div class='register-frame' style='grid-template-columns: 2fr'><a href='profile.php'>".$user['login']."</a></div>";
    }
?>