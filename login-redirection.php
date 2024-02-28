<?php

    session_start();
    $log = test_input($_POST['login']);
    $passw = test_input($_POST['password']);
    $mysqli = new mysqli("localhost","root", "", "test1", 3307);
    $query = 'SELECT * FROM users Where login="'.$log.'" or email="'.$log.'"';
    $result = mysqli_query($mysqli, $query);
    $user = mysqli_fetch_assoc($result);
    if (empty($user))
        echo "увы... :(";
    else
    {
        if ($user['password'] == $passw)
        {
            $_SESSION['login'] = $log;
            Header('Location:index.php', 5);
        }
        else echo "увы... D':";
    }
    
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>