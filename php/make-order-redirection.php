<?php 
    include_once "src/DataBase.php";
    session_start();
    $db = DataBase::getDataBase();
    if (empty($_SESSION['login']))
    {
        header("Location:/index.php?page=login");
        return;
    }
    
?>