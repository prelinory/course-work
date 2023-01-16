<?php
include ("../user.php");

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Очередь на промежуточную аттестацию</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<form action="user.php" method="post">
    <div class="container">
        <div class="row">
            <?php include ("adsidebar.php"); ?>
            <div class="posts col-9">
                <div class="row title">
                    <h2>Учёт работы</h2>
                    <div class="id col-1">ID</div>
                    <div class="title col-3">Login</div>
                    <div class="author col-2">Admin</div>
                    <div class="red col-2">Принято студентов</div>
                    <div class="del col-2">Студентов в очереди</div>
                </div>
                <?php foreach($users as $key => $user): ?>
                    <div class="row post">
                        <div class="id col-1"><?=$user['id'];?></div>
                        <div class="title col-3"><?=$user['login'];?></div>
                        <?php if ($user['admin'] == 1 ): ?>
                            <div class="author col-2">Admin</div>
                        <?php else: ?>
                            <div class="author col-2">User</div>
                        <?php endif; ?>
                        <div class="red col-2"><?=$user['stcomplete'];?></div>
                        <div class="del col-2"><?=$user['stqueue'];?></div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</form>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>