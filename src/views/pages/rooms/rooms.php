<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PROJECT_ROOT_PATH . '/assets/style.css' ?>">
    <title>Diligens | Rooms</title>
</head>
<body>
    <form method="post" action="/diligens-web/src/models/create_appointment.php"> 
    <label for="name">Name:</label>
    <input type="text" name="name" value="test"/> <br/>
    <label for="email">Email:</label>
    <input type="email" name="email" value="test@test"/> <br/>
    <label for="number">Number:</label>
    <input type="text" name="number" value="123"/> <br/>
    <label for="company">Company Name:</label>
    <input type="text" name="company" value="test"/> <br/>
    <label for="room-type">Room Type:</label>
    <select name="room-type" id="room-type">
        <option value="r1">r1</option>
        <option value="r2">r2</option>
        <option value="r3">r3</option>
        <option value="r4">r4</option>
    </select> <br/>
    <label for="date">Date:</label>
    <input type="date" name="date" value="08-01-2023"/> <br/>
    <br/><input type="submit" value="submit"/>
    </form>
</body>
</html>