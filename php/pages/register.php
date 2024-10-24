
<div class="container-fullscreen">
    <div class="form-container">
        <div class="form-name">
            Регистрация
        </div>
        <div class='auth-container'>
            <form class=register-form method="post" action="./php/register-redirection.php">
                <label for="">Логин:</label>
                <input class=registration-input type="text" name='login' id="login">
                <label for="">Телефон:</label>
                <input type="tel" id="phone" name="phone">
                <label for="">Элетронная почта:</label>
                <input type="email" name="email" id="mail">
                <label for="">Пароль:</label>
                <input type="password" name="password" id="password">
                <label for="">Повторите Пароль :</label>
                <input type="password" name="password-repeat" id="password-repeat">
                <button class="btn" type=submit>Зарегистрироваться</button>
            </form>
            <?php
                if (!empty($_GET['feedback']))
                {
                    echo "
                        <div class='error-field' align=left>
                            Ошибка регистрации, в одном из пунктов:
                            <ol align=left>
                                <li>
                                    вы заполнили не все поля
                                </li>
                                <li>
                                    несовпадающие пароли
                                </li>
                                <li>
                                    пользователь с таким логином уже существует
                                </li>
                                <li>
                                    если у вас иная ошибка регистрации, обратитесь в Тех.П.
                                </li>
                            </ol>
                        </div>";
                }
            ?>
        </div>

    </div>
</div>
