<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test Soft-Group</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Мой Первый Блог</h1>
    <div>
        <?php foreach ($articles as $a): ?>
        <div class="article">
            <h3>
                <a href="article.php?id=<?=$a['id']?>">
                    <?=$a['title']?>
                </a>
            </h3>
            <em>Опубликовано: <?$a['date']?></em>
            <p><?=$a['content']?></p>
        </div>
        <?php endforeach;?>
        <footer>
            <p>Мой первый Блог <br> Copyright &copy; 2017</p>
        </footer>
    </div>
</div>
</body>
</html>