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
                Welcome to Diligens Consultants, Inc., a leading business consulting firm committed to empowering
                organizations for success. With a dedicated team of seasoned professionals, we offer comprehensive
                consulting solutions designed to tackle complex challenges and drive transformative outcomes. Our
                unwavering dedication to excellence, innovative thinking, and deep industry knowledge make us a trusted
                partner for businesses across various sectors.
            </p>
            <h2
                class="info-section-content-header text-style-headline text-style-weight-bold text-style-size-48 color-green-700">
                Mission
            </h2>
            <p
                class="info-section-content-paragraph text-style-body text-style-weight-normal text-style-size-20 text-style-align-justify color-green-700">
                Our mission at Diligens is to empower businesses to thrive in an ever-evolving world. We aim to be the
                catalyst for positive change, providing expert guidance, and strategic insights that drive innovation,
                efficiency, and sustainable success. Through collaborative partnerships, we empower our clients to
                unlock their full potential, navigate challenges, and seize opportunities in their respective
                industries.
            </p>
            <h2
                class="info-section-content-header text-style-headline text-style-weight-bold text-style-size-48 color-green-700">
                Vision
            </h2>
            <p
                class="info-section-content-paragraph text-style-body text-style-weight-normal text-style-size-20 text-style-align-justify color-green-700">
                Our vision is to be the go-to consulting firm, renowned for its unwavering commitment to excellence and
                driving transformative impact for businesses worldwide. We aspire to be recognized as industry thought
                leaders, trusted advisors, and catalysts for positive change, inspiring organizations to reach new
                heights of success.
            </p>
            <h2
                class="info-section-content-header text-style-headline text-style-weight-bold text-style-size-48 color-green-700">
                History
            </h2>
            <p
                class="info-section-content-paragraph text-style-body text-style-weight-normal text-style-size-20 text-style-align-justify color-green-700">
                Founded in 2009, Diligens Consultants, Inc. has been at the forefront of delivering high-quality
                consulting services since its inception. With a passion for innovation and a customer-centric approach,
                we have consistently earned the trust of clients from various sectors, ranging from small enterprises to
                large corporations. Over the years, our team of experts has accumulated extensive experience and domain
                knowledge, enabling us to provide customized solutions tailored to each client's unique needs. As we
                continue to grow and evolve, our commitment to excellence remains unwavering, and we look forward to
                shaping many more success stories with our valued clients.
            </p>
        </div>
    </div>
    <?php
    include COMPONENTS_PATH . '/footer/footer.php';
    ?>
</body>

</html>