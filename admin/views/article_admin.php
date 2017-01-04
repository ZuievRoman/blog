<?php require_once ("header.php"); ?>
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
<?php require_once ("footer.php"); ?>

</body>
</html>
