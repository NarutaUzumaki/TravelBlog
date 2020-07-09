<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

    <script src="https://kit.fontawesome.com/7c0f7f8a2e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            padding-top: 70px;
        }
    </style>
<!--    сделать подтверждение на удаление-->
    <script>
        function confirm() {
            var sure = confirm("Are you sure to delete this article?");
            alert(sure);
        }
    </script>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
<div class=" container w-50">
    <?php
    $dataReverse = array_reverse($data);
    foreach ($dataReverse as $article): ?>
    <div class="content-row">
        <h3><?php echo $article['title'] ?></h3>
        <div>
<!--            текст выходит за пределы блока-->
            <p style="width: 100%;"><?php echo $article['post_text']?></p>
        </div>
        <div>
            <p>Author: <?php echo $article['author']?></p>
        </div>
        <div>
            <a href="/edit?id=<?php echo $article['id'];?>"><button type="button" class="btn btn-info edit-row"><i class="fas fa-pencil-alt"></i></button></a>
            <a href="/delete?id=<?php echo $article['id'];?>" onclick="confirm()"><button type="button" class="btn btn-danger edit-row"><i class="fas fa-trash"></i></button></a>
        </div>
    </div>
    <?php endforeach;?>
</div>
