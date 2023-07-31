<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"
        href="<?php echo PROJECT_ROOT_PATH . '/' . COMPONENTS_PATH . '/primary_button/primary_button.css' ?>">
</head>

<body>
    <button class="primary-button color-white
    <?php
    if ($center)
        echo 'margin-auto';
    ?>
    " <?php
    if ($padding)
        echo 'style="padding-left: ' . $padding . 'px; padding-right: ' . $padding . 'px"';
    ?>>
    <span class="text-style-label text-style-weight-bold text-style-size-28">
            <?php echo $buttonText ?>
        </span>
    </button>
</body>

</html>