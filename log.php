<?php
session_start();
error_reporting(0);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Очередь на промежуточную аттестацию</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- авторизация -->
<form action="user.php" method="post">
    <p>
        <a href="/getline.php">Взять номер</a>
    </p>
    <p>
        <a href="/queue.php">Показать очередь</a>
    </p>
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit" name="btn-log">Войти</button>
    <p>
        <a href="/index.php">Вернуться</a>
    </p>
    <p>
        <a href="/admin/userindex.php">админка</a>
    </p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    error_reporting(0);
    ?>
</form>

</body>
</html>