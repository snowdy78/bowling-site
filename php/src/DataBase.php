<?php
    include_once "User.php";
    include_once "Road.php";
    include_once "Ball.php";
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
            $result = $this->query($query);
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
        public function getBallsCount()
        {
            $query = 'SELECT * FROM `balls_data`';
            $result = mysqli_query($this, $query);
            if (!empty($result))
            {
                return $result->num_rows;
            }
            return 0;
        }
        public function getBall(int $ball_id) 
        {
            $query = 'SELECT * FROM `balls_data` WHERE id='.$ball_id;
            $result = $this->query($query);
            if (!empty($result))
            {
                $ball = mysqli_fetch_assoc($result);
                if (!empty($ball))
                    return new Ball($ball);
            }   
            return NULL; 
        }
        public function getRoadState(int $road_id) 
        {
            $query = 'SELECT * FROM `roads_data` WHERE id='.$road_id;
            $result = mysqli_query($this, $query);
            if (!empty($result))
            {
                $road = mysqli_fetch_assoc($result);
                if (!empty($road))
                    return new Road($road);
            }
            return NULL;
        }
       
        public function getFreeRoad() 
        {
            $query = 'SELECT * FROM `roads_data` WHERE NOT(user_id=NULL)';
            $request = mysqli_query($this, $query);
            if (!empty($result))
            {
                $road = mysqli_fetch_all($result)[0];
                if (!empty($road))
                    return new Road($road);
            }
            return NULL;
        }
        public function setRoadState(Road $road, User $user)
        {
            $query = 'UPDATE `roads_data` SET user_id='.$user->data['id'].' WHERE id='.$road->data['id'];
            $result = mysqli_query($this, $query);
            if (!empty($result))
                return true;
            return false;
        } 
        public function loginUser($login_data, $password) 
        {
            session_start();
            $user = $this->getUser($login_data);
            if (!empty($user) && $user->data['password'] == $password)
            {
                $_SESSION['login'] = $login_data;
                return $user;
            }
            echo "ошибка, неверный логин или пароль.";
            return NULL;
        }
        
        public function registerUser($login, $phone, $email, $password, $repeat_password) 
        {
            session_start();
            $user = $this->getUser($login);
            if (!empty($user))
            {
                throw new ErrorException("пользователь с таким login или email уже существует");
            } 
            else if ($password == $repeat_password)
            {
                $query2 = 'INSERT INTO `users` VALUES(DEFAULT, "'.$login.'","'.$phone.'","'.$email.'","'.$password.'")'; 
                $result = mysqli_query($this, $query2);
                if (!empty($result))
                {
                    $_SESSION['login'] = $login;
                    return $this->getUser($login);
                }
                throw new ErrorException("пользователь незарегистрирован. Попробуйте еще раз");
            }
            else 
            {
                throw new ErrorException("пароли не совпадают");
            }
            return NULL;
        }
    }
?>