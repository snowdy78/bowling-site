<?php
    include_once "src/DataBase.php";
    $db = DataBase::getDataBase();
    $db->loginUser(test_input($_POST['login']), test_input($_POST['password']));
?>