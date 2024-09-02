<?php
    require "databaseConnect.php";

    $id_transaction = $_POST['updateIDTrans'];
    $mainType = $_POST['updateMainTransType'];
    $type = $_POST['updateDetailsType'];
    $money = $_POST['updateMoney'];
    $date = $_POST['updateDate'];
    $description = $_POST['updateDes'];

    $query = "UPDATE userdatas SET mainType = '$mainType', type = '$type', money = '$money', date = '$date', description = '$description' WHERE id_transaction = '$id_transaction'";

    if (mysqli_query($connect, $query)) {
        echo "Success";
    } else {
        echo "Error";
    }

?>