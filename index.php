<?php
require __DIR__ . "/inc/config.php";

$uri = $_SERVER['REQUEST_URI'];

$requestPath = strtok($uri, '?');

$routes = [
    BASE_URL_PATH => 'src/views/home/home.php',
    BASE_URL_PATH . '/about-us' => 'src/views/about_us/about_us.php',
];

if (array_key_exists($requestPath, $routes)) {
    include $routes[$requestPath];
} else {
    echo 404;
}