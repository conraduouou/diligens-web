<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"
        href="<?php echo PROJECT_ROOT_PATH . '/' . COMPONENTS_PATH . '/news_in_home/news_in_home.css' ?>">
</head>

<body>
    <a href="<?php echo BASE_URL_PATH . '/news/' . $newsId ?>">
        <div class="news-section-article">
            <div class="news-section-image" style="background-image: url('<?php echo PROJECT_ROOT_PATH . '/assets/news' . $newsId . '.jpg' ?>'); background-size: cover; background-position: top center;"></div>
            <div class="news-section-label flex-container-row">
                <div class="news-section-label-line"></div>
                <h4
                    class="news-section-label-text text-style-label text-style-size-22 text-style-weight-medium color-black">
                    News</h4>
            </div>
            <h3
                class="news-section-article-title text-style-title text-style-size-22 text-style-weight-medium color-black">
                <?php
                    echo $newsHeadline;
                ?>
            </h3>
            <p class="text-style-body text-style-size-16 color-black">
            <?php
                    echo $newsPreview;
                ?>
            </p>
        </div>
    </a>
</body>

</html>