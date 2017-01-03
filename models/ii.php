<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Блог для задания</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Блог для задания</h1>
    <div>
        <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <label>
                Название
                <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
            </label>
            <label>
                Дата
                <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
            </label>
            <label>
                Содержимое
                <textarea name="content" class="form-item" required><?=$article['content']?></textarea>
            </label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
    </div>
    <footer>
        <p>Блог для задания<br>Copyright&copy;2017</p></footer>
</div>
</body>
</html>