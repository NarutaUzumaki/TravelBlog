<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create article</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .textInput{
            padding-top: 2%
        }
        .articleArea{
            height: 200px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/article">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/create">Create article</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="/signOut">
            <a class="nav-link disabled" href="#"><?php echo ($_SESSION['user'][0]['name']); ?></a>
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Sign out</button>
        </form>
    </div>
</nav>
<div class="container w-50">
    <form method="post" action="/newArticle">
        <div class="textInput">
            <input class="form-control" type="text" name="title" placeholder="Название статьи" required>
        </div>
        <div class="textInput">
            <textarea class="form-control" type="text" name="article" placeholder="Текст статьи" required rows="10"></textarea>
        </div>
        <div class="textInput">
            <input class="form-control" type="text" name="author" placeholder="Автор" value="<?php echo $_SESSION['user'][0]['name'] ?>" readonly>
        </div>
        <div class="textInput">
            <button class="btn btn-success" type="submit">Добавить статью</button>
            <a class="btn btn-danger" href="/article">Отменить</a>
        </div>
    </form>
</div>
</body>
</html>
