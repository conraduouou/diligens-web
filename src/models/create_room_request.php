<?php


try {
    require('helper_functions.php');

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
    } else {
        throw new Exception();
    }

    // Input Appointment;
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $num = $_POST["number"];
        $company = $_POST["company"];
        $room = $_POST["room_id"];
        $date = $_POST["date"];

        $query = $conn->prepare("INSERT INTO `" . ROOM_REQUEST_LIST . "`(`id`, `name`, `email`, `number`, `company`, `room_id`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->bind_param("issssis", $id, $name, $email, $num, $company, $room, $date);

        if ($query->execute()) {
            handleSuccess(
                code: 201,
                message: 'Room request delivered! Please wait for an email by the team regarding your request.',
            );
        } else {
            throw new Exception();
        }
    } else {
        handleClientError(new Exception("The required fields were not all filled."));
    }
} catch (Exception $e) {
    handleServerError();
} finally {
    $conn->close();
}
