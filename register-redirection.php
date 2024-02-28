<?php

    session_start();
    $log = test_input($_POST['login']);
    $passw = test_input($_POST['password']);
    $passw2 = test_input($_POST['password-repeat']);
    $email = test_input($_POST['email']);
    $mysqli = new mysqli("localhost","root", "", "test1", 3307);
    $query = 'SELECT * FROM users Where login="'.$log.'" or email="'.$email.'"';
    $result = mysqli_query($mysqli, $query);
    $user = mysqli_fetch_assoc($result);
    if (!empty($user))
        echo "пользователь с таким login или email уже существует";
    else 
        if ($passw == $passw2)
        {
            $query2 = 'INSERT INTO users(login, password, email) VALUES("'.$log.'","'.$passw.'","'.$email.'")'; 
            if (!empty(mysqli_query($mysqli,$query2)))
            {
                echo "пользователь зарегистрирован";
                $_SESSION['login'] = $log;
                Header("Location:index.php",5);
            }
            else 
                echo "пользователь незарегистрирован. Попробуйте еще раз";
        }
        else 
            echo "пароли не совпадают";
    
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>