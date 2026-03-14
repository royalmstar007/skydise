<?php
include '../config.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$status=0;
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$ride_no=$_POST['ride_no'];
$pickup=$_POST['pickup'];
$drop=$_POST['drop'];

$driver=$_POST['driver'];
$cartype=$_POST['cartype'];
$vehicleNumber=$_POST['vc_number'];

$total_amount=$_POST['total_amount'];
$date=date('y-m-d', strtotime($_POST['date']));
$drop_date=date('y-m-d', strtotime($_POST['drop_date']));
$trip_type=$_POST['type'];

$trip_price=$_POST['trip_price'];
$toll=$_POST['toll'];
$tax=$_POST['tax'];

$sub_total=$_POST['sub_total'];
$bata=$_POST['bata'];
$pay_mode=$_POST['pay_mode'];
$pay_status=$_POST['pay_status'];

// $status=$_POST['status'];

// Insert data into the database table
$sql = "UPDATE trip SET name ='$name', phone = '$phone', email = '$email', pickup = '$pickup', drop_location = '$drop', driver_name = '$driver', cartype = '$cartype', vc_number = '$vehicleNumber', date = '$date', total_amount = '$total_amount', type = '$trip_type', drop_date = '$drop_date', trip_price = '$trip_price', toll = '$toll', tax = '$tax', sub_total = '$sub_total', bata = '$bata', pay_mode = '$pay_mode', pay_status = '$pay_status' WHERE ride_no = '$ride_no'";

if (mysqli_query($conn, $sql)) {
    $status=200;
    }
    else{
        $status=400;
    }
    $output["status"] =$status; //$update;
    echo json_encode($status);

?>
