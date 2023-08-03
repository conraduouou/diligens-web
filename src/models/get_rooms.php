<?php

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

        header('Content-Type: application/json');

        echo json_encode(
            array(
                'statusCode' => 200,
                'body' => $rooms
            )
        );
    } else {
        throw new Exception();
    }
} catch (Exception $e) {
    //throw $th;
    handleServerError();
} catch (Throwable $th) {
    // echo $th->getMessage();
    handleServerError();
} finally {
    $conn->close();
}