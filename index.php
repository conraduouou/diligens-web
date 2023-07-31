<?php
require __DIR__ . "/inc/config.php";

$uri = $_SERVER['REQUEST_URI'];

$requestPath = strtok($uri, '?');

$routes = [
    BASE_URL_PATH => VIEWS_PATH . '/home/home.php',
    BASE_URL_PATH . '/about-us' => VIEWS_PATH . '/about_us/about_us.php',
    BASE_URL_PATH . '/contact-us' => VIEWS_PATH . '/contact_us/contact_us.php',
];

if (array_key_exists($requestPath, $routes)) {
    include $routes[$requestPath];
} else {
    echo 404;
}