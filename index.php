<?php
$viewsPath = 'src/views/';

$uri = $_SERVER['REQUEST_URI'];

$baseUrl = '/diligens_web/index.php';
$requestPath = strtok($uri, '?');

$routes = [
    $baseUrl => $viewsPath . 'home/home.php',
];

if (array_key_exists($requestPath, $routes)) {
    include $routes[$requestPath];
} else {
    echo 404;
}