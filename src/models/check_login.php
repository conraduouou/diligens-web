<?php
    $conn = new mysqli('localhost', 'root', '', 'diligens_web');
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cookie_name = $username;
    $cookie_role;

    if(!$conn){
        die('Could not Connect MySql Server');
        }else{
            $query = $conn->prepare("SELECT COUNT(*) FROM `admin_user_list` WHERE username = ? AND password = ?");
            $query->bind_param("ss", $username, $password);
            if ($query->execute()){
                $result = $query->get_result();
                $match = $result->fetch_array(MYSQLI_ASSOC);
                if($match["COUNT(*)"] == 1){
                    $query = $conn->prepare("SELECT * FROM `admin_user_list` WHERE username = ? AND password = ?");
                    $query->bind_param("ss", $username, $password);
                    if ($query->execute()){
                        $result = $query->get_result();
                        $match = $result->fetch_array(MYSQLI_ASSOC);
                        $cookie_role = $match["type"];
                        setcookie("user", $cookie_name, time() + (86400 * .5), "/"); // 86400 = 1 day
                        setcookie("role", $cookie_role, time() + (86400 * .5), "/"); // 86400 = 1 day
                    }
                    //if match found do the following:
                    //echo '<script>window.location.replace("");</script>';
                    echo "confirm('valid credentials')";
                }
                else if($match["COUNT(*)"] == 0){
                    //if match not found do the following:
                    echo "confirm('invalid credentials')";
                    //echo '<script>window.location.replace("/diligens-web/src/models/create_message.php");</script>';
                }
            }
    }
   
    mysqli_close($conn);
?>