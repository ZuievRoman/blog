<?php require_once ("header_admin.php"); ?>
<div class="container">
    <h1>Блог для задания</h1>
    <div>
        <a href="index.php?action=add">Добавить статью</a>
        <?if(count($articles) > 0):?>
        <table class="admin-table articles-table">
            <tr>
                <th>Заголовок</th>
                <th>Добавлено</th>
                <th>Обновлено</th>
                <th></th>
                <th></th>
            </tr>
            <? foreach ($articles as $a): ?>
            <tr class="article">
                <td><?=$a['title']?></td>
                <td><?=$a['created_at']?></td>
                <td><?=$a['updated_at']?></td>
                <td><a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
                <td><a class="delete-article" href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
            </tr>
            <? endforeach;?>
        </table>
        <?else:?>
            <p>Ни одной статьи не найдено</p>
        <?endif;?>
    </div>
</div>
<?php require_once ("footer_admin.php"); ?>