<?php

require "../vendor/autoload.php";
require "../config.php";

use Resources\Objects\Router\Router;

/*
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
*/

$request = $_SERVER['REQUEST_URI'];
$processUri = explode("?", $request);
$baseUri = $processUri[0];
$params = $_SERVER['QUERY_STRING'];

$route = new Router;
$result = $route->requestRoute($baseUri, $params);