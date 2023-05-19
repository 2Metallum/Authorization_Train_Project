<?php session_start() ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="150px" alt="">
        <h2 style="margin: 6px 0"> <?= $_SESSION['user']['name'] ?> <?= $_SESSION['user']['surname'] ?></h2>
        <a href="#" class="link"> <?= $_SESSION['user']['email'] ?> </a>
        <button class="auth-button"><a href="./index.php" class="link">Выход</a></button>
    </form>

</body>
</html>