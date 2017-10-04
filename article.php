<?php
    require_once("database.php");
    require_once("models/articles.php");

    //$article = articles_get($_GET['id']);
    $link = db_connect();
    if($_SERVER["REQUEST_URI"] == '/') {
        $articles = articles_all($link);
        include("views/articles.php");
    }
    else {
        $article = articles_get($link, $_GET['id']);
        include("views/article.php");
    }