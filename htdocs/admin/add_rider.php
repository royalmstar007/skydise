<?php
include '../config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$status=0;
$name = $_POST["name"];
$phone= $_POST["phone"];
$email = $_POST["email"];

// Insert data into the database table
$sql = "INSERT INTO riders (name, phone, email) VALUES ('$name', '$phone', '$email')";

if (mysqli_query($conn, $sql)) {
    $status=200;
    }
    else{
        $status=400;
    }
    $output["status"] =$status; //$update;
    echo json_encode($status);
?>
