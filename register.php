<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

</head>
<body>
    
    <div class="container-fullscreen">
        <form method="post" action="register-redirection.php">
            <label for="">Логин:</label>
            <input type="text" name='login' id="login">
            <label for="">Элетронная почта:</label>
            <input type="email" name="email" id="email">
            <label for="">Пароль:</label>
            <input type="password" name="password" id="password">
            <label for="">Повторите Пароль :</label>
            <input type="password" name="password-repeat" id="password-repeat">
            <button type=submit>Зарегистрироваться</button>
        </form>
    </div>
    
</body>
</html>