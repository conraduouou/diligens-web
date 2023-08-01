<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories</title>
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
        <div class="box">
            <img src="<?php echo PROJECT_ROOT_PATH . '/assets/story-illustration1.svg' ?>" alt="Image 1">
            <h3>Sample Company</h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s.
            </p>
        </div>
        <div class="box">
            <img src="<?php echo PROJECT_ROOT_PATH . '/assets/story-illustration2.svg' ?>" alt="Image 1">
            <h3>Sample Company</h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s.
            </p>
        </div>
        <div class="box">
            <img src="<?php echo PROJECT_ROOT_PATH . '/assets/story-illustration3.svg' ?>" alt="Image 1">
            <h3>Sample Company</h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s.
            </p>
        </div>
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