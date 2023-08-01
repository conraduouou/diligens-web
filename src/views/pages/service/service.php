<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/service/service.css' ?>">
    <title>Professional Advice</title>
</head>

<body>
    <?php
    include COMPONENTS_PATH . '/navbar/navbar.php';
    ?>

    <div class="service-title flex-container-row bg-color-green-800">
        <img src="<?php echo PROJECT_ROOT_PATH . '/assets/service-bg.png' ?>" alt="">
        <div class="service-title-text-container">
            <h1 id="service" class="service-title-text text-style-display text-style-size-60 color-white margin-none"></h1>
            <div class="service-title-line bg-color-white"></div>
        </div>
        <p id="service-description" class="service-title-description text-style-label text-style-size-24 color-white"></p>
    </div>

    <div class="service-content flex-container-row">
        <div class="service-content-left flex-container-col">
            <img alt="Illustration" src="
            <?php 

            switch ($serviceId) {
                case 3:
                    $new = 2;
                    break;
                case 2:
                    $new = 3;
                    break;
                case 1:
                    $new = 1;
                    break;
            }

            echo PROJECT_ROOT_PATH . '/assets/story-illustration' . $new . '.svg' 
            ?>
            " 
            <?php 
            if ($new == 2) {
                echo 'style= "transform: rotate(36deg)"';
            }
            ?>>
            <p id="service-caption" class="text-style-label text-style-size-24 color-green-900"></p>
            <p id="service-beneficiaries" class="text-style-label text-style-size-24 color-green-900"></p>
        </div>
        <div class="service-content-right">
            <div class="service-content-image"
                style="--url: url(<?php echo PROJECT_ROOT_PATH . '/assets/service' . $serviceId . '.jpg' ?>)"></div>
            <ul id="service-actions" class="service-content-right-text text-style-label text-style-size-28 color-green-900">
            </ul>
        </div>
    </div>

    <?php
    include COMPONENTS_PATH . '/footer/footer.php';
    ?>

    <script src="<?php echo PROJECT_ROOT_PATH . '/' . CONTROLLERS_PATH . '/pages/service/service.js' ?>"></script>
</body>

</html>