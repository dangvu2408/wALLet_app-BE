<?php
    require "databaseConnect.php";

    $username = $_POST['usernameKey'];

    $query = "SELECT * FROM userlogin WHERE username='$username'";
    $result = mysqli_query($connect, $query);

    $arrayUser = array();

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $arrayUser[] = array(
                "username" => $row['username'],
                "password" => $row['password'],
                "fullname" => $row['fullname'],
                "dob" => $row['dob'],
                "gender" => $row['gender']
            );
        }
        echo json_encode($arrayUser);
    } else {
        echo "Error";
    }
?>
