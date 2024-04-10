<?php
    include_once "User.php";
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    class DataBase extends mysqli 
    {
        public function __construct($ip, $user, $password, $table, $port) 
        {
            mysqli::__construct($ip, $user, $password, $table, $port);
        }
        public function getUser($login_data) 
        {
            $query = 'SELECT * FROM users Where login="'.$login_data.'" OR email="'.$login_data.'"';
            $result = mysqli_query($this, $query);
            $user = mysqli_fetch_assoc($result);
            if (empty($user))
                return NULL;
            return new User($user);
        }
        public function loginUser($login_data, $password) 
        {
            session_start();
            $user = $this->getUser($login_data);
            if (!empty($user) && $user->data['password'] == $password)
            {
                $_SESSION['login'] = $login_data;
                header('Location:/index.php', 5);
                return $user;
            }
            echo "увы... D':";
            return $user;
        }
        
        public function registerUser($login, $email, $password, $repeat_password) 
        {
            session_start();
            $user = $this->getUser($login);
            if (!empty($user))
            {
                echo "пользователь с таким login или email уже существует";
            } 
            else if ($password == $repeat_password)
            {
                $query2 = 'INSERT INTO users(login, password, email) VALUES("'.$login.'","'.$password.'","'.$email.'")'; 
                if (!empty(mysqli_query($this, $query2)))
                {
                    echo "пользователь зарегистрирован";
                    $_SESSION['login'] = $login;
                    Header("Location:/login.php",5);
                    return $user;
                }
                echo "пользователь незарегистрирован. Попробуйте еще раз";
            }
            else 
            {
                echo "пароли не совпадают";
            }
            return $user;
        }
    }
?>