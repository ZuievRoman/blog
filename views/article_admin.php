<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Блог для задания</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <h1>Блог для задания</h1>
    <div>
        <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>" enctype="multipart/form-data">
            <label>
                Название
                <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
            </label>
            <br>
            <label>
                Изображение
                <? if(isset($article['photo'])): ?>
                    <p><img src="/blog/<?=$article['photo']?>" alt="<?=$article['title']?>"/></p>
                <? endif; ?>
                <input type="file" name="file" value="<?=$article['photo']?>" class="form-item">
            </label>
            <br>
            <label>
                Содержимое
                <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
            </label>
            <br>
            <input type="submit" value="Сохранить" class="btn">
        </form>
    </div>
</div>
<footer>
    <p>Блог для задания<br>Copyright&copy;2017</p></footer>
</body>
</html>