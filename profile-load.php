<?php
    $query = 'SELECT * FROM users WHERE login='.$_SESSION['login'].' or email='.$_SESSION['login'];
    $mysqli = new mysqli("localhost","root", "", "test1", 3307);
    $result = mysqli_query($mysqli, $query);
    
    $user = mysqli_fetch_assoc($result);
    if (!$_SESSION['login'])
    {
        echo '<a href="login.php">Войти</a><a href="register.php">Регистрация</a>';
    }  
    else 
    {
        echo '<a href="profile.php">'.$user['login'].'</a>';
    }
?>