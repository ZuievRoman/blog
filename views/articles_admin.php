<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Блог для задания</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.min.js"></script>
</head>
<body>
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
<footer>
    <p>Блог для задания<br>Copyright&copy;2017</p></footer>
<script type="text/javascript">
    $('.delete-article').click(function (e) {
        e.preventDefault();
        if (confirm('Are you sure you want to delete article from database?')) {
            window.location.href = $(this).attr('href');
        }
    });
</script>
</body>
</html>