<?php
session_start();
error_reporting(0);

include 'vendor/connect.php';

$letter = $_GET['src'];
$connect -> query("update users set stqueue = stqueue + 1 where subject = '$letter'");
$result = $connect -> query("select stqueue from users where subject = '$letter'");
$row = $result->fetch_assoc();
$stqueue = $row["stqueue"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Очередь на промежуточную аттестацию</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
<div class="header">
</div>
<div class="padded">
    <div class="lpadding"></div>
    <div class="undertable">
        <div class="caption">
            Промежуточная аттестация
        </div>
        <table class="buttons">
            <tr>
                <td colspan="2" class="th">
                    Ваш номер:
                </td>
            </tr>
            <tr>
                <td class="block">
                    <a>
                        <?php
                        $stq = str_pad($stqueue, 3,'0', STR_PAD_LEFT);
                        echo $number =$letter.$stq;
                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td class="block">
                    <a href="/getline.php">
                        Выбрать предмет
                    </a>
                </td>
            </tr>
            <tr>
                <td class="block" colspan="2">
                    <a href="/queue.php">
                        Показать очередь
                    </a>
                </td>
            </tr>
            <tr>
                <td class="block" colspan="2">
                    <a href="/index.php">
                        На главную
                    </a>
                </td>
            </tr>
        </table>
    </div>
    <div class="rpadding"></div>
</div>
</body>
</html>