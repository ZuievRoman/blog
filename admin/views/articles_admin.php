<?php require_once ("header.php"); ?>
<div class="container">
    <div class="row">
        <h1>Панель администратора</h1>
        <div>
            <a href="index.php?action=add">Добавить статью</a>
            <?if(count($articles) > 0):?>

                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                    <thead>
                    <tr>
                        <th>Заголовок</th>
                        <th>Добавлено</th>
                        <th>Обновлено</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($articles as $a): ?>
                        <tr class="article">
                            <td><?=$a['title']?></td>
                            <td><?=$a['created_at']?></td>
                            <td><?=$a['updated_at']?></td>
                            <td><a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
                            <td><a class="delete-article" href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
                        </tr>
                    <? endforeach;?>
                    </tbody>
                </table>
            <?else:?>
                <p>Ни одной статьи не найдено</p>
            <?endif;?>
        </div>
    </div>

</div>
<?php require_once ("footer.php"); ?>
</body>
</html>
