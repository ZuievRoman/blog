<?php
    require_once ("database.php");
    require_once ("models/articles.php");
    include('count.php');

    $rootPath = dirname(__FILE__);
    $link = db_connect();
    $articles = articles_all($link);

    include ("views/articles.php");

