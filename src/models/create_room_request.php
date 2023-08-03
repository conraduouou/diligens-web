<?php

require('helper_functions.php');

try {
  // check db first
  checkDatabaseAndCreate();

  // Create connection
  $conn = new mysqli('localhost', 'root', '', 'diligens_web');

  // Check for Id
  $id;
  $query = $conn->prepare("SELECT id FROM `appointment_list` ORDER BY id DESC LIMIT 1");
  if ($query->execute()) {
    $maxid;
    $max = $query->get_result();
    $row = $max->fetch_array(MYSQLI_ASSOC);
    if (!$row == null) {
      $maxid = $row["id"];
      $id = $maxid + 1;
    } else
      $id = 1;
  }

  // Input Appointment;
  if (!$_POST["name"] == null) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $num = $_POST["number"];
    $company = $_POST["company"];
    $room = $_POST["room-type"];
    $date = $_POST["date"];

    $query = $conn->prepare("INSERT INTO `appointment_list`(`id`, `name`, `email`, `number`, `company`, `room-type`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query->bind_param("sssssss", $id, $name, $email, $num, $company, $room, $date);
    if ($query->execute()) {
    }
  }
} catch (Exception $e) {
  handleError($e);
} finally {
  $conn->close();
}

?>