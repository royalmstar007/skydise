<?php
// Database connection details
// $host = "your_host";
// $username = "your_username";
// $password = "your_password";
// $database = "your_database";

// // Create a database connection
// $conn = new mysqli($host, $username, $password, $database);
include '../config.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data from the AJAX request
// $name = $_POST['name'];
// $email = $_POST['email'];
$status=0;
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$ride_no=$_POST['ridenumber'];
$pickup=$_POST['pickup'];
$drop=$_POST['drop'];

$driver=$_POST['driver'];
$cartype=$_POST['cartype'];
$vehicleNumber=$_POST['vcnumber'];

$drop_date=date('y-m-d', strtotime($_POST['drop_date']));
$date=date('y-m-d', strtotime($_POST['date']));
$trip_type=$_POST['type'];

$trip_price=$_POST['trip_price'];
$toll=$_POST['toll'];
$tax=$_POST['tax'];

$sub_total=$_POST['sub_total'];
$bata=$_POST['bata'];
$total_amount=$_POST['total_amount'];

$pay_mode=$_POST['pay_mode'];
$pay_status=$_POST['pay_status'];
// $vehicleNumber=$_POST['vcnumber'];

$status='completed';

// Insert data into the database table
$sql = "INSERT INTO trip (name,phone,email,ride_no,pickup,drop_location,driver_name,cartype,vc_number,date,drop_date,type,trip_price,toll,tax,sub_total,bata,total_amount,pay_mode,pay_status,status) VALUES ('$name','$phone','$email','$ride_no','$pickup','$drop','$driver','$cartype','$vehicleNumber','$date','$drop_date','$trip_type','$trip_price','$toll','$tax','$sub_total','$bata','$total_amount','$pay_mode','$pay_status','$status')";

if (mysqli_query($conn, $sql)) {
    $status=200;
    }
    else{
        $status=400;
    }
    $output["status"] =$status; //$update;
    echo json_encode($status);
// if ($conn->query($sql)) {
//   header('Location:scheduled_trip');
//   // $response = '700';
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
//$output["response"] =$response; //$update;
// echo json_encode($response);
// Close the database connection
// $conn->close();
?>
