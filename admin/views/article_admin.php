<?php require_once("header.php"); ?>
<div class="container">
    <div class="row">
        <h1>Панель администратора</h1>
        <div class="col-lg-12">
            <form method="post" action="index.php?action=<?= $_GET['action'] ?>&id=<?= $_GET['id'] ?>"
                  enctype="multipart/form-data">
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" name="title" type="text" value="<?= $article['title'] ?>"
                           id="sample1" autofocus required>
                    <label class="mdl-textfield__label" for="sample1">Название</label>
                </div>
                <br>
                <div class="control-group">
                    <label class="control-label">Изображение:</label>
                    <div class="controls clearfix">
                        <span class="btn btn-success btn-file" id="btn-success" style="background-color: #3f51b5; border-radius: 0; border-color: #d50000;">
                            <i class="icon-plus"></i> <span>Выберете изображение...</span>
                            <? if (isset($article['photo'])): ?>
                                <p><img src="/blog/<?= $article['photo'] ?>" alt="<?= $article['title'] ?>"/></p>
                            <? endif; ?>
                            <input type="file" name="file" value="<?= $article['photo'] ?>" class="form-item">
                        </span>


                    </div>
                </div>
                <br>
                <div class="mdl-textfield mdl-js-textfield">
                <textarea class="mdl-textfield__input" type="text" rows="3" id="sample5"
                          name="content" required><?= $article['content'] ?></textarea>
                    <label class="mdl-textfield__label" for="sample5">Текст статьи</label>
                </div>
                <br>
                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                    Сохранить
                </button>
            </form>
        </div>
    </div>
</div>
<?php require_once("footer.php"); ?>

</body>
</html>
