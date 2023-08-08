<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . COMPONENTS_PATH . '/contact_section/contact_section.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . COMPONENTS_PATH . '/primary_button/primary_button.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . COMPONENTS_PATH . '/textfield/textfield.css' ?>">
</head>

<body>
    <div class="contact-section flex-container-col">
        <h2 class="contact-section-header text-style-display text-style-align-center text-style-weight-semibold text-style-size-48 color-green-700">
            We'd love to hear from you!
        </h2>
        <p class="contact-section-caption text-style-title text-style-align-center text-style-weight-medium text-style-size-28 color-green-700">
            Reach out to us today and let's start building a bright future together—<br>
            your success is our top priority!
        </p>
        <form class="contact-section-form flex-container-col" id="contact-form" method="POST">
            <div class="flex-container-row">
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
            </div>
            <input class="primary-button primary-button-padding-132 color-white text-style-label text-style-weight-bold text-style-size-28 margin-auto" type="submit" value="Send">
            </input>
        </form>
    </div>

    <script src="<?php echo PROJECT_ROOT_PATH . '/' . CONTROLLERS_PATH . '/components/contact_section/contact_section.js' ?>"></script>
</body>

</html>