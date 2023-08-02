<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . COMPONENTS_PATH . '/textfield/textfield.css' ?>">
    <link rel="stylesheet"
        href="<?php echo PROJECT_ROOT_PATH . '/' . COMPONENTS_PATH . '/primary_button/primary_button.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . COMPONENTS_PATH . '/dropdown/dropdown.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/rooms/rooms.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <title>Diligens | Rooms</title>
</head>

<body>
    <?php
    include COMPONENTS_PATH . '/navbar/navbar.php';
    ?>
    <?php
    $title = 'Rooms';
    include COMPONENTS_PATH . '/title_section/title_section.php';
    ?>

    <h2 class="text-style-display text-style-size-60 text-style-weight-bold color-green-700">
        Book a Room
    </h2>

    <div class="book-section flex-container-row">
        <div class="book-section-left">
            <img src="<?php echo PROJECT_ROOT_PATH . '/assets/room-preview.png' ?> " alt="Room preview">
            <div class="book-section-room-details flex-container-col text-style-label text-style-size-28">
                <div class="flex-container-row">
                    <span class="text-style-weight-semibold color-green-600">Rate:</span>
                    <span class="text-style-weight-bold color-green-700">1,200 php/hr</span>
                </div>
                <div class="flex-container-row">
                    <span class="text-style-weight-semibold color-green-600">Capacity:</span>
                    <span class="text-style-weight-bold color-green-700">6-8 people</span>
                </div>
                <div class="flex-container-row">
                    <span class="text-style-weight-semibold color-green-600">Projected media:</span>
                    <span class="text-style-weight-bold color-green-700">Projector</span>
                </div>
            </div>
        </div>
        <div class="book-section-right">
            <form id="book-section-form" class="flex-container-col" method="POST">
                <label for="name" class="textfield-label text-style-label">Name</label>
                <input type="text" name="name" id="name" class="textfield text-style-label"
                    placeholder="Put your beautiful name here..." required>
                <label for="email" class="textfield-label text-style-label">Email</label>
                <input type="email" name="email" id="email" class="textfield text-style-label"
                    placeholder="Put your great-sounding email here..." required>
                <label for="number" class="textfield-label text-style-label">Number</label>
                <input type="text" name="number" id="number" class="textfield text-style-label"
                    placeholder="Put your mobile where we can contact you here..." required>
                <label for="company" class="textfield-label text-style-label">Company name</label>
                <input type="text" name="company" id="company" class="textfield text-style-label"
                    placeholder="Put your mobile where we can contact you here..." required>
                <label for="type" class="textfield-label text-style-label">Room type</label>
                <div class="dropdown" tabindex="0">
                    <div id="dropdown-button"
                        class="text-style-label text-style-weight-medium text-style-size-18">
                    </div>
                    <div id="dropdown-option-container">
                    </div>
                </div>
                <label for="date" class="textfield-label text-style-label">Date</label>
                <input type="date" name="date" id="date" class="textfield text-style-label" required>
                <input
                    class="book-section-form-button primary-button color-white text-style-label text-style-weight-bold text-style-size-28"
                    type="submit" value="Book room">
                </input>
            </form>
        </div>
    </div>
    
    <script src="<?php echo PROJECT_ROOT_PATH . '/' . CONTROLLERS_PATH . '/pages/rooms/rooms.js' ?>"></script>

    <?php
    include COMPONENTS_PATH . '/footer/footer.php';
    ?>
</body>

</html>