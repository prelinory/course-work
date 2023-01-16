<?php
error_reporting(0);
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Очередь на промежуточную аттестацию</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- Форма регистрации -->
<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
    <label>Администратор</label>
    <input name="admin" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked">
    <button type="submit">Зарегестрировать</button>
    <p>
         <a href="/">авторизируйтесь</a>!
    </p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    ?>
</form>

</body>
</html>