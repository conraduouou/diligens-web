<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="src/views/components/primary_button/primary_button.css">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/home/home.css' ?>">
    <title>Diligens | Home</title>
</head>

<body>
    <?php include COMPONENTS_PATH . '/navbar/navbar.php' ?>
    <div class="first-section flex-container-row">
        <img src="assets/illustration1.svg" alt="illustration 1" class="illustration">
        <div class="flex-expand"></div>
        <div class="color-green-700 margin-auto text-style-align-center">
            <h2 class="first-section-header text-style-display text-style-size-60 text-style-weight-bold">
                We are
                <span class="text-style-italic">HERE</span>
                to help!
            </h2>
            <p class="text-style-display text-style-size-28 text-style-weight-medium margin-none">
                Empowering your success with expert guidance—<br>
                we got you!
            </p>
        </div>
    </div>
    <div class="services-section flex-container-row">
        <div class="services-section-first color-green-700">
            <div class="services-section-header-div flex-container-row">
                <img src="assets/logo.svg" class="logo" alt="Diligens Logo" height=105px>
                <h2
                    class="services-section-header text-style-display text-style-size-60 text-style-weight-bold margin-vertical-auto">
                    Our Services</h2>
            </div>
            <p
                class="services-section-caption text-style-label text-style-weight-medium text-style-size-28 text-style-align-justify">
                We offer valuable insights to assist you in making well-informed business decisions. <br><br>
                We don't consist of experts for nothing. Try contacting us now!
            </p>

            <?php
            $buttonLink = BASE_URL_PATH . '/services';
            $padding = 40;
            $buttonText = 'Check out our Services';
            include COMPONENTS_PATH . '/primary_button/primary_button.php';
            ?>
        </div>
        <div class="flex-expand"></div>
        <div>
            <img src="assets/illustration2.svg" alt="Illustration 2">
        </div>
    </div>
    <div class="stories-section flex-container-col color-green-700">
        <img src="assets/divider.svg" alt="divider" class="divider">
        <h2
            class="stories-section-header text-style-display text-style-weight-bold text-style-size-60 text-style-align-center">
            Hear out our Stories
        </h2>
        <p
            class="stories-section-caption text-style-display text-style-weight-medium text-style-size-28 text-style-align-center">
            We like stories with good endings. We'll help you get yours, too.
        </p>
        <div class="stories-section-stories flex-container-row">
            <?php
            $text = array(
                '“Their approach was refreshingly collaborative, taking the time to understand our unique challenges and opportunities.”',
                '“When we realized the need to transform our business operations and elevate our performance”',
                '“Their keen analytical skills and industry expertise revealed invaluable opportunities for improvement and growth.”'
            );

            for ($x = 1; $x <= 3; $x++) {
                $storyText = $text[$x - 1];
                $storyId = $x;
                include COMPONENTS_PATH . '/story_in_home/story_in_home.php';
            }
            ?>
        </div>
        <?php
        $buttonLink = BASE_URL_PATH . '/stories';
        $buttonText = 'Look at more Stories';
        $center = true;
        $padding = 132;
        include COMPONENTS_PATH . '/primary_button/primary_button.php';
        ?>
    </div>
    <div class="news-section flex-container-col">
        <h2
            class="news-section-header color-green-700 text-style-display text-style-weight-semibold text-style-size-48">
            Stay informed!<br>
            Explore our latest articles.
        </h2>
        <div class="news-section-article-container flex-container-row">
            <?php
            $newsHeadlineArray = array(
                'Diligens Consultants, Inc. Recognized as a Leading Business Consulting Firm',
                'Diligens Celebrates Milestones Under the Leadership of CEO April',
                'Diligens Launches Groundbreaking Digital Transformation Services',
            );

            $newsPreviewArray = array(
                'Recently, the firm was recognized by Industry Award Organization as the "Best Business Consulting Firm of the Year."',
                'April\'s strategic vision and commitment to excellence have propelled Diligens to new heights in the dynamic world of business consulting.',
                'This innovative suite of services is designed to help businesses embrace digital technologies and stay ahead in the rapidly evolving market landscape.',
            );
            for ($newsId = 1; $newsId <= 3; $newsId++) {

                $newsHeadline = $newsHeadlineArray[$newsId - 1];
                $newsPreview = $newsPreviewArray[$newsId - 1];

                include COMPONENTS_PATH . '/news_in_home/news_in_home.php';
            }
            ?>
        </div>
    </div>
    <div class="room-section flex-container-col">
        <h2
            class="room-section-header text-style-display text-style-align-center text-style-weight-bold text-style-size-48 color-white">
            Looking for a meeting room?
        </h2>
        <p
            class="room-section-caption text-style-title text-style-align-center text-style-weight-medium text-style-size-28 color-white">
            We got rooms available for your purposes. Tell us what you need!
        </p>
        <button type="button"
            class="secondary-button margin-auto text-style-label text-style-weight-bold text-style-size-28 color-green-700">
            Go to Rooms
        </button>
    </div>
    <div class="contact-section-home">
        <?php
        include COMPONENTS_PATH . '/contact_section/contact_section.php';
        ?>
    </div>
    <?php
    include COMPONENTS_PATH . '/footer/footer.php';
    ?>
</body>

</html>