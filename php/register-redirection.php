<?php
    include_once "src/DataBase.php";
    $db = new DataBase("localhost", "root", "", "test1", 3306);
    $db->registerUser(
        test_input($_POST['login']), 
        test_input($_POST['phone']),
        test_input($_POST['email']), 
        test_input($_POST['password']), 
        test_input($_POST['password-repeat'])
    );
?>