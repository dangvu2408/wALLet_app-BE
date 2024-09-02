<?php
    require "databaseConnect.php";

    $username = $_POST['usernameSignin'];

    $query = "SELECT * FROM userlogin WHERE username='$username'";
    
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Already";
    } else {
        echo "Nonalready";
    }

?>