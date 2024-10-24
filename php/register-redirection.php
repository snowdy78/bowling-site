<?php
    include_once "src/DataBase.php";
    $db = DataBase::getDataBase();
    function allExists(mixed $arr, array $values)
    {
        foreach ($values as $value)
        {
            if (empty($arr[$value])) 
            {
                return false;
            }
        }
        return true;
    }
    if (allExists($_POST, ['login', 'phone', 'email', 'password', 'password-repeat'])) 
    {
        $user = $db->registerUser(
            test_input($_POST['login']), 
            test_input($_POST['phone']),
            test_input($_POST['email']), 
            test_input($_POST['password']), 
            test_input($_POST['password-repeat'])
        );
        if ($user != NULL)
        {
            header('Location:../index.php?page=main');
            return;
        }
        echo "asdfsad";
    }
    header('Location:../index.php?page=register&feedback=1');
?>