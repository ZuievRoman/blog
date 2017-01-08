<?php require_once("header.php"); ?>
    <main class="container">
    <div class="row">
        <h1>Блог для задания</h1>
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
            <i class="material-icons">add</i>
        </button>
        <a href="admin">Панель Администратора</a>
        <div>
            <?php foreach ($articles as $article): ?>
                <div class="article">
                    <h3><a href="article.php?id=<?= $article['id'] ?>"><?= $article['title'] ?></a></h3>
                    <? if (isset($article['photo'])): ?>
                        <p><img src="<?= $article['photo'] ?>" alt="<?= $article['title'] ?>"/></p>
                    <? endif; ?>
                    <em>Создано: <?= $article['created_at'] ?></em>
                    <em>Обновлено: <?= $article['updated_at'] ?></em>
                    <p><?= articles_intro($article['content']) ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    </main>
<?php require_once("footer.php"); ?>