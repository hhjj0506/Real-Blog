<?php
    //Makes you get informations from database
    require_once(__DIR__ . "/database.php");
    session_start();
    session_regenerate_id(true);

    $path = "/kimd-blog/";
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db";
    
    if(!isset($_SESSION["connection"])) {
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }