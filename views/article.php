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
            <div>
                <div class="article">
                    <h3><?=$article['title']?></h3>
                    <em>Опубликовано: <?=$article['date']?></em>
                    <p><?=$article['content']?></p>    
                </div>
                </div>
            </div>
                <footer>
            <p>Блог для задания<br>Copyright&copy;2017</p></footer>
            </body>
</html>