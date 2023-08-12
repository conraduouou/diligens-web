<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"
        href="<?php echo PROJECT_ROOT_PATH . '/' . COMPONENTS_PATH . '/primary_button/primary_button.css' ?>">
</head>

<body>
    <a href="<?php echo $buttonLink; ?>" class="primary-button color-white 
    <?php if ($center)
        echo 'margin-auto';
    ?> " <?php
     if ($padding)
         echo 'style="--padding: ' . $padding . 'px"';
     ?>>
   <span class="text-style-label text-style-weight-bold">
            <?php echo $buttonText ?>
        </span>
    </a>
</body>

</html>