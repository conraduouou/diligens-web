<?php
// Check if db exist
$conn = new mysqli('localhost', 'root', '');
$query = $conn->prepare("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'diligens_web'");
$query->execute();
$result = $query->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

// If not ~ intiate and create db
if ($row == null) {
    $conn->query("CREATE DATABASE IF NOT EXISTS diligens_web");
    $conn->query("CREATE TABLE `diligens_web`.`appointment_list` (`id` VARCHAR(50) NULL DEFAULT NULL , `name` VARCHAR(50) NULL DEFAULT NULL , `email` VARCHAR(50) NULL DEFAULT NULL , `number` INT(50) NULL DEFAULT NULL , `company` VARCHAR(50) NULL DEFAULT NULL , `room-type` VARCHAR(50) NULL DEFAULT NULL , `date` DATE NULL DEFAULT NULL ) ENGINE = InnoDB");
    $conn->query("CREATE TABLE `diligens_web`.`message_list` (`name` VARCHAR(50) NULL DEFAULT NULL , `email` VARCHAR(50) NULL DEFAULT NULL , `mobile` VARCHAR(50) NULL DEFAULT NULL , `company` VARCHAR(50) NULL DEFAULT NULL , `message` VARCHAR(300) NULL DEFAULT NULL ) ENGINE = InnoDB");
    $conn->query("CREATE TABLE `diligens_web`.`admin_user_list` (`username` VARCHAR(50) NULL DEFAULT NULL , `password` VARCHAR(50) NULL DEFAULT NULL , `type` VARCHAR(50) NULL DEFAULT NULL ) ENGINE = InnoDB");
    $conn->query("INSERT INTO `admin_user_list`(`username`, `password`, `type`) VALUES ('admin','admin','admin')");
}

$conn->close();
?>