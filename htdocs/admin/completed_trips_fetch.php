<?php 
    include '../config.php';
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }
// Fetch data from the database
$sql = "SELECT ride_no, name, phone, email, type, pickup, drop_location, cartype, total_amount, driver_name, vc_number, status, date FROM trip WHERE status = 'Completed'"; // Replace with your table name
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the connection
$conn->close();

// Output data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>


