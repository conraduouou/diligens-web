<?php

try {
    require(__DIR__ . '/../../inc/config.php');
    require('helper_functions.php');

    // check db first
    checkDatabaseAndCreate();

    // Create connection
    $conn = new mysqli('localhost', 'root', '', DB_NAME);

    // Input message;
    if (isset($_POST['name'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $num = $_POST["mobile"];
        $company = $_POST["company"];
        $message = $_POST["message"];

        $query = $conn->prepare("INSERT INTO `" . MESSAGE_LIST . "`(`name`, `email`, `mobile`, `company`, `message`) VALUES (?, ?, ?, ?, ?)");
        $query->bind_param("sssss", $name, $email, $num, $company, $message);

        if ($query->execute()) {
            handleSuccess(
                code: 201,
                message: 'Message delivered! Please wait for an email by the team regarding your message.',
            );
        } else {
            throw new Exception();
        }
    } else {
        handleClientError(new Exception("The required fields were not all filled."));
    }
} catch (Exception $e) {
    handleServerError();
} catch (Throwable $e) {
    // echo $th->getMessage();
    handleServerError();
} finally {
    $conn->close();
}
