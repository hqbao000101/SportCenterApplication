<?php 
    session_start();
    require "config.php";
    require ABSPATH . "load.php";
    require ABSPATH . "bootstrap.php";

    $c = isset($_GET["c"]) ? $_GET["c"] : "home";//home
    $a = isset($_GET["a"]) ? $_GET["a"] : "list";//list

    $c = ucfirst($c)."Controller";//HomeController
    $controller = new $c();//new HomeController()
    $controller->$a();//$controller->list()
    
?>