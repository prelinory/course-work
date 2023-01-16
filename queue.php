<?php
session_start();
error_reporting(0);
include 'vendor/connect.php';
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
                    Электронная очередь
                </td>
            </tr>
            <tr>
                <td class="blockN">
                    Кабинет
                </td>
                <td class="blockN">
                    Номер
                </td>
            </tr>
            <tr>
                <td class="block">
                    423
                </td>
                <td class="block">
                    <?php
                    $result = $connect -> query("select stcomplete from users where subject = 'A'");
                    $row = $result->fetch_assoc();
                    $stcomplete = $row["stcomplete"];
                    $stc = str_pad($stcomplete, 3, '0', STR_PAD_LEFT);
                    echo $number = 'A' . $stc;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="block">
                    421
                </td>
                <td class="block">
                    <?php
                    $result = $connect -> query("select stcomplete from users where subject = 'B'");
                    $row = $result->fetch_assoc();
                    $stcomplete = $row["stcomplete"];
                    $stc = str_pad($stcomplete, 3, '0', STR_PAD_LEFT);
                    echo $number = 'B' . $stc;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="block">
                    424
                </td>
                <td class="block">
                    <?php
                    $result = $connect -> query("select stcomplete from users where subject = 'C'");
                    $row = $result->fetch_assoc();
                    $stcomplete = $row["stcomplete"];
                    $stc = str_pad($stcomplete, 3, '0', STR_PAD_LEFT);
                    echo $number = 'C' . $stc;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="block">
                    422
                </td>
                <td class="block">
                    <?php
                    $result = $connect -> query("select stcomplete from users where subject = 'D'");
                    $row = $result->fetch_assoc();
                    $stcomplete = $row["stcomplete"];
                    $stc = str_pad($stcomplete, 3, '0', STR_PAD_LEFT);
                    echo $number = 'D' . $stc;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="block">
                    427
                </td>
                <td class="block">
                    <?php
                    $result = $connect -> query("select stcomplete from users where subject = 'E'");
                    $row = $result->fetch_assoc();
                    $stcomplete = $row["stcomplete"];
                    $stc = str_pad($stcomplete, 3, '0', STR_PAD_LEFT);
                    echo $number = 'E' . $stc;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="block" colspan="2">
                    <a href="/getline.php">
                        Выбрать предмет
                    </a>
                </td>
            </tr>
        </table>
    </div>
    <div class="rpadding"></div>
</div>
</body>
</html>