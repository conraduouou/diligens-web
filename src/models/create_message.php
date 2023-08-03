<?php

require('helper_functions.php');

try {
    // check db first
    checkDatabaseAndCreate();

    // Create connection
    $conn = new mysqli('localhost', 'root', '', 'diligens_web');

    // Input message;
    if (isset($_POST['name'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $num = $_POST["mobile"];
        $company = $_POST["company"];
        $message = $_POST["message"];

        $query = $conn->prepare("INSERT INTO `message_list`(`name`, `email`, `mobile`, `company`, `message`) VALUES (?, ?, ?, ?, ?)");
        $query->bind_param("sssss", $name, $email, $num, $company, $message);

        if ($query->execute()) {
            header('Content-Type: application/json');
            echo json_encode(
                array(
                    'statusCode' => 201,
                    'message' => 'Message delivered! Please wait for an email by the team regarding your message.'
                )
            );
        }
    } else {
        header('Content-Type: application/json');

        echo json_encode(
            array(
                'statusCode' => 400,
                'message' => 'The fields were not all supplied.'
            )
        );
    }
} catch (Exception $e) {
    handleError($e);
} finally {
    $conn->close();
}
