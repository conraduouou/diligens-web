<!DOCTYPE html>
<html>

<head>
    <title>Side Bar and Content</title>
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/' . VIEWS_PATH . '/admin/admin.css' ?>">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
</head>

<body>
    <div class="sidebar">
        <h1>Welcome Back!</h1>

        <div class="profile-card">
            <div class="profile-info">
                <div class="profile-img"></div>
                <div class="name">
                    Marvs
                    <span class="position">Admin</span>
                </div>
            </div>
        </div>

        <ul>
            <li>Dashboard</li>
            <li>Appointments</li>
            <li>Management</li>
            <li>Analytics</li>
            <li>Tracking</li>
            <li>Statistics</li>
        </ul>
    </div>
    <div class="content">
        <div class="container">
            <div class="green-box total-appointment">
                <div class="left-side">
                    <span class="title">Total</span>
                    <span class="title">Appointments</span>
                </div>
                <div class="right-side">3</div>
            </div>
            <div class="green-box client">
                <div class="left-side">
                    <span class="title">Clients</span>
                </div>
                <div class="right-side">3</div>
            </div>
        </div>
    </div>
</body>

</html>