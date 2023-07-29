<?php
require __DIR__ . "/inc/config.php";

$uri = $_SERVER['REQUEST_URI'];

$requestPath = strtok($uri, '?');


$routes = [
    BASE_URL_PATH => VIEWS_PATH . '/home/home.php',
];

if (array_key_exists($requestPath, $routes)) {
    include $routes[$requestPath];
} else {
    echo 404;
}