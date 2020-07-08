<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="text-center container w-25">
    <form method="post" action="">
        <div style="padding-top: 2%">
            <input class="form-control" type="text" name="login" placeholder="Введиет Ваш ник или почту" required>
        </div>
        <div style="padding-top: 2%">
            <input class="form-control" type="password" name="passwd" placeholder="Введите свой пароль" required>
        </div>
        <div style="padding-top: 2%">
            <button class="btn btn-success" type="submit">Войти</button>
            <a class="btn btn-warning" href="/user/register">Регистрация</a>
        </div>
    </form>
</div>
</body>
</html>
