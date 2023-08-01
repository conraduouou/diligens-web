<?php
require __DIR__ . "/inc/config.php";

$uri = $_SERVER['REQUEST_URI'];

$requestPath = strtok($uri, '?');
$tokens = explode('/', $requestPath);

$routes = [
    BASE_URL_PATH => VIEWS_PATH . '/home/home.php',
    BASE_URL_PATH . '/about-us' => VIEWS_PATH . '/about_us/about_us.php',
    BASE_URL_PATH . '/contact-us' => VIEWS_PATH . '/contact_us/contact_us.php',
    BASE_URL_PATH . '/rooms' => VIEWS_PATH . '/rooms/rooms.php',
    BASE_URL_PATH . '/stories' => VIEWS_PATH . '/stories/stories.php',
    BASE_URL_PATH . '/services' => VIEWS_PATH . '/services/services.php',
    BASE_URL_PATH . '/admin' => VIEWS_PATH . '/admin/admin.php',
];

if ($tokens[3] == 'news') {
    if (isset($tokens[4])) {
        include VIEWS_PATH . '/news/news_' . $tokens[4] . '.php';
    } else {
        echo 404;
    }
} else if ($tokens[3] == 'stories' && isset($tokens[4])) {
    $storyId = $tokens[4];
    include VIEWS_PATH . '/story/story_' . $tokens[4] . '.php';
} else if (array_key_exists($requestPath, $routes)) {
    include $routes[$requestPath];
} else {
    echo 404;
}