<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Блог для задания</title>
        <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <div class="container">
            <h1>Блог для задания</h1>
            <a href="admin">Панель Администратора</a>
            <div>
                <?php foreach($articles as $a): ?>
                <div class="article">
                    <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                    <em>Опубликовано <?=$a['date']?></em>
                    <p><?=articles_intro($a['content'])?></p>
                </div>
                <?php endforeach ?>                
                </div>
            </div>
            <footer>
            <p>Блог для задания<br>Copyright&copy;2017</p></footer>
        </body>
</html>