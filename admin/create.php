<?php
include ("../user.php");

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Очередь на промежуточную аттестацию</title>
</head>
<body>

<div class="container">
    <div class="row">
        <?php include ("adsidebar.php"); ?>
        <div class="posts col-9">
            <div class="row title">
                <h2>Создание пользователя</h2>
            </div>
            <div class="row add-post">
                <form action="creat.php" method="post">
                    <div class="col">
                        <label>Введите логин</label>
                        <input type="text" name="login" value="<?= $login; ?>" class="form-control" id="formGroupExampleInput" placeholder="Введите логин">
                    </div>
                    <div class="col">
                        <label>Введите пароль</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
                    </div>
                    <div class="col">
                        <label>Повторите пароль</label>
                        <input type="password" name="repass" class="form-control" id="exampleInputPassword2" placeholder="Повторите пароль">
                    </div>
                    <div class="form-check">
                        <input name="admin" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Сделать администратором
                        </label>
                    </div>
                    <div class="col">
                        <button name="cruser" class="btn btn-primary" type="submit">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>