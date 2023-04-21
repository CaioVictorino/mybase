<?php

require_once "../autoload.php";

use Routes\Router;

$uri = $_SERVER['REQUEST_URI'];
$request = new Router();
$pageData = $request->requester($uri);
$pageClass = $pageData['class'];
$pageMethod = $pageData['method'];
$getPage = new $pageClass($pageMethod);