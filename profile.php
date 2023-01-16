<?php
session_start();
include 'vendor/connect.php';

$id = $_SESSION['id'];
$err = [];

$stc = $connect->query("select stcomplete from users where id = '$id'");
$row = $stc->fetch_assoc();
$stcomplete = $row["stcomplete"];

$stq = $connect->query("select stqueue from users where id = '$id'");
$row = $stq->fetch_assoc();
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
                    <?php if ($stqueue > $stcomplete ){
                    $connect->query("update users set stcomplete = stcomplete + 1 where id = '$id'");
                    } else {
                        array_push($err,"Все студеньы приняты!");
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="th">
                    Выберите действие:
                </td>
            </tr>
            <tr>
                <td colspan="2" class="th">
                    Осталось студентов:
                    <?php  echo  $dif = $stqueue - $stcomplete; ?>
                </td>
            </tr>
            <tr>
                <td class="block">
                    <a href="/profile.php">
                        Вызов следующего студента
                    </a>
                </td>
            </tr>
            <tr>
                <td class="block" colspan="2">
                    <a href="vendor/logout.php" class="logout">Конец приёма и выход
                    </a>
                </td>
            </tr>
        </table>
    </div>
    <div class="rpadding"></div>
</div>

</body>
</html>