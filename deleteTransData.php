<?php
    require "databaseConnect.php";

    $id_transaction = $_POST['deleteIDTrans'];

    $query = "DELETE FROM userdatas WHERE id_transaction = '$id_transaction'";

    if (mysqli_query($connect, $query)) {
        echo "Success";
    } else {
        echo "Error";
    }

?>