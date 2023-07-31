<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS-LogIn.css">
    <title>Diligens Admin | Login</title>
</head>

<body>
    <?php echo "for valid testing use: admin as username and password"?>
    <div class="">
        <div class="">
            <form class="" action="/diligens-web/src/models/check_login.php" method="post">
                <input type="text" placeholder="username" name="username" required/>
                <input type="password" placeholder="password" name="password" required/>
                <button type="submit">login</button>
            </form>
        </div>
    </div>
</body>

</html>