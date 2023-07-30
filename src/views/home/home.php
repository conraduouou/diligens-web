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
    <div class="first-section flex-container-row">
        <img src="assets/illustration1.svg" alt="illustration 1" class="illustration">
        <div class="flex-expand"></div>
        <div class="color-green-700 margin-auto text-style-align-center">
            <h2 class="text-style-display text-style-size-60 text-style-weight-bold margin-none">
                We are
                <span class="text-style-italic">HERE</span>
                to help!
            </h2>
            <p class="text-style-display text-style-size-28 text-style-weight-medium margin-none">
                Empowering your success with expert guidance—<br>
                we got you!
            </p>
        </div>
    </div>
    <div class="services-section flex-container-row">
        <div class="services-section-first color-green-700">
            <div class="services-section-header-div flex-container-row">
                <img src="assets/logo.svg" class="logo" alt="Diligens Logo" height=105px>
                <h2
                    class="services-section-header text-style-display text-style-size-60 text-style-weight-bold margin-vertical-auto">
                    Our Services</h2>
            </div>
            <p
                class="services-section-caption margin-none text-style-label text-style-weight-medium text-style-size-28 text-style-align-justify">
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
    <div class="stories-section flex-container-col color-green-700">
        <img src="assets/divider.svg" alt="divider" class="divider">
        <h2
            class="stories-section-header margin-none text-style-display text-style-weight-bold text-style-size-60 text-style-align-center">
            Hear out our Stories
        </h2>
        <p
            class="stories-section-caption margin-none text-style-display text-style-weight-medium text-style-size-28 text-style-align-center">
            We like stories with good endings. We'll help you get yours, too.
        </p>
        <div class="stories-section-stories flex-container-row">
            <?php
            $storyText = $storyText = "Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum
                has been the industry's standard dummy text ever since the 1500s.";

            for ($index = 1; $index <= 3; $index++)
                include COMPONENTS_PATH . '/story_in_home/story_in_home.php';
            ?>
        </div>
        <?php
        $buttonText = 'Look at more Stories';
        $center = true;
        $padding = 132;
        include COMPONENTS_PATH . '/primary_button/primary_button.php';
        ?>
    </div>
    <div class="news-section flex-container-col">
        <h2
            class="news-section-header color-green-700 text-style-display text-style-weight-semibold text-style-size-48">
            Stay informed!<br>
            Explore our latest articles.
        </h2>
        <div class="news-section-article-container flex-container-row">
            <?php
            for ($x = 0; $x < 3; $x++) {
                include COMPONENTS_PATH . '/news_in_home/news_in_home.php';
            }
            ?>
        </div>
    </div>
    <div class="room-section flex-container-col">
        <h2
            class="room-section-header text-style-display text-style-align-center text-style-weight-bold text-style-size-48 color-white margin-none">
            Looking for a meeting room?
        </h2>
        <p
            class="room-section-caption text-style-title text-style-align-center text-style-weight-medium text-style-size-28 color-white margin-none">
            We got rooms available for your purposes. Tell us what you need!
        </p>
        <button type="button"
            class="secondary-button margin-auto text-style-label text-style-weight-bold text-style-size-28 color-green-700">
            Go to Rooms
        </button>
    </div>
    <div class="contact-section flex-container-col">
        <h2
            class="contact-section-header text-style-display text-style-align-center text-style-weight-semibold text-style-size-48 color-green-700 margin-none">
            We'd love to hear from you!
        </h2>
        <p
            class="contact-section-caption text-style-title text-style-align-center text-style-weight-medium text-style-size-28 color-green-700 margin-none">
            Reach out to us today and let's start building a bright future together—<br>
            your success is our top priority!
        </p>
        <form class="contact-section-form flex-container-row">
            <div class="contact-section-form-details">
                <label for="name" class="textfield-label text-style-label">Name</label>
                <input type="text" name="name" id="name" class="textfield text-style-label" placeholder="Put your beautiful name here..." required>
                <label for="email" class="textfield-label text-style-label">Email</label>
                <input type="email" name="email" id="email" class="textfield text-style-label" placeholder="Put your great-sounding email here..." required>
                <label for="mobile" class="textfield-label text-style-label">Number</label>
                <input type="text" name="mobile" id="mobile" class="textfield text-style-label" placeholder="Put your mobile where we can contact you here..." required>
                <label for="company" class="textfield-label text-style-label">Company name</label>
                <input type="text" name="company" id="company" class="textfield text-style-label" placeholder="Put the company name we'll make successful together..." required>
            </div>
            <div class="contact-section-form-message">
                <label for="message" class="textfield-label text-style-label">Message</label>
                <textarea type="text" name="message" id="message" placeholder="Have something to say? Put it here!" class="textfield text-style-label"></textarea>
            </div>
        </form>
        <?php
        $buttonText = 'Send';
        $center = true;
        $padding = 132;
        include COMPONENTS_PATH . '/primary_button/primary_button.php';
        ?>
    </div>
</body>

</html>