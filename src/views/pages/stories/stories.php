<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diligens | Stories</title>
    <link rel="icon" href="diligens-logo.svg" type="image/icon type">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/stories/stories.css' ?>">
</head>

<body>
    <?php
    include COMPONENTS_PATH . '/navbar/navbar.php';
    ?>

    <?php
    $title = 'Stories';
    include COMPONENTS_PATH . '/title_section/title_section.php';
    ?>

    <div class="container-story">
        <a href="<?php echo BASE_URL_PATH . '/stories/1' ?>" class="container-story-box flex-container-col">
            <div>
                <img src="<?php echo PROJECT_ROOT_PATH . '/assets/story-image1.jpg' ?>" alt="Image 1">
            </div>
            <div class="container-story-details flex-container-col color-white">
                <h3 class="text-style-display text-style-weight-bold text-style-size-36 color-green-100">
                    Dow Inc.
                </h3>
                <p class="text-style-label text-style-weight-medium text-style-size-20 color-white margin-none">
                    “From the outset, the Diligens team impressed us with their depth of industry knowledge and
                    their genuine passion for empowering businesses.”
                </p>
                <span class="text-style-label text-style-weight-semibold text-style-size-18 color-green-300">
                    READ MORE
                </span>
            </div>
        </a>
        <a href="<?php echo BASE_URL_PATH . '/stories/2' ?>" class="container-story-box flex-container-col">
            <div>
                <img src="<?php echo PROJECT_ROOT_PATH . '/assets/story-image2.jpg' ?>" alt="Image 1">
            </div>
            <div class="container-story-details flex-container-col color-white">
                <h3 class="text-style-display text-style-weight-bold text-style-size-36 color-green-100">
                    Endurah
                </h3>
                <p class="text-style-label text-style-weight-medium text-style-size-20 color-white margin-none">
                    “Diligens impressed us with their deep expertise and genuine commitment to understanding our unique
                    challenges and goals.”
                </p>
                <span class="text-style-label text-style-weight-semibold text-style-size-18 color-green-300">
                    READ MORE
                </span>
            </div>
        </a>
        <a href="<?php echo BASE_URL_PATH . '/stories/3' ?>" class="container-story-box flex-container-col">
            <div>
                <img src="<?php echo PROJECT_ROOT_PATH . '/assets/story-image3.jpg' ?>" alt="Image 1">
            </div>
            <div class="container-story-details flex-container-col color-white">
                <h3 class="text-style-display text-style-weight-bold text-style-size-36 color-green-100">
                    Korri Inc.
                </h3>
                <p class="text-style-label text-style-weight-medium text-style-size-20 color-white margin-none">
                    “As we aspired to grow and expand our reach, we recognized the need for expert guidance and
                    strategic insights.”
                </p>
                <span class="text-style-label text-style-weight-semibold text-style-size-18 color-green-300">
                    READ MORE
                </span>
            </div>
        </a>
    </div>

    <div class="contact-section-stories">
        <?php
        include COMPONENTS_PATH . '/contact_section/contact_section.php';
        ?>
    </div>

    <?php
    include COMPONENTS_PATH . '/footer/footer.php';
    ?>
</body>

</html>