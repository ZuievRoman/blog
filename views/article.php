<?php
//setcookie("count", "$count", time() + 3600 * 24 - (3600 * getdate()['hours'] + 60 * getdate()['minutes']
//        + getdate()['seconds']));
//$count = $_COOKIE['count'];
//if (!isset($count)) {
//    $count = 0;
//}
//$count++;

require_once("header.php"); ?>
<?php update_counter($article['id'])?>
    <div class="container">
        <h1>Блог для задания</h1>
        <div>
            <div class="article">
                <h3><?= $article['title'] ?></h3>
                <? if (isset($article['photo'])): ?>
                    <p><img src="<?= $article['photo'] ?>" alt="<?= $article['title'] ?>"/></p>
                <? endif; ?>
                <em>Создано: <?= $article['created_at'] ?></em>
                <em>Обновлено: <?= $article['updated_at'] ?></em>
                <p><?= $article['content'] ?></p>
                <p>Количество просмотров <?= get_counter($article['id']); ?></p>
            </div>
        </div>
    </div>
<?php require_once("footer.php"); ?>