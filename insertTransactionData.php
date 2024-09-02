<?php
    require "databaseConnect.php";

    $mainType = $_POST['insertMainType'];
    $type = $_POST['insertType'];
    $money = $_POST['insertMoney'];
    $date = $_POST['insertDate'];
    $description = $_POST['insertDescription'];
    $userid = $_POST['insertUserID'];
    $userfullname = $_POST['insertUserfullname'];
    


    $check_query = "SELECT * FROM userlogin WHERE username = '$userid'";
    $result = mysqli_query($connect, $check_query);

    if (mysqli_num_rows($result) > 0) {
        $query = "INSERT INTO userdatas (mainType, type, money, date, description, userid, userfullname) VALUES ('$mainType', '$type', '$money', '$date', '$description', '$userid', '$userfullname')";
        if (mysqli_query($connect, $query)) {
            echo "Success";
        } else {
            echo "Error";
        }
    } else {
        echo "Cannot find userid";
    }
?>