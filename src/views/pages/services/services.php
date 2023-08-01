<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="icon" href="diligens-logo.svg" type="image/icon type">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/services/services.css' ?>">
</head>

<body>
    <?php
    include COMPONENTS_PATH . '/navbar/navbar.php';
    ?>

    <?php
    $title = 'Services';
    include COMPONENTS_PATH . '/title_section/title_section.php';
    ?>

    <div class="body-container">
        <!--- Side Bar --->
        <div
            class="info-section-jump-links text-style-label text-style-weight-semibold text-style-size-22 color-green-700">
            <a href="#">Assurance</a>
            <a href="#">Tax Advisory</a>
            <a href="#">Consulting</a>
            <a href="#">Rooms</a>
        </div>

        <div class="body-container-content">
            <!--- Assurance --->
            <div class="service-container">
                <div class="left-side">
                    <div class="left-side-title">Professional Advice</div>
                    <img src="<?php echo PROJECT_ROOT_PATH . '/assets/services1.svg' ?>" alt="Image 1">
                </div>

                <div class="right-side">
                    <p class="right-side-text">
                        <strong>Empower Your Decisions with Expert Guidance</strong>
                        <br>
                        <br>
                        Your trusted source for reliable and informed counsel. Our team of seasoned experts is committed
                        to providing you with valuable insights and recommendations to tackle your business challenges
                        head-on.
                    </p>
                    <?php
                    $buttonText = 'Know more';
                    $padding = 64;
                    include COMPONENTS_PATH . '/primary_button/primary_button.php';
                    ?>
                </div>
            </div>
            <!--- Tax Advisory --->
            <div class="service-container">
                <div class="left-side">
                    <div class="left-side-title">Tax Advisory</div>
                    <div class="image-container">
                        <img src="<?php echo PROJECT_ROOT_PATH . '/assets/services2.svg' ?>" alt="Image 2">
                    </div>
                </div>

                <div class="right-side">
                    <p class="right-side-text">
                        <strong>Navigating Tax Matters Made Effortless</strong>
                        <br>
                        <br>
                        Your partner in simplifying the complexities of taxation. Our dedicated team of tax experts is
                        here to provide you with comprehensive guidance and strategic solutions to optimize your tax
                        planning and compliance.
                    </p>
                    <?php
                    $buttonText = 'Know more';
                    $padding = 64;
                    include COMPONENTS_PATH . '/primary_button/primary_button.php';
                    ?>
                </div>
            </div>

            <!--- Consulting --->
            <div class="service-container">
                <div class="left-side">
                    <div class="left-side-title">Consulting</div>
                    <div class="image-container">
                        <img src="<?php echo PROJECT_ROOT_PATH . '/assets/services3.svg' ?>" alt="Image 3">
                    </div>
                </div>

                <div class="right-side">
                    <p class="right-side-text">
                        <strong>Unlock the Potential of Your Business with Expert Consulting</strong>
                        <br>
                        <br>
                        We take pride in our dynamic team of experienced consultants who are driven to propel your
                        organization to new heights of success. Whether you're looking to streamline operations, expand
                        market reach, or foster innovation, we've got the strategic expertise to guide you every step of
                        the way.
                    </p>
                    <?php
                    $buttonText = 'Know more';
                    $padding = 64;
                    include COMPONENTS_PATH . '/primary_button/primary_button.php';
                    ?>
                </div>
            </div>
        </div>


    </div>
    <!--- Looking for meeting rooms + button --->
    <div class="meeting-room-container">
        <div class="text-style-headline text-style-weight-bold text-style-size-48 color-green-700">
            Looking for a meeting room?
        </div>
        <div class="text-style-headline text-style-weight-medium text-style-size-28 color-green-700">
            We got rooms available for your purposes. Tell us what you need!
        </div>
        <?php
        $buttonText = 'Go to Rooms';
        $padding = 132;
        include COMPONENTS_PATH . '/primary_button/primary_button.php';
        ?>
    </div>

    <?php
    include COMPONENTS_PATH . '/footer/footer.php';
    ?>
</body>

</html>