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
            <div class="circle-story flex-container-row" style="--url: url('<?php echo PROJECT_ROOT_PATH . '/assets/story-image' . $storyId . '.jpg' ?>')">
            </div>
            <span
                class="margin-none text-style-label text-style-align-center text-style-size-24 text-style-weight-medium text-style-italic story-span color-green-700">
                <?php echo $storyText ?>
            </span>
        </div>
    </a>
</body>

</html>