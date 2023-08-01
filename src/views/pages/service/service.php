<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/service/service.css' ?>">
    <title>Professional Advice</title>
</head>

<body>
    <?php
    include COMPONENTS_PATH . '/navbar/navbar.php';
    ?>

    <div class="service-title flex-container-row bg-color-green-800">
        <img src="<?php echo PROJECT_ROOT_PATH . '/assets/service-bg.png' ?>" alt="">
        <div class="service-title-text-container">
            <h1 class="service-title-text text-style-display text-style-size-60 color-white margin-none">
                Professional Advice
            </h1>
            <div class="service-title-line bg-color-white"></div>
        </div>
        <p class="service-title-description text-style-label text-style-size-24 color-white">
            Our Professional Advice service provides personalized and expert guidance to individuals and businesses
            seeking to make informed decisions and achieve their goals.
        </p>
    </div>

    <div class="service-content flex-container-row">
        <div class="service-content-left flex-container-col">
            <img src="<?php echo PROJECT_ROOT_PATH . '/assets/story-illustration1.svg' ?>" alt="Illustration">
            <p class="text-style-label text-style-size-24 color-green-900">
                Whether you're a budding entrepreneur or a seasoned professional, our team of experienced advisors are
                here to support you on your journey to success.
            </p>
            <p class="text-style-label text-style-size-24 color-green-900">
                <strong>Who will benefit:</strong>
                <br>
                <br>
                Individuals seeking career guidance and personal development.
                <br>
                <br>
                Start-ups and small businesses in need of strategic planning and mentorship.
                <br>
                <br>
                Established companies looking to optimize their operations and achieve sustainable growth.
            </p>
        </div>
        <div class="service-content-right">
            <div class="service-content-image"
                style="--url: url(<?php echo PROJECT_ROOT_PATH . '/assets/service1.jpg' ?>)"></div>
            <ul class="service-content-right-text text-style-label text-style-size-28 color-green-900">
                <li>
                    <strong>Personalized Consultations: </strong>
                    Receive one-on-one consultations tailored to your specific needs and objectives.
                </li>
                <br>
                <li>
                    <strong>Strategic Planning: </strong>
                    Develop a clear roadmap and actionable strategies to achieve your financial and professional goals.
                </li>
                <br>
                <li>
                    <strong>Career Development: </strong>
                    Get guidance on career advancements, skill development, and achieving work-life balance.
                </li>
                <br>
                <li>
                    <strong>Investment Insights: </strong>
                    Access expert advice on investment opportunities and risk management.
                </li>
            </ul>
        </div>
    </div>

    <?php
    include COMPONENTS_PATH . '/footer/footer.php';
    ?>
</body>

</html>