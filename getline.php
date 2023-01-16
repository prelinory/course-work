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

<div class="padded">
    <div class="lpadding">
        <div class="lpadding2"></div>
    </div>
    <div class="undertable">
        <div class="caption">
            Промежуточная аттестация
        </div>
        <table class="buttons">
            <tr>
                <td colspan="2" class="th">
                    Выберите предмет:
                </td>
            </tr>
            <tr>
                <td class="block">
                    <a href="/number.php?src=A">
                        Программирование
                    </a>
                </td>
            </tr>
            <tr>
                <td class="block">
                    <a href="/number.php?src=B">
                        Экономика
                    </a>
                </td>
            </tr>
            <tr>
                <td class="block">
                    <a href="/number.php?src=C">
                        Базы данных
                    </a>
                </td>
            </tr>
            <tr>
                <td class="block">
                    <a href="/number.php?src=D">
                        Криптография
                    </a>
                </td>
            </tr>
            <tr>
                <td class="block">
                    <a href="/number.php?src=E">
                        Ин.язык
                    </a>
                </td>
            </tr>
            <tr>
                <td class="block">
                    <a href="/number.php?src=C">
                        Архитектура ЭВМ
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
    <div class="rpadding">
        <div class="rpadding2">
            <div class="log_in">
                <a href="/index.php">
                    Авторизация для преподавателей
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>