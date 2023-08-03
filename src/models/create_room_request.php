<?php

require(__DIR__ . '/../../inc/config.php');
require('helper_functions.php');

try {
    // check db first
    checkDatabaseAndCreate();

    // Create connection
    $conn = new mysqli('localhost', 'root', '', DB_NAME);

    // Check for Id
    $query = $conn->prepare("SELECT id FROM `" . ROOM_REQUEST_LIST . "` ORDER BY id DESC LIMIT 1");
    if ($query->execute()) {
        $max = $query->get_result();
        $row = $max->fetch_array(MYSQLI_ASSOC);
        if (isset($row)) {
            $maxid = $row["id"];
            $id = $maxid + 1;
        } else {
            $id = 1;
        }
    }

    // Input Appointment;
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $num = $_POST["number"];
        $company = $_POST["company"];
        $room = $_POST["room-type"];
        $date = $_POST["date"];

        $query = $conn->prepare("INSERT INTO `" . ROOM_REQUEST_LIST . "`(`id`, `name`, `email`, `number`, `company`, `room-type`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->bind_param("sssssss", $id, $name, $email, $num, $company, $room, $date);
        if ($query->execute()) {
        }
    }
} catch (Exception $e) {
    handleError($e);
} finally {
    $conn->close();
}
