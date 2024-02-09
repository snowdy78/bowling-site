<?php
    $log = test_input($_POST['login']);
    $passw = test_input($_POST['password']);
    $passw2 = test_input($_POST['password2']);
    $email = test_input($_POST['email']);
    $mysqli = new mysqli("localhost","root","usbw","test1",3307);
    $query = 'SELECT * FROM Users Where login="'.$log.'" or email="'.$email.'"';
    $result = mysqli_query($mysqli,$query);
    $user = mysqli_fetch_assoc($result);
    if (!empty($user))
    {
        echo "пользователь с таким login или email уже существует";
        Header("Location:3.php",5);
    }
    else {
        if ($passw==$passw2){
        $passw_hash = password_hash($passw,PASSWORD_BCRYPT);
        $query2 = 'Insert INTO Users(login,password,email) VALUES("'.$log.'","'.$passw_hash.'","'.$email.'")'; 
        $result2 = mysqli_query($mysqli,$query2);
        if (!empty($result2)){
            echo "пользователь зарегистрирован";
            Header("Location:index.php",5);
        }
        else {
            echo "пользователь незарегистрирован. Попробуйте еще раз";
            Header("Location:3.php",5);
        }
        }
        echo "пароли не совпадают";
        Header("Location:3.php",5);
    }
    
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>