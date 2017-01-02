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

    for ($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;
}


function articles_get($id){
    return ["id"=>1, "title"=>"Это простой заголовок", "date"=>"2017-02-01", "content"=>"Здесь будет статья"];
    
}
function articles_new($title, $date, $content){
    
}
function articles_edit($id, $title, $date, $content){
    
}
function articles_delete($id){
    
}
?>