<?php
 // Create connection
 $conn = new mysqli('localhost', 'root', '', 'diligens_web');

 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);

    // Create database
 $sql = "CREATE DATABASE diligens_web";
 if ($conn->query($sql) === TRUE) {

    // Create Appoinment List Table
    $conn->query("CREATE TABLE `diligens_web`.`appointment_list` (`id` VARCHAR(50) NULL DEFAULT NULL , `name` VARCHAR(50) NULL DEFAULT NULL , `email` VARCHAR(50) NULL DEFAULT NULL , `number` INT(50) NULL DEFAULT NULL , `company` VARCHAR(50) NULL DEFAULT NULL , `room-type` VARCHAR(50) NULL DEFAULT NULL , `date` DATE NULL DEFAULT NULL ) ENGINE = InnoDB");   //
    echo "Database created successfully";
 } else {
   echo "Error creating database: " . $conn->error;
 }
 }else{
    // Check for Id
    $id;
    $query = $conn->prepare("SELECT id FROM `appointment_list` ORDER BY id DESC LIMIT 1");
    if ($query->execute()){
      $maxid;
        $max = $query->get_result();
        $row = $max->fetch_array(MYSQLI_ASSOC);
        if(!$row == null){
         if($maxid = $row["id"]){
            $id = $maxid + 1;
           }
        }
        else $id = 1;
      }

    // Input Appointment;
    if(!$_POST["name"] == null){
      $name = $_POST["name"];
      $email = $_POST["email"];
      $num = $_POST["number"];
      $company = $_POST["company"];
      $room = $_POST["room-type"];
      $date = $_POST["date"];

      $query = $conn->prepare("INSERT INTO `appointment_list`(`id`, `name`, `email`, `number`, `company`, `room-type`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?)");
      $query->bind_param("sssssss", $id, $name, $email, $num, $company, $room, $date);
      if ($query->execute()){
      }
   }
 }
 
 $conn->close()
?>