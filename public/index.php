<?php
    require_once "../vendor/autoload.php";
    
    $route = new App\Route;
    echo '<pre>';
    print_r($route->getURL());
    echo '</pre>';
?>