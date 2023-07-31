<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/story/story.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/story/story_' . $storyId . '.css' ?>">
    <title>Korri Inc. | Diligens</title>
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
                    As we aspired to grow and expand our reach, we recognized the need for expert guidance and strategic
                    insights. That's when we partnered with Diligens Consultants, Inc.
                </p>
                <div class="story-section-image-company bg-color-green-700">
                    <span
                        class="story-section-image-company-text text-style-display text-style-weight-bold color-white">
                        Korri Inc.
                    </span>
                </div>
            </div>
            <p
                class="story-section-caption text-style-label text-style-weight-semibold text-style-size-24 color-green-800 margin-none">
                With Diligens' expert guidance, we streamlined their operations, optimizing supply chain efficiencies
                and enhancing overall productivity. The thoughtful analysis and innovative solutions delivered tangible
                results, reducing lead times and increasing customer satisfaction.
            </p>
        </div>
        <div class="story-section-right">
            <img src="<?php echo PROJECT_ROOT_PATH . '/assets/ic-quote.svg' ?>" alt="">
            <p class="story-section-quote text-style-headline text-style-medium text-style-size-28 color-green-700">
                With Diligens' guidance, we underwent a comprehensive assessment of our operations, processes, and
                market position. Their keen analytical skills and industry expertise revealed invaluable opportunities
                for improvement and growth. ”
            </p>
            <div class="story-section-person flex-container-row">
                <img src="<?php echo PROJECT_ROOT_PATH . '/assets/story-person' . $storyId . '.png' ?>"
                    class="story-section-person-image" alt="person">
                <div class="flex-container-col">
                    <span
                        class="story-section-person-name text-style-label text-style-weight-bold text-style-size-22 color-green-700">
                        Michael G.
                    </span>
                    <span class="story-section-person-role text-style-label text-style-size-14 color-green-700">
                        Operations Manager
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