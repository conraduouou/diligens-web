<?php

try {
    // Check if db exist
    $conn = new mysqli('localhost', 'root', '');
    $query = $conn->prepare("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '" . DB_NAME .  "'");
    $query->execute();
    $result = $query->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);

    // If not ~ intiate and create db

    // TODO: Handle data sending and loading states when data is sent from contact section and others
    // TODO: Create controllers and communicate with the database using the models
    if (!isset($row)) {
        $conn->query("CREATE DATABASE IF NOT EXISTS " . DB_NAME);

        $conn->select_db(DB_NAME);

        $conn->query("CREATE TABLE `" . ROOM_REQUEST_LIST . "` (`id` INT(50) NULL DEFAULT NULL , `name` VARCHAR(50) NULL DEFAULT NULL , `email` VARCHAR(50) NULL DEFAULT NULL , `number` VARCHAR(50) NULL DEFAULT NULL , `company` VARCHAR(50) NULL DEFAULT NULL , `room_id` INT(50) NULL DEFAULT NULL , `date` DATE NULL DEFAULT NULL ) ENGINE = InnoDB");
        $conn->query("CREATE TABLE `" . MESSAGE_LIST . "` (`name` VARCHAR(50) NULL DEFAULT NULL , `email` VARCHAR(50) NULL DEFAULT NULL , `mobile` VARCHAR(50) NULL DEFAULT NULL , `company` VARCHAR(50) NULL DEFAULT NULL , `message` VARCHAR(300) NULL DEFAULT NULL ) ENGINE = InnoDB");
        $conn->query("CREATE TABLE `" . ADMIN_USER_LIST . "` (`username` VARCHAR(50) NULL DEFAULT NULL , `password` VARCHAR(50) NULL DEFAULT NULL , `type` VARCHAR(50) NULL DEFAULT NULL ) ENGINE = InnoDB");
        $conn->query("CREATE TABLE `" . ROOM_LIST . "` (`id` INT(50) NULL DEFAULT NULL AUTO_INCREMENT KEY , `type` VARCHAR(50) NULL DEFAULT NULL , `cost` DECIMAL(50) NULL DEFAULT NULL , `media` VARCHAR(50) NULL DEFAULT NULL , `capacity_min` INT(50) NULL DEFAULT NULL, `capacity_max` INT(50) NULL DEFAULT NULL)");
        $conn->query("INSERT INTO `" . ADMIN_USER_LIST . "` (`username`, `password`, `type`) VALUES ('admin','admin','admin')");
        $conn->query("INSERT INTO `" . ROOM_LIST . "` (`type`, `cost`, `media`, `capacity_min`, `capacity_max`) VALUES ('A', '1800', 'projector', '18', '20')");
    }
} catch (Exception $e) {
    // echo $e->getMessage();
    throw $e;
} catch (Throwable $e) {
    // echo $e->getMessage();
    throw $e;
} finally {
    $conn->close();
}
