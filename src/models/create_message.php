<?php

echo 'here';
// Check db
include('create_db.php');
// Create connection
$conn = new mysqli('localhost', 'root', '', 'diligens_web');

// Input message;
if (!$_POST["name"] == null) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $num = $_POST["mobile"];
  $company = $_POST["company"];
  $message = $_POST["message"];

  $query = $conn->prepare("INSERT INTO `message_list`(`name`, `email`, `number`, `company`, `message`) VALUES (?, ?, ?, ?, ?)");
  $query->bind_param("sssss", $name, $email, $num, $company, $message);
  if ($query->execute()) {
  }
}

$conn->close();
?>