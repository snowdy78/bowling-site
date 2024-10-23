<?php
    session_start();
    $_SESSION['login'] = NULL;
    session_destroy();
    header("Location:../index.php?page=main");
?>