
<div class="container-fullscreen">
    <div class="form-container">
        <div class="form-name">
            Вход в аккаунт
        </div>
        <div class="auth-container">
            <form class=register-form method="post" action="./php/login-redirection.php">
                <label for="">Логин или Email:</label>
                <input type="text" name='login' id="login">
                <label for="">Пароль:</label>
                <input type="password" name="password" id="password">
                <button type=submit class="btn">ДА</button>
            </form>
            <?php
                if (!empty($_GET['feedback']))
                {
                    echo "
                        <div class='error-field' align=left>
                            Ошибка, неверный логин или пароль
                        </div>";
                }
            ?>
        </div>

    </div>
</div>
