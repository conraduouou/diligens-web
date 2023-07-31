<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
        href="<?php echo PROJECT_ROOT_PATH . '/' . COMPONENTS_PATH . '/story_in_home/story_in_home.css' ?>">
</head>

<body>
    <a class="link-container" href="<?php echo BASE_URL_PATH . '/stories/' . $storyId ?>">
        <div class="story">
            <div class="circle-story flex-container-row" style="margin-bottom: 52px">
                <img src="assets/story-illustration<?php echo $storyId; ?>.svg" alt="story<?php echo $storyId; ?>"
                    class="margin-auto">
            </div>
            <span
                class="margin-none text-style-body text-style-align-center text-style-size-20 text-style-weight-medium story-span color-green-700">
                <?php echo $storyText ?>
            </span>
        </div>
    </a>
</body>

</html>