<div class="primary-button color-white
    <?php
    if ($center)
        echo 'margin-auto';
    ?>
    "
    <?php
    if ($padding)
        echo 'style="padding-left: ' . $padding . 'px; padding-right: ' . $padding . 'px"';
    ?>
    >
    <span class="text-style-label text-style-weight-bold text-style-size-28">
        <?php echo $buttonText ?>
    </span>
</div>