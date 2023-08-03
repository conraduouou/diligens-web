<?php

function handleError(Exception $e)
{
    // echo $e->getMessage();
    header('Content-Type: application/json');

    echo json_encode(
        array(
            'statusCode' => 500,
            'message' => $e->getMessage() != "" ? 'There was an error on our end. Please try again later.' : $e->getMessage()
        )
    );
}

function checkDatabaseAndCreate()
{
    include('create_db.php');
}
