<?php
    $conn = new mysqli('localhost', 'root', '');
    $query = $conn->prepare("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'diligens_web'");
    $query->execute();
    $result = $query->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);
    
    if ($row == null){
        $conn->query("CREATE DATABASE IF NOT EXISTS diligens_web");
        $conn->query("CREATE TABLE `diligens_web`.`appointment_list` (`id` VARCHAR(50) NULL DEFAULT NULL , `name` VARCHAR(50) NULL DEFAULT NULL , `email` VARCHAR(50) NULL DEFAULT NULL , `number` INT(50) NULL DEFAULT NULL , `company` VARCHAR(50) NULL DEFAULT NULL , `room-type` VARCHAR(50) NULL DEFAULT NULL , `date` DATE NULL DEFAULT NULL ) ENGINE = InnoDB");
    }

    $conn->close()
?>