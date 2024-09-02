<?php
    require "databaseConnect.php";

    $query = "SELECT * FROM userlogin";
    $data = mysqli_query($connect, $query);
    


    class user {
        public $username, $password, $fullname, $dob, $gender;
        function __construct($username, $password, $fullname, $dob, $gender) {
            $this -> username = $username;
            $this -> password = $password;
            $this -> fullname = $fullname;
            $this -> dob = $dob;
            $this -> gender = $gender;
        }

    }

    $arrayUser = array();
    while ($row = mysqli_fetch_assoc($data)) {
        array_push($arrayUser, new user($row['username'], $row['password'], $row['fullname'], $row['dob'], $row['gender']));
    }
    echo json_encode($arrayUser);
?>