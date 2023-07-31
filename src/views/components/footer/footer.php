<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . COMPONENTS_PATH . '/footer/footer.css' ?>">
</head>

<body>
    <footer class="footer flex-container-row bg-color-green-900 color-white">
        <div class="footer-links">
            <p class="text-style-label text-style-weight-bold text-style-size-18 margin-none">
                Helpful Links
            </p>
            <div class="footer-small-line"></div>
            <div
                class="footer-links-container flex-container-row text-style-label text-style-weight-medium text-style-size-18">
                <div class="footer-links-col1 flex-container-col">
                    <a href="#">Home</a>
                    <a href="#">Proposal</a>
                    <a href="#">About us</a>
                </div>
                <div class="footer-links-col2 flex-container-col">
                    <a href="#">Services</a>
                    <a href="#">Stories</a>
                    <a href="#">Contact us</a>
                </div>
            </div>
        </div>
        <div class="footer-reach">
            <p class="text-style-label text-style-weight-bold text-style-size-18 margin-none">
                Reach us at
            </p>
            <div class="footer-small-line"></div>
            <div
                class="footer-reach-facebook flex-container-row text-style-label text-style-weight-medium text-style-size-18">
                <a href="#">
                    <img src="<?php echo PROJECT_ROOT_PATH . '/assets/ic-facebook.svg' ?>" alt="facebook">
                    Diligens Consultants, Inc.
                </a>
            </div>
        </div>
        <div class="footer-logo flex-container-row">
            <img src="<?php echo PROJECT_ROOT_PATH . '/assets/logo-white.svg' ?>" alt="white logo">
            <span
                class="footer-logo-label text-style-display text-style-weight-bold text-style-size-36 margin-vertical-auto">
                Diligens
            </span>
        </div>
    </footer>

</body>

</html>