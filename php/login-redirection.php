<?php
    include_once "src/DataBase.php";
    $db = new DataBase("localhost", "root", "", "test1", 3306);
    $db->loginUser(test_input($_POST['login']), test_input($_POST['password']));
?>