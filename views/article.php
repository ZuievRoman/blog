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
            <div class="article">
                <h3>
                        <?=$article['title']?>
                </h3>
                <em>Опубликовано: <?$article['date']?></em>
                <p><?=$article['content']?></p>
            </div>
        <footer>
            <p>Мой первый Блог <br> Copyright &copy; 2017</p>
        </footer>
    </div>
</div>
</body>
</html>