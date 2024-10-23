<?php
    include_once "src/DataBase.php";
    $db = DataBase::getDataBase();
    $user = $db->loginUser(test_input($_POST['login']), test_input($_POST['password']));
    if (!empty($user))
        header("Location:../index.php?page=main")
?>