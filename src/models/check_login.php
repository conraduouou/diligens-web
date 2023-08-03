<?php

try {
    require(__DIR__ . '/../../inc/config.php');
    require('helper_functions.php');
    
    // check db first
    checkDatabaseAndCreate();

    // Create connection
    $conn = new mysqli('localhost', 'root', '', DB_NAME);

    // Check if filled
    if (!isset($_POST["username"]) || !isset($_POST["password"])) {
        handleClientError(new Exception(
            message: 'Required fields were not all filled.',
            code: 400,
        ));

        return;
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cookie_name = $username;
    $cookie_role;

    if (!$conn) {
        throw new Exception(message: 'Could not connect to server.');
    } else {
        $query = $conn->prepare("SELECT COUNT(*) FROM `" . ADMIN_USER_LIST . "` WHERE username = ? AND password = ?");
        $query->bind_param("ss", $username, $password);
        if ($query->execute()) {
            $result = $query->get_result();
            $match = $result->fetch_array(MYSQLI_ASSOC);
            if ($match["COUNT(*)"] == 1) {
                $query = $conn->prepare("SELECT * FROM `" . ADMIN_USER_LIST . "` WHERE username = ? AND password = ?");
                $query->bind_param("ss", $username, $password);
                if ($query->execute()) {
                    $result = $query->get_result();
                    $match = $result->fetch_array(MYSQLI_ASSOC);
                    $cookie_role = $match["type"];
                    setcookie("user", $cookie_name, time() + (86400 * .5), "/"); // 86400 = 1 day
                    setcookie("role", $cookie_role, time() + (86400 * .5), "/"); // 86400 = 1 day
                }
                //if match found do the following:
                //echo '<script>window.location.replace("");</script>';
                echo "confirm('valid credentials')";
            } else if ($match["COUNT(*)"] == 0) {
                //if match not found do the following:
                echo "confirm('invalid credentials')";
                //echo '<script>window.location.replace("/diligens-web/src/models/create_message.php");</script>';
            }
        } else {
            throw new Exception();
        }

        // $query = $conn->prepare("SELECT * FROM `" . ADMIN_USER_LIST . "` WHERE username = ? AND password = ?");
        // $query->bind_param("ss", $username, $password);
        // if ($query->execute()) {
        //     $result = $query->get_result();
        //     $match = $result->fetch_array(MYSQLI_ASSOC);

        //     if (!isset($match)) {
        //         handleClientError(new Exception(message: 'Invalid credentials.', code: 400));
        //         return;
        //     }

        //     $cookie_role = $match["type"];
        //     setcookie("user", $cookie_name, time() + (86400 * .5), "/"); // 86400 = 1 day
        //     setcookie("role", $cookie_role, time() + (86400 * .5), "/"); // 86400 = 1 day
        // } else {
        //     throw new Exception();
        // }
    }
} catch (Exception $e) {
    handleServerError($e);
} finally {
    $conn->close();
}
