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
        <a href="index.php?action=add">Добавить статью</a>
        <table class="admin-table">
            <tr>
                <th>Заголовок</th>
                <th>Добавлено</th>
                <th>Обновлено</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($articles as $a): ?>
            <tr>
                <td><?=$a['title']?></td>
                <td><?=$a['created_at']?></td>
                <td><?=$a['updated_at']?></td>
                <td><a href="index.php?action=edit&id=><?=$a['id']?>">Редактировать</a></td>
                <td><a href="index.php?action=delete&id=><?=$a['id']?>">Удалить</a></td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
<footer>
    <p>Блог для задания<br>Copyright&copy;2017</p></footer>
</body>
</html>