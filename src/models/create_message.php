<?php

// Check db
include('create_db.php');

try {
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
    throw new Exception('Incomplete values were supplied');
  }
} catch (Exception $e) {
  // echo $e->getMessage();
  header('Content-Type: application/json');

  echo json_encode(
    array(
      'statusCode' => 500,
      'message' => $e->getMessage() != "" ? 'There was an error on our end. Please try again later.' : $e->getMessage()
    )
  );
} finally {
  $conn->close();
}
?>