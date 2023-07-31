<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/about_us/about_us.css' ?>">
    <title>Diligens | About us</title>
</head>

<body>
    <?php
    include COMPONENTS_PATH . '/navbar/navbar.php';
    ?>
    <div class="title-section bg-color-green-800">
        <h1
            class="title-section-header text-style-display text-style-weight-bold text-style-size-60 color-white margin-none">
            About us
        </h1>
        <div class="title-section-rectangle-container">
            <div class="title-section-rectangle bg-color-green-600"></div>
            <div class="title-section-rectangle bg-color-green-600"></div>
        </div>
    </div>
    <div class="info-section"></div>
    <?php
    include COMPONENTS_PATH . '/footer/footer.php';
    ?>
</body>

</html>