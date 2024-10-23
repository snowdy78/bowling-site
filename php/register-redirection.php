<?php
    include_once "src/DataBase.php";
    $db = DataBase::getDataBase();
    function allExists(mixed $arr, array $values)
    {
        foreach ($values as $value)
        {
            if (!isset($arr[$value])) 
            {
                return false;
            }
        }
        return true;
    }
    $db->registerUser(
        test_input($_POST['login']), 
        test_input($_POST['phone']),
        test_input($_POST['email']), 
        test_input($_POST['password']), 
        test_input($_POST['password-repeat'])
    );
    header('Location:../index.php?page=main');
?>