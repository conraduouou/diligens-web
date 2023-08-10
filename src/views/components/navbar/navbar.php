<!DOCTYPE html>
<html lang="en-US">

<head>
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . COMPONENTS_PATH . '/navbar/navbar.css' ?>">
</head>

<body>
    <header class="navbar">
        <div>
            <a class="diligens" href="/diligens_web/index.php">
                <img class="diligens-logo" src="<?php echo PROJECT_ROOT_PATH . '/assets/logo.svg' ?>" alt="Logo" style="height: 80px;">
                <h2>Diligens</h2>
            </a>
            <button class="right-section-button">
                <img src="<?= PROJECT_ROOT_PATH . '/assets/ic-burger.svg' ?>" alt="expand links icon">
            </button>
        </div>
        <div class="right-section-links">
            <a class="link" href="/diligens_web/index.php/stories">Stories</a>
            <a class="link" href="/diligens_web/index.php/about-us">About Us</a>
            <a class="link" href="/diligens_web/index.php/contact-us">Contact Us</a>
            <a class="link" href="/diligens_web/index.php/services">Services</a>
            <a class="link" href="/diligens_web/index.php/rooms">Rooms</a>
            <a class="link" href="/diligens_web/index.php#appointment">Appointment</a>
        </div>
    </header>
</body>

</html>