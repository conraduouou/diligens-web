<?php

function handleServerError(Exception $e)
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

function handleClientError(Exception $e)
{
    // echo $e->getMessage();
    header('Content-Type: application/json');
    echo json_encode(
        array(
            'statusCode' => $e->getCode() != 0 ? $e->getCode() : 400,
            'message' => $e->getMessage() != "" ? 'There was an error making your request. Please make sure all required fields are filled.' : $e->getMessage()
        )
    );
}

function handleSuccess(string|null $message = null, int $code = 200)
{
    header('Content-Type: application/json');
    echo json_encode(
        array(
            'statusCode' => $code,
            'message' => isset($message) ? 'Request successful!' : $message
        )
    );
}

function checkDatabaseAndCreate()
{
    include('create_db.php');
}
