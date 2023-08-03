<?php

require(__DIR__ . '/../../inc/config.php');
require('helper_functions.php');

try {
    // check db first
    checkDatabaseAndCreate();

    // create connection
    $conn = new mysqli('localhost', 'root', '', DB_NAME);
    $query = $conn->prepare('SELECT * FROM ' . ROOM_LIST);

    if ($query->execute()) {
        $result = $query->get_result();
        $rooms = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        throw new Exception();
    }
} catch (Exception $e) {
    //throw $th;
} catch (Throwable $th) {
    // echo $th->getMessage();
} finally {
    $conn->close();
}