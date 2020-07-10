<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit article</title>

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
<?php include ("navbar.php")?>
<div class="container w-50">
    <form method="post" action="/editArticle">
        <div class="textInput">
            <input class="form-control" type="text" name="title" placeholder="Название статьи" value="<?php echo $data[0]['title']; ?>" required>
        </div>
        <div class="textInput">
            <textarea class="form-control" type="text" name="article" placeholder="Текст статьи" required rows="10"><?php echo $data[0]['post_text'] ?></textarea>
        </div>
        <div class="textInput">
            <input class="form-control" type="text" name="author" placeholder="Автор" value="<?php echo $data[0]['author'] ?>" readonly>
            <input class="form-control" type="hidden" name="id" placeholder="ID" value="<?php echo $_GET['id']; ?>" readonly>
        </div>
        <div class="textInput">
            <button class="btn btn-success" type="submit">Сохранить изменениня</button>
            <a class="btn btn-danger" href="/article">Отменить</a>
        </div>
    </form>
</div>
</body>
</html>
