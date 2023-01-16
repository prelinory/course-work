<?php
require_once 'db.php';
session_start();
function auth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['user'] = $user['login'];
    $_SESSION['admin'] = $user['admin'];
    // Права доступа админа
    if($_SESSION['admin']){
        header('Location: /admin/userindex.php');
    }else{
        header('Location: /profile.php');
    }
}

$users = selectAll('users');
$check = false; // статус отправлено / не отправлено
$err = [];

// используется глоб массив _SERVER ['REQUEST_WETHOD'], для определения метода, используемый для запроса страницы, запрос на регистрацию
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-reg'])){
    $admin = 0;
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $repassword = trim($_POST['repassword']);

    if($login === '' || $password === '' || $repassword === ''){
        $err = "Не все поля заполнены!";
        // Получение длины строки в кодировке UTF8
    }elseif (mb_strlen($login, 'UTF8') < 3){
        array_push($err, "Логин должен быть более 2-х символов!");
    }elseif ($password !== $repassword) {
        array_push($err, "Пароли не совпадают!");
    }elseif (!preg_match("#[0-9]+#", $password) || !preg_match("#[a-zA-Z]+#", $password)) {
        array_push($err, "Пароль должен состоять из 0-9, букв A-Z и a-z!");
    }else{
        $password = password_hash($password, PASSWORD_BCRYPT);
        $post = [
                'admin' => $admin,
                'username' => $login,
                'password' => $password
            ];
        $id = insert('users', $post);

        $user = selectOne('users', ['id' => $id]);
        auth($user);

    }
// методом GET - пустые поля
}else{
    $login = '';
}

// авторизация
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-log'])){
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if ($login === '' || $password === ''){
        array_push($err, "Не все поля заполнены!");
    } else {
        $user = selectOne('users', ['login' => $login]);
        // проверка наличия пользователя и корректного пароля (сравнение с хэш из бд)
        if($user && password_verify($password, $user['password'])){
            auth($user);
        } else {
            array_push($err, "Некорректные данные!");
        }
    }
}

// создание пользователя через админку
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cruser'])){
    $admin = 0;
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $repassword = trim($_POST['repassword']);

    if($login === '' || $password === '' || $repassword === ''){
        array_push($err, "Не все поля заполнены!");
    }elseif (mb_strlen($login, 'UTF8') < 3){
        array_push($err, "Логин должен быть более 2-х символов!");
    }elseif ($password !== $repassword) {
        array_push($err, "Пароли не совпадают!");
    }elseif (!preg_match("#[0-9]+#", $password) || !preg_match("#[a-zA-Z]+#", $password)) {
        array_push($err, "Пароль должен состоять из 0-9, букв A-Z и a-z!");
    }else{
            $password = password_hash($password, PASSWORD_BCRYPT);
            if (isset($_POST['admin'])){
                $admin = 1;
            }
            $user = [
                'admin' => $admin,
                'username' => $login,
                'password' => $password
            ];
            $id = insert('users', $user);

            $user = selectOne('users', ['id' => $id]);
            auth($user);
    }
}else{
    $login = '';
}

// удаление пользователя
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delid'])){
    $id = $_GET['delid'];
    delete('users', $id);
    header('location: ', 'admin/userindex.php');
}

// получение данных пользователя через админку
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edid'])){
    $id = $_GET['edid'];
    $user = selectOne('users', ['id' => $id]);
    $id = $user['id'];
    $admin = $user['admin'];
    $username = $user['login'];
}

// изменение данных пользователя
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upduser'])){
    $id = $_POST['id'];
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $repassword = trim($_POST['repassword']);
    $admin = isset($_POST['admin']) ? 1 : 0;

    if($login === ''){
        array_push($err, "Не все поля заполнены!");
    }elseif (mb_strlen($login, 'UTF8') < 2){
        array_push($err, "Логин должен быть более 2-х символов");
    }elseif ($password !== $repassword) {
        array_push($err, "Пароли в обеих полях должны соответствовать!");
    }else{
        $password = password_hash($password, password_DEFAULT);
        if (isset($_POST['admin'])) $admin = 1;
        $user = [
            'admin' => $admin,
            'username' => $login,
            'password' => $password
        ];
        $user = update('users', $id, $user);
        header('location: ', 'admin/userindex.php');
    }
} else {
    $login = '';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="header">
</div>
</body>
</html>