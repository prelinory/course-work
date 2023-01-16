<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'test');
if (!$connect) {
    die('Error connect to DataBase');
}
    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `password`) VALUES (NULL, '$full_name', '$login', '$password')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>