<?php
    include_once "src/DataBase.php";
    session_start();
    // if user is not signed in
    if (!isset($_SESSION['login']))
    {
        echo "
            <div class='register-frame'>
                <a class='header-button' href='/index.php?page=login'>
                    Войти
                </a>
                <a class='header-button' href='/index.php?page=register'>
                    Регистрация
                </a>
            </div>";
        return;
    }
    $log = $_SESSION['login'];
    $db = new DataBase("localhost", "root", "", "test1", 3306);
    $user = $db->getUser($log);
    if (!isset($user))
        echo "user not found :(";
    else 
        echo "
            <div class='register-frame' style='grid-template-columns: 2fr'>
                <a class='header-button' href='/index.php?page=profile'>"
                    .$user->data['login'].
                "</a>
            </div>";
?>