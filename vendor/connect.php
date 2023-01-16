<?php
$connect = mysqli_connect('localhost', 'root', '', 'test');

if (!$connect) {
    die('Error connect to DataBase');
}
$dr = 'mysql';
$host = 'cw1';
$db_name = 'test';
$dbus = 'root';
$dbps = '';
$charset = 'utf8';
// режим сообщения об ошибках (выбрасывает ошибку)
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]; // удаление дублирования в асоцциативном массиве

try {
    // создание экземпляра класса
    $pdo = new PDO(
        "$dr:host=$host;dbname=$db_name; charset=$charset",
        $dbus, $dbps, $opt
    );

// ошибка вызванная в PDO, реакция на выброшенное исключение
} catch (PDOEception $i) {
    die("Ошибка подключения к базе данных");
}
?>