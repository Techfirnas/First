<?php
require_once "../vendor/autoload.php";




USE App\Router\Router;





$router = new Router;

$router->get("/", "homecontroller@home");

