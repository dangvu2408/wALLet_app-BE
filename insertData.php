<?php
    require "databaseConnect.php";

    $username = $_POST['usernameSignin'];
    $password = $_POST['passwordSignin'];
    $fullname = $_POST['fullnameSignin'];
    $dob = $_POST['dobSignin'];
    $gender = $_POST['genderSignin'];


    $query = "INSERT INTO userlogin VALUES('$username', '$password', '$fullname', '$dob', '$gender')";
    if (mysqli_query($connect, $query)) {
        echo "Success";
    } else {
        echo "Error";
    }
?>