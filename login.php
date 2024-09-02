<?php
    require "databaseConnect.php";

    $username = $_POST['usernameSignin'];
    $password = $_POST['passwordSignin'];

    $query = "SELECT * FROM userlogin WHERE username='$username' AND password='$password'";
    
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Success";
    } else {
        echo "Error";
    }

?>