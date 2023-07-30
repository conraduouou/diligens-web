<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="src/views/components/primary_button/primary_button.css">
    <link rel="stylesheet" href="src/views/home/home.css">
    <title>Diligens | Home</title>
</head>

<body>
    <?php include COMPONENTS_PATH . '/navbar/navbar.html' ?>
    <div class="flex-container-row first-section">
        <img src="assets/illustration1.svg" alt="illustration 1" class="illustration">
        <div class="flex-expand"></div>
        <div class="color-green-700 margin-auto">
            <p class="text-style-display text-style-size-60 text-style-weight-bold margin-none">
                We are
                <span class="text-style-italic">HERE</span>
                to help!
            </p>
            <p class="text-style-display text-style-size-28 text-style-weight-bold margin-none">Empowering your success
                with expert guidance—we got you!</p>
        </div>
    </div>
    <div class="flex-container-row second-section">
        <div class="color-green-700 second-section-first">
            <div class="flex-container-row" style="margin-bottom: 60px">
                <img src="assets/logo.svg" class="logo" alt="Diligens Logo" height=105px style="margin-right:45px">
                <span class="text-style-display text-style-size-60 text-style-weight-bold margin-vertical-auto">Our
                    Services</span>
            </div>
            <p class="margin-none text-style-label text-style-weight-medium text-style-size-28 text-style-align-justify"
                style="margin-bottom: 70px">
                We offer valuable insights to assist you in making well-informed business decisions. <br><br>
                We don't consist of experts for nothing. Try contacting us now!
            </p>

            <?php
            $buttonText = 'Check out our Services';
            include COMPONENTS_PATH . '/primary_button/primary_button.php';
            ?>
        </div>
        <div class="flex-expand"></div>
        <div>
            <img src="assets/illustration2.svg" alt="Illustration 2">
        </div>
    </div>
</body>

</html>