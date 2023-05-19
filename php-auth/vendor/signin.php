<?php
    session_start();
    require_once "connect_db.php";

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $stmt = mysqli_prepare($connect, "SELECT
                                                    * 
                                                FROM
                                                    users
                                                WHERE 
                                                    `login` = ? AND `password` = ?");
    mysqli_stmt_bind_param($stmt, "ss", $login, $password);
    mysqli_stmt_execute($stmt);
    if( mysqli_num_rows($stmt) > 0) {
        $user = mysqli_fetch_assoc($stmt);

        $_SESSION['user'] = [
            "name" => $user['name'],
            "surname" => $user['surname'],
            "email" => $user['email'],
            "avatar" => $user['avatar']
        ];

        mysqli_stmt_close($stmt);
        mysqli_close($connect);
        header('Location: ../profile.php');
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../index.php');
    }
    ?>
