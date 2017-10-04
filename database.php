<?php
    define("MYSQL_SERVER", 'localhost');
    define("MYSQL_USER", 'root');
    define("MYSQL_PASSWORD", '');
    define("MYSQL_DB", 'contents');

    function db_connect(){
        $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or die("Connection failed");
        return $link;
    }