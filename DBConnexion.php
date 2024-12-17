<?php 

$server_name = "localhost";
$user_name = "root";
$password = "";
$dataBase_name="Ultimate_Team";

    $conn = mysqli_connect($server_name, $user_name, $password, $dataBase_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
       
?>