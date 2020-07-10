<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New user</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .textInput{
            padding-top: 2%
        }
    </style>
</head>
<body>
<div class="text-center container w-25">
    <form method="post" action="/signup">
        <div class="textInput">
            <input class="form-control" type="text" name="register" placeholder="Введите Ваш ник" required>
        </div>
        <div class="textInput">
            <input class="form-control" type="text" name="email" placeholder="Введите Вашу почту" required>
        </div>
        <div class="textInput">
            <input class="form-control" type="password" name="passwd" placeholder="Введите свой пароль" required>
        </div>
        <div class="textInput">
            <input class="form-control" type="password" name="passwd_repeat" placeholder="Подтвердите пароль" required>
        </div>
        <div class="textInput">
            <button class="btn btn-success" type="submit">Зарегестрироваться</button>
            <a class="btn btn-info" href="/login">Авторизация</a>
        </div>
    </form>
</div>
</body>
</html>
