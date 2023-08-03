<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diligens | Services</title>
    <link rel="icon" href="diligens-logo.svg" type="image/icon type">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/services/services.css' ?>">
</head>

<body>
    <?php
    include COMPONENTS_PATH . '/navbar/navbar.php';
    ?>

    <?php
    $title = 'Services';
    include COMPONENTS_PATH . '/title_section/title_section.php';
    ?>

    <div class="body-container">
        <!--- Side Bar --->
        <div
            class="info-section-jump-links text-style-label text-style-weight-semibold text-style-size-22 color-green-700">
            <a href="#advice">Professional Advice</a>
            <a href="#tax">Tax Advisory</a>
            <a href="#consulting">Consulting</a>
            <a href="#consultants">Consultants</a>
            <a href="#room">Rooms</a>
            <a href="#appointment">Appointment</a>
        </div>

        <div class="body-container-content">
            <!--- Assurance --->
            <div id="advice" class="service-container">
                <div class="left-side">
                    <div class="left-side-title">Professional Advice</div>
                    <img src="<?php echo PROJECT_ROOT_PATH . '/assets/services1.svg' ?>" alt="Image 1">
                </div>

                <div class="right-side">
                    <p class="right-side-text">
                        <strong>Empower Your Decisions with Expert Guidance</strong>
                        <br>
                        <br>
                        Your trusted source for reliable and informed counsel. Our team of seasoned experts is committed
                        to providing you with valuable insights and recommendations to tackle your business challenges
                        head-on.
                    </p>
                    <?php
                    $buttonLink = BASE_URL_PATH . '/services/1';
                    $buttonText = 'Know more';
                    $padding = 64;
                    include COMPONENTS_PATH . '/primary_button/primary_button.php';
                    ?>
                </div>
            </div>
            <!--- Tax Advisory --->
            <div id="tax" class="service-container">
                <div class="left-side">
                    <div class="left-side-title">Tax Advisory</div>
                    <div class="image-container">
                        <img src="<?php echo PROJECT_ROOT_PATH . '/assets/services2.svg' ?>" alt="Image 2">
                    </div>
                </div>

                <div class="right-side">
                    <p class="right-side-text">
                        <strong>Navigating Tax Matters Made Effortless</strong>
                        <br>
                        <br>
                        Your partner in simplifying the complexities of taxation. Our dedicated team of tax experts is
                        here to provide you with comprehensive guidance and strategic solutions to optimize your tax
                        planning and compliance.
                    </p>
                    <?php
                    $buttonLink = BASE_URL_PATH . '/services/2';
                    $buttonText = 'Know more';
                    $padding = 64;
                    include COMPONENTS_PATH . '/primary_button/primary_button.php';
                    ?>
                </div>
            </div>

            <!--- Consulting --->
            <div id="consulting" class="service-container">
                <div class="left-side">
                    <div class="left-side-title">Consulting</div>
                    <div class="image-container">
                        <img src="<?php echo PROJECT_ROOT_PATH . '/assets/services3.svg' ?>" alt="Image 3">
                    </div>
                </div>

                <div class="right-side">
                    <p class="right-side-text">
                        <strong>Unlock the Potential of Your Business with Expert Consulting</strong>
                        <br>
                        <br>
                        We take pride in our dynamic team of experienced consultants who are driven to propel your
                        organization to new heights of success. Whether you're looking to streamline operations, expand
                        market reach, or foster innovation, we've got the strategic expertise to guide you every step of
                        the way.
                    </p>
                    <?php
                    $buttonLink = BASE_URL_PATH . '/services/3';
                    $buttonText = 'Know more';
                    $padding = 64;
                    include COMPONENTS_PATH . '/primary_button/primary_button.php';
                    ?>
                </div>
            </div>

            <!--- Consultants--->
            <div id="consultants" class="service-container">
                <div class="left-side">
                    <div class="left-side-title">Consultants</div>
                    <div class="image-container">
                        <img src="<?php echo PROJECT_ROOT_PATH . '/assets/consultant1.png' ?>" alt="Image 4">
                    </div>
                </div>

                <div class="right-side">
                    <p class="right-side-text">
                        <strong  class="text-style-size-28">Jhon Doe</strong>
                        <br>
                        <br>
                        Specializing in financial management, I am a results-driven business consultant with a track record 
                        of empowering companies to make informed financial decisions. Armed with an in-depth understanding 
                        of financial analysis and risk assessment, I develop comprehensive financial plans that align with 
                        business objectives. My expertise in budgeting, forecasting, and cost optimization ensures clients 
                        can maximize profitability while maintaining financial stability. With an unwavering commitment to 
                        client success, I navigate regulatory complexities and deliver strategies that bolster financial 
                        resilience in dynamic market landscapes.
                    </p>
                </div>
            </div>

            <div class="service-container">
                <div class="left-side">
                    <div class="image-container">
                        <img src="<?php echo PROJECT_ROOT_PATH . '/assets/consultant2.png' ?>" alt="Image 4">
                    </div>
                </div>

                <div class="right-side">
                    <p class="right-side-text">
                        <strong class="text-style-size-28">Myra E Celia</strong>
                        <br>
                        <br>
                        A dynamic business consultant with a flair for marketing and sales, I propel brands to new heights through 
                        innovative campaigns and customer-centric approaches. My data-driven insights and market research prowess 
                        empower clients to refine their brand identity, increase market share, and outperform competitors. As a 
                        sales strategist, I enhance lead generation and conversion strategies, equipping sales teams with cutting-edge 
                        techniques for lasting customer relationships. By driving revenue growth and market penetration, I accelerate 
                        businesses towards sustainable, revenue-focused success.
                    </p>
                </div>
            </div>

            <div class="service-container">
                <div class="left-side">
                    <div class="image-container">
                        <img src="<?php echo PROJECT_ROOT_PATH . '/assets/consultant3.png' ?>" alt="Image 4">
                    </div>
                </div>

                <div class="right-side">
                    <p class="right-side-text">
                        <strong class="text-style-size-28">Mary Q. Pawn</strong>
                        <br>
                        <br>
                        With a passion for guiding organizations through transformational change, I am a seasoned business consultant 
                        specializing in change management and organizational development. My empathetic leadership style and active 
                        listening skills enable me to connect with stakeholders at all levels, fostering a positive and adaptive 
                        company culture. From mergers and acquisitions to digital transformations, I devise robust change management 
                        strategies that mitigate resistance and facilitate smooth transitions. By coaching leadership teams and empowering 
                        employees, I cultivate resilience and agility within organizations, ensuring they thrive amidst ever-evolving business landscapes.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--- Looking for meeting rooms + button --->
    <div id="room" class="meeting-room-container">
        <div class="text-style-headline text-style-weight-bold text-style-size-48 color-green-700">
            Looking for a meeting room?
        </div>
        <div class="text-style-headline text-style-weight-medium text-style-size-28 color-green-700">
            We got rooms available for your purposes. Tell us what you need!
        </div>
        <?php
        $buttonLink = BASE_URL_PATH . '/rooms';
        $buttonText = 'Go to Rooms';
        $padding = 132;
        include COMPONENTS_PATH . '/primary_button/primary_button.php';
        ?>
    </div>
    <div class="contact-section-home" style="margin: 130px" id="appointment">
        <?php
        include COMPONENTS_PATH . '/contact_section/contact_section.php';
        ?>
    </div>
    <?php
    include COMPONENTS_PATH . '/footer/footer.php';
    ?>
</body>

</html>