<?php
include '../config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$status=0;
$name = $_POST["name"];
$phone= $_POST["phone"];
$email = $_POST["email"];
$vc_number = $_POST["vc_number"];
$dl_number = $_POST["dl_number"];
$cartype = $_POST["cartype"];

// Insert data into the database table
$sql = "INSERT INTO customers (name, phone, email, vc_number, dl_number, cartype) VALUES ('$name', '$phone', '$email', '$vc_number', '$dl_number', '$cartype')";

if (mysqli_query($conn, $sql)) {
    $status=200;
    }
    else{
        $status=400;
    }
    $output["status"] =$status; //$update;
    echo json_encode($status);
?>
