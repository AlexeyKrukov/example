<?php
    require_once("../database.php");
    require_once("../models/articles.php");

    $link = db_connect();
    if(isset($_GET['action']))
        $action = $_GET['action'];
    else $action = "";
    if($action == "add") {
        //echo "yes";
        //echo $_POST['title'];
        if (!empty($_POST)) {
            //echo $_POST[title];
            //echo "yes";
            articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
            header("Location:index.php");
        }
        include("../views/article_admin.php");
    }
    elseif($action == "edit"){
        $id = (int)$_GET['id'];
        if(!empty($_POST)) {
            articles_edit($link,$_GET['id'], $_POST['title'], $_POST['date'], $_POST['content']);
            header("Location:index.php");
        }
        $article = articles_get($link, $id);
        //echo $article;
        include("../views/article_admin.php");
    }
    elseif($action == "delete"){
        $id = (int)$_GET['id'];
        $article = articles_delete($link, $id);
        header("Location:index.php");
    }
    else {
        $articles = articles_all($link);

        include("../views/articles_admin.php");
    }