<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/contact_us/contact_us.css' ?>">
    <title>Diligens | Contact us</title>
</head>

<body>
    <?php
    include COMPONENTS_PATH . '/navbar/navbar.php';
    ?>
    <?php
    $title = 'Contact us';
    include COMPONENTS_PATH . '/title_section/title_section.php';
    ?>
    <div class="reach-section">
        <h2 class="reach-section-header text-style-headline text-style-weight-bold text-style-size-28 color-green-700">
            You can reach us via email or our social media accounts:
        </h2>
        <div class="reach-section-account flex-container-row">
            <img src="<?php echo PROJECT_ROOT_PATH . '/assets/ic-mail.svg' ?>" alt="">
            <span class="text-style-label text-style-weight-semibold text-style-size-22 color-green-700">
                diligens.example@sample.com
            </span>
        </div>
        <div class="reach-section-account flex-container-row">
            <img id="facebook-icon" src="<?php echo PROJECT_ROOT_PATH . '/assets/ic-facebook.svg' ?>" alt="">
            <span class="text-style-label text-style-weight-semibold text-style-size-22 color-green-700">
                diligens.example@sample.com
            </span>
        </div>
        <h2 class="reach-section-header text-style-headline text-style-weight-bold text-style-size-28 color-green-700">
            We can also entertain walk-in guests at:
        </h2>
        <div class="reach-section-account flex-container-row">
            <img id="location-icon" src="<?php echo PROJECT_ROOT_PATH . '/assets/ic-location.svg' ?>" alt="">
            <span class="text-style-label text-style-weight-semibold text-style-size-22 color-green-700">
                001 Sample St. Sample Brgy, Sample City
            </span>
        </div>
    </div>
    <div class="reach-section-contact">
        <?php
        include COMPONENTS_PATH . '/contact_section/contact_section.php';
        ?>
    </div>
    <?php
    include COMPONENTS_PATH . '/footer/footer.php';
    ?>
</body>

</html>l