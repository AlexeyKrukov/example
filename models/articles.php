<?php
    function articles_all($link){
        /*$art1 = array("id" => 1, "title" => "title1", "date" => "01.01.2015", "content" => "Content1");
        $art2 = array("id" => 2, "title" => "title2", "date" => "02.01.2015", "content" => "Content2");
        $arr[0] = $art1;
        $arr[1] = $art2;
        return $arr;*/
        $query =  "SELECT * FROM articles";
        //echo $query;
        $result = mysqli_query($link, $query);
        if(!$result)
            die(mysqli_error($link));
        $n = mysqli_num_rows($result);
        $arr = array();

        for($i = 0; $i < $n; $i++){
            $row = mysqli_fetch_assoc($result);
            $arr[] = $row;
        }

        return $arr;
    }
    function articles_get($link, $id){
        $query = "SELECT * FROM articles  WHERE id='{$id}'";
        //echo $query;
        $result = mysqli_query($link, $query);
        if(!$result)
            die(mysqli_error($link));
        return $row = mysqli_fetch_assoc($result);
    }
    function articles_new($link, $title, $date, $content){
        if($title == '')
            return false;
        //echo $title;
        $query = "INSERT INTO articles(title, date, content) VALUES('{$title}', '{$date}','{$content}' )";
        //echo $query;
        $result = mysqli_query($link, $query);
        //echo $result;
        return true;
    }
    function articles_edit($link, $id, $title, $date, $content){
        $query = "UPDATE articles SET title = '{$title}', date = '{$date}', content = '{$content}'";
        $result = mysqli_query($link, $query);
        return true;
    }
    function articles_delete($link, $id){
        $query = "DELETE FROM articles WHERE id={$id}";
        $result = mysqli_query($link, $query);
        return true;
    }