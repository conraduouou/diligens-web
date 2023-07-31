<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/about_us/about_us.css' ?>">
    <title>Diligens | About us</title>
</head>

<body>
    <?php
    include COMPONENTS_PATH . '/navbar/navbar.php';
    ?>
    <?php
    $title = 'About us';
    include COMPONENTS_PATH . '/title_section/title_section.php';
    ?>
    <div class="info-section flex-container-row">
        <div class="info-section-jump flex-container-row">
            <div
                class="info-section-jump-links text-style-label text-style-weight-semibold text-style-size-22 color-green-700">
                <a href="#">Overview</a>
                <a href="#">Mission</a>
                <a href="#">Vision</a>
                <a href="#">History</a>
            </div>
        </div>
        <div class="info-section-content">
            <h2
                class="info-section-content-header text-style-headline text-style-weight-bold text-style-size-48 color-green-700">
                Overview
            </h2>
            <p
                class="info-section-content-paragraph text-style-body text-style-weight-normal text-style-size-20 text-style-align-justify color-green-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam erat sapien, semper sodales consequat a,
                consectetur vitae ex. Integer nec sodales orci. Pellentesque posuere nisi non lobortis elementum.
            </p>
            <h2
                class="info-section-content-header text-style-headline text-style-weight-bold text-style-size-48 color-green-700">
                Mission
            </h2>
            <p
                class="info-section-content-paragraph text-style-body text-style-weight-normal text-style-size-20 text-style-align-justify color-green-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam erat sapien, semper sodales consequat a,
                consectetur vitae ex. Integer nec sodales orci. Pellentesque posuere nisi non lobortis elementum.
            </p>
            <h2
                class="info-section-content-header text-style-headline text-style-weight-bold text-style-size-48 color-green-700">
                Vision
            </h2>
            <p
                class="info-section-content-paragraph text-style-body text-style-weight-normal text-style-size-20 text-style-align-justify color-green-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam erat sapien, semper sodales consequat a,
                consectetur vitae ex. Integer nec sodales orci. Pellentesque posuere nisi non lobortis elementum.
            </p>
            <h2
                class="info-section-content-header text-style-headline text-style-weight-bold text-style-size-48 color-green-700">
                History
            </h2>
            <p
                class="info-section-content-paragraph text-style-body text-style-weight-normal text-style-size-20 text-style-align-justify color-green-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor et libero vitae consectetur.
                Nullam commodo nulla neque, venenatis luctus dui aliquam et. Mauris condimentum, nunc id tempus
                vehicula, nibh leo ullamcorper tortor, ac dapibus felis nunc vel dolor. Nulla ornare vitae sem aliquam
                facilisis. Nulla vel congue mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Phasellus eu blandit ante. Fusce tempor pretium nisi eu rutrum. In hac habitasse platea
                dictumst. In hac habitasse platea dictumst. Nulla et ultrices orci, in ullamcorper velit. Quisque
                tincidunt et augue nec dignissim. Fusce efficitur, ex et dapibus ultrices, arcu magna pharetra nibh, non
                pharetra massa nisi eget leo. <br><br>

                Aenean lacinia, nunc volutpat lacinia commodo, erat lacus sodales magna, eget finibus mi lacus eget
                lectus. Donec vel mauris eget tortor eleifend aliquam. Ut varius diam nec lorem tristique porttitor.
                Curabitur facilisis, nisi sit amet egestas tincidunt, turpis metus faucibus arcu, at pretium ex neque
                nec massa. In vitae ex vitae tortor tempus vestibulum vitae sit amet ante. Class aptent taciti sociosqu
                ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla sodales lacinia leo ut elementum.
                Sed euismod leo a ultricies dictum. Etiam viverra hendrerit velit, nec facilisis lectus vehicula in.
                Morbi ultricies aliquet purus eget placerat. Etiam dignissim pulvinar turpis, ultrices commodo nulla
                efficitur non. <br><br>

                Suspendisse mattis quis leo ac vestibulum. Aenean efficitur ipsum justo, eu molestie mauris semper non.
                Sed at ultricies arcu. Curabitur et erat rutrum, aliquet tortor at, pretium est. Quisque eget massa
                volutpat, rhoncus mauris ac, imperdiet leo. Aenean et neque mauris. Etiam at porttitor nunc, ut
                tincidunt lorem. Nunc vestibulum luctus maximus. Mauris posuere vulputate viverra. Sed nec pretium
                mauris, nec efficitur purus. Nunc venenatis arcu nec pellentesque dignissim. <br><br>

                Quisque dapibus turpis quis arcu hendrerit, a vestibulum eros dapibus. Quisque accumsan dignissim elit,
                vel gravida ipsum ornare vitae. Integer suscipit purus sit amet fringilla condimentum. Lorem ipsum dolor
                sit amet, consectetur adipiscing elit. Vivamus varius diam ligula, at lacinia ipsum rutrum ac. Nulla
                consequat est vitae imperdiet gravida. Nullam eget nisi bibendum, faucibus diam nec, accumsan augue.
                Quisque efficitur vestibulum est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                faucibus sit amet ligula eu ultricies. Orci varius natoque penatibus et magnis dis parturient montes,
                nascetur ridiculus mus. Nulla dictum neque odio, id rhoncus ligula tincidunt sit amet. Vivamus sodales
                nisl nisi, at rutrum magna tristique et. Cras id elit ut massa condimentum finibus id nec dui. Phasellus
                vitae porta urna.
            </p>
        </div>
    </div>
    <?php
    include COMPONENTS_PATH . '/footer/footer.php';
    ?>
</body>

</html>