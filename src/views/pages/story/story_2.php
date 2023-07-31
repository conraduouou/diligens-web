<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/story/story.css' ?>">
    <link rel="stylesheet"
        href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/story/story_' . $storyId . '.css' ?>">
    <title>Endurah | Diligens</title>
</head>

<body>
    <?php
    include COMPONENTS_PATH . '/navbar/navbar.php';
    ?>
    <div class="story-section flex-container-row">
        <div class="story-section-left flex-container-col">
            <div class="story-section-image-block">
                <p
                    class="story-section-image-text text-style-label text-style-weight-semibold text-style-size-20 color-white">
                    Diligens impressed us with their deep expertise and genuine commitment to understanding our unique
                    challenges and goals. Their team of consultants immersed themselves in our company culture, becoming
                    an integral part of our journey.
                </p>
                <div class="story-section-image-company bg-color-green-700">
                    <span
                        class="story-section-image-company-text text-style-display text-style-weight-bold color-white">
                        Endurah
                    </span>
                </div>
            </div>
            <p
                class="story-section-caption text-style-label text-style-weight-semibold text-style-size-24 color-green-800 margin-none">
                With Diligens' strategic guidance, we optimized our processes, identifying areas for improvement and
                implementing innovative solutions.
                Their data-driven approach helped us increase efficiency, reduce costs, and provide an enhanced
                experience to our valued customers.
                Beyond operational improvements. <br><br>

                Diligens played a key role in empowering our team through targeted training and skill development
                programs. Their dedication to our growth was evident at every step, and they supported us in fostering a
                culture of innovation and continuous improvement.
            </p>
        </div>
        <div class="story-section-right">
            <img src="<?php echo PROJECT_ROOT_PATH . '/assets/ic-quote.svg' ?>" alt="">
            <p class="story-section-quote text-style-headline text-style-medium text-style-size-28 color-green-700">
                When we realized the need to transform our business operations and elevate our performance, we knew we
                needed a partner who shared our vision and could guide us towards success. That's when we found Diligens
                Consultants, Inc. ”
            </p>
            <div class="story-section-person flex-container-row">
                <img src="<?php echo PROJECT_ROOT_PATH . '/assets/story-person' . $storyId . '.png' ?>"
                    class="story-section-person-image" alt="person">
                <div class="flex-container-col">
                    <span
                        class="story-section-person-name text-style-label text-style-weight-bold text-style-size-22 color-green-700">
                        Deborah Reyes
                    </span>
                    <span class="story-section-person-role text-style-label text-style-size-14 color-green-700">
                        CEO
                    </span>
                </div>
            </div>
            <span
                class="story-section-service-provided text-style-label text-style-weight-bold text-style-size-36 color-green-900">
                Service Provided
            </span>
            <div
                class="story-section-services flex-container-col text-style-weight-semibold text-style-size-24 color-green-800">
                <span>CONSULTING</span>
                <span>TAX ADVISORY</span>
            </div>
        </div>
    </div>
    <?php
    include COMPONENTS_PATH . '/footer/footer.php';
    ?>
</body>

</html>