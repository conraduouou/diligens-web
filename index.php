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

if ($tokens[3] == 'news' && isset($tokens[4])) {
    // in a large-scale/dynamic website, I think the id ($token[4]) should be passed to the
    // javascript controller of the specific news page, and then fetch the news data from
    // there using a dedicated php model file. This is only a routing file after all.
    include VIEWS_PATH . '/news/news_' . $tokens[4] . '.php';
} else if ($tokens[3] == 'stories' && isset($tokens[4]) && $tokens[4] && $tokens[4] <= 3) {
    $storyId = $tokens[4];
    include VIEWS_PATH . '/story/story_' . $tokens[4] . '.php';
} else if ($tokens[3] == 'services' && isset($tokens[4]) && $tokens[4] && $tokens[4] <= 3) {
    $serviceId = $tokens[4];
    setcookie("ServiceId", $serviceId);
    include VIEWS_PATH . '/service/service.php';
} else if (array_key_exists($requestPath, $routes)) {
    include $routes[$requestPath];
} else {
    echo 404;
}