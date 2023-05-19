<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorize</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Authorizing Form -->

    <form action="./vendor/signin.php" method="post" class="auth-window">
        <h2 class="auth-title">Авторизация</h2>
        <label>Логин</label>
        <input type="text" placeholder="Введите логин" name="login">
        <label>Пароль</label>
        <input type="password" placeholder="Введите пароль" name="password">
        <button class="auth-button" type="submit">Войти</button>
        <div class="auth-to-registration">
            <span>Если у вас нет аккаунта? </span><a href="./register.php" class="link">Зарегистрируйтесь</a>
        </div>
        <?php
        if($_SESSION['message']) {
            echo '<p class="message">' . $_SESSION[message] . '<p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>