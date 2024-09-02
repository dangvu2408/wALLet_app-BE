<?php
    require "databaseConnect.php";

    $username = $_POST['usernameKey'];

    $query = "SELECT * FROM userdatas WHERE userid='$username'";
    $result = mysqli_query($connect, $query);

    $arrayUseTrans = array();

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $arrayUseTrans[] = array(
                "mainType" => $row['mainType'],
                "type" => $row['type'],
                "money" => $row['money'],
                "date" => $row['date'],
                "description" => $row['description'],
                "userid" => $row['userid'],
                "userfullname" => $row['userfullname'],
                "idtransaction" => $row['id_transaction']
            );
        }
        echo json_encode($arrayUseTrans);
    } else {
        echo "Error";
    }
?>
