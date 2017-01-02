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
    <a href="admin">Панель Администратора</a>
    <div>
        <table border="1">
            <tr>
                <th>Дата</th>
                <th>Заголовок</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($articles as $a): ?>
            <tr>
                <td><?=$['date']?></td>
                <td><?=$['title']?></td>
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