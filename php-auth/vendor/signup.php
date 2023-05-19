<?php
    session_start();
    require_once "connect_db.php";

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if($password === $confirm_password) {
        $path = 'uploads/' . time() . $_FILES['avatar']['name']; // Уникальное имя
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке файла';
            header('Location: ../register.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` 
                                            (`id`, `name`, `surname`, `avatar`, `login`, `email`, `password`) 
                                       VALUES 
                                            (NULL, '$name', '$surname', '$path', '$login', '$email', '$password')");
        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: ../index.php');
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }


?>