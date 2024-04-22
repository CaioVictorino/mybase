<?php

require "../autoload.php";
require "../config.php";


use Routes\Router;
use Database\DatabaseConnection;


$db = new DatabaseConnection;
$db = $db->connect();

$uri = $_SERVER['REQUEST_URI'];
$router = new Router;
$requester = $router->requester($uri);
$data = $requester;


$class = $data['class'];
$method = $data['method'];
$title = $data['title'];
$loader = new $class($method, $title);

return;