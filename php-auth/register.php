<?php session_start() ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Registration Form -->

    <form action="./vendor/signup.php" method="post" class="auth-window" enctype="multipart/form-data">
        <h2 class="auth-title">Регистрация</h2>

        <label>*Имя</label>
        <input type="text" placeholder="Введите ваше имя" name="name">

        <label>*Фамилия</label>
        <input type="text" placeholder="Введите вашу фамилию" name="surname">

        <label>*Аватарка</label>
        <input type="file" name="avatar">

        <label>*Логин</label>
        <input type="text" placeholder="Введите ваш логин" name="login">

        <label>*Почта</label>
        <input type="email" placeholder="Введите почту" name="email">

        <label>*Пароль</label>
        <input type="password" placeholder="Введите пароль" name="password">

        <label>*Подтверждение пароль</label>
        <input type="password" placeholder="Подтвердите пароль" name="confirm-password">

        <button class="auth-button">Зарегистрироваться</button>

        <div class="auth-to-registration">
            <span>У вас уже есть аккаунт? </span><a href="./index.php">Авторизируйтесь</a>
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