<?php
    require "databaseConnect.php";
    
    $username = $_POST['usernameLogin'];
    
    $query = "
        SELECT userdatas.* 
        FROM userdatas 
        INNER JOIN userlogin 
        ON userdatas.userid = userlogin.username 
        WHERE userlogin.username = '$username'
    ";
    
    $result = mysqli_query($connect, $query);

    $arrayData = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $arrayData[] = array(
                "mainType" => $row['mainType'],
                "type" => $row['type'],
                "money" => $row['money'],
                "date" => $row['date'],
                "description" => $row['description'],
                "userid" => $row['userid'],
                "userfullname" => $row['userfullname']
            );
        }
        echo json_encode($arrayData);
    } else {
        echo "Error";
    }
?>
