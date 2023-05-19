<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $name = 'auth_project';

    $connect = mysqli_connect($host, $user, $pass, $name);

    if(!$connect) {
        trigger_error(mysqli_connect_error());
    }
    ?>