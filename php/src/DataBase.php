<?php
    include_once "User.php";
    include_once "Road.php";
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    class DataBase extends mysqli 
    {
        public static function getDataBase()
        {
            return new DataBase('localhost', 'root', '', 'test1', 3306);
        }
        public function __construct($ip, $user, $password, $table, $port) 
        {
            mysqli::__construct($ip, $user, $password, $table, $port);
        }
        public function getUser($login_data) 
        {
            $query = 'SELECT * FROM users WHERE login="'.$login_data.'" OR email="'.$login_data.'"';
            $result = mysqli_query($this, $query);
            $user = mysqli_fetch_assoc($result);
            if (empty($user))
                return NULL;
            return new User($user);
        }
        public function getUserById(int $user_id)
        {
            $query = 'SELECT * FROM users WHERE id='.$user_id;
            $result = mysqli_query($this, $query);
            $user = mysqli_fetch_assoc($result);
            if (empty($user))
                return NULL;
            return new User($user);
        }
        public function getRoadState(int $road_id) 
        {
            $query = 'SELECT user_id FROM `roads_state` WHERE id='.$road_id;
            $result = mysqli_query($this, $query);
            if (!empty($result))
            {
                $road = mysqli_fetch_assoc($result);
                if (!empty($user_id))
                    return new Road($road);
            }
            return 0;
        }
        public function getFreeRoad() 
        {
            $query = 'SELECT * FROM `roads_state` WHERE NOT(user_id=NULL)';
            $request = mysqli_query($this, $query);
            if (!empty($result))
            {
                $road = mysqli_fetch_all($result)[0];
                if (!empty($user_id))
                    return new Road($road);
            }
            return NULL;
        }
        public function setRoadState(User $user, Road $road)
        {
            $query = 'UPDATE `roads_state` SET user_id='.$user->data['id'].' WHERE id='.$road['id'];
            if (!empty(mysqli_query($this, $query)))
            {
                echo "Статус дорожки успешно обновлён";
                return;
            }
            echo "Ошибка! Сатус не обновлён";
        } 
        public function loginUser($login_data, $password) 
        {
            session_start();
            $user = $this->getUser($login_data);
            if (!empty($user) && $user->data['password'] == $password)
            {
                $_SESSION['login'] = $login_data;
                header('Location:/index.php');
                return $user;
            }
            echo "увы... D':";
            return $user;
        }
        
        public function registerUser($login, $phone, $email, $password, $repeat_password) 
        {
            session_start();
            $user = $this->getUser($login);
            if (!empty($user))
            {
                echo "пользователь с таким login или email уже существует";
            } 
            else if ($password == $repeat_password)
            {
                $query2 = 'INSERT INTO `users` VALUES(DEFAULT, "'.$login.'","'.$password.'","'.$email.'","'.$phone.'")'; 
                $result = mysqli_query($this, $query2);
                if (!empty($result))
                {
                    $_SESSION['login'] = $login;
                    header("Location:php/pages/login.php");
                    return $this->getUser($login);
                }
                print "пользователь незарегистрирован. Попробуйте еще раз";
            }
            else 
            {
                echo "пароли не совпадают";
            }
            return $user;
        }
    }
?>