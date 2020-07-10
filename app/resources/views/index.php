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
        .contentText{
            white-space: normal;
            align-content: center;
            text-align: justify;
            overflow: hidden;
        }
        .article{
            margin-bottom: 7%;
            /*box-shadow: 10px -15px 10px 5px rgba(0, 0, 0, .2);*/
        }
    </style>
    <script>
        function confirmDelete() {
           return confirm("Are you sure to delete this article?");
        }
    </script>
</head>
<body>
<?php include ("navbar.php")?>
<div class=" container w-50">
    <?php
    $dataReverse = array_reverse($data);
    foreach ($dataReverse as $article): ?>
    <div class="content-row article">
        <h3><?php echo $article['title'] ?></h3>
        <div class="contentText">
            <p style="width: 100%;"><?php echo $article['post_text']?></p>
        </div>
        <div>
            <p>Author: <?php echo $article['author']?></p>
        </div>
        <div>
            <?php if($_SESSION['user'][0]['is_admin'] == 1): ?>
            <a href="/edit?id=<?php echo $article['id'];?>"><button type="button" class="btn btn-info edit-row"><i class="fas fa-pencil-alt"></i></button></a>
            <a href="/delete?id=<?php echo $article['id'];?>" onclick="return confirmDelete()"><button type="button" class="btn btn-danger edit-row"><i class="fas fa-trash"></i></button></a>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach;?>
</div>
