<?php

try {
  // Check if db exist
  $conn = new mysqli('localhost', 'root', '');
  $query = $conn->prepare("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'diligens_web'");
  $query->execute();
  $result = $query->get_result();
  $row = $result->fetch_array(MYSQLI_ASSOC);

  // If not ~ intiate and create db

  // TODO: Delete database in localhost and recreate with new parameters
  // TODO: Handle data sending and loading states when data is sent from contact section and others
  // TODO: Create controllers and communicate with the database using the models
  if (!isset($row)) {
    $conn->query("CREATE DATABASE IF NOT EXISTS diligens_web");

    // make this into room_requests (?)
    $conn->query("CREATE TABLE `diligens_web`.`appointment_list` (`id` INT(50) NULL DEFAULT NULL , `name` VARCHAR(50) NULL DEFAULT NULL , `email` VARCHAR(50) NULL DEFAULT NULL , `number` INT(50) NULL DEFAULT NULL , `company` VARCHAR(50) NULL DEFAULT NULL , `room_id` VARCHAR(50) NULL DEFAULT NULL , `date` DATE NULL DEFAULT NULL ) ENGINE = InnoDB");

    $conn->query("CREATE TABLE `diligens_web`.`message_list` (`name` VARCHAR(50) NULL DEFAULT NULL , `email` VARCHAR(50) NULL DEFAULT NULL , `mobile` VARCHAR(50) NULL DEFAULT NULL , `company` VARCHAR(50) NULL DEFAULT NULL , `message` VARCHAR(300) NULL DEFAULT NULL ) ENGINE = InnoDB");

    $conn->query("CREATE TABLE `diligens_web`.`admin_user_list` (`username` VARCHAR(50) NULL DEFAULT NULL , `password` VARCHAR(50) NULL DEFAULT NULL , `type` VARCHAR(50) NULL DEFAULT NULL ) ENGINE = InnoDB");

    $conn->query("CREATE TABLE `diligens_web`.`rooms_list` (`id` INT(50) NULL DEFAULT NULL , `type` VARCHAR(50) NULL DEFAULT NULL , `cost` DECIMAL(50) NULL DEFAULT NULL , `media` VARCHAR(50) NULL DEFAULT NULL , `capacity` INT(50) NULL DEFAULT NULL)");

    $conn->query("INSERT INTO `diligens_web`.`admin_user_list`(`username`, `password`, `type`) VALUES ('admin','admin','admin')");
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