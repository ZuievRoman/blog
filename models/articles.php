<?php

function articles_all($link)
{
    //Запрос
    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    // Извлечение из ДБ.
    $n = mysqli_num_rows($result);
    $articles = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;
}


function articles_get($link, $id_article)
{
    $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    $article = mysqli_fetch_assoc($result);

    return $article;
}

function articles_new($link, $title, $content)
{
    $date = date("Y-m-d H:i:s");
    //Подготовка
    $title = trim($title);
    $content = trim($content);

    //Проверка
    if ($title =='')
        return false;

    //Запрос
    $t = "INSERT INTO articles (title, updated_at, content) VALUES('%s', '%s', '%s')";

    $query = sprintf($t, mysqli_real_escape_string($link, $title),
        mysqli_real_escape_string($link, $date),
        mysqli_escape_string($link, $content));

//    echo $query;
    $result = mysqli_query($link, $query);

    if (!result)
        die(mysqli_error($link));

    return true;
}

function articles_edit($link, $id, $title, $content)
{
    //Подготовка
    $title = treim($title);
    $content = trim($content);
    $id = (int)$id;

    //Проверка
    if ($title == '')
        return false;

    //Запрос
    $sql = "UPDATE articles SET title='%s', content='%s' WHERE id = '%s'";

    $query = sprintf($sql,  mysqli_real_escape_string($link, $title),
                            mysqli_escape_string($link, $content),
                             $id);

    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
}

function articles_delete($id)
{

}

?>