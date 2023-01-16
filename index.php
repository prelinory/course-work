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

<form action="index.php" method="post">
    <p>
        <a href="/getline.php">Взять номер</a>
    </p>
    <p>
        <a href="/queue.php">Показать очередь</a>
    </p>
    <p>
        <a href="log.php">Авторизация</a>
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