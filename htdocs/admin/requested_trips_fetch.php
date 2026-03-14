<?php 
    include '../config.php';
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }
// Fetch data from the database
$sql = "SELECT id, name, phone, email, type, pickup, drop_location, cartype, status, date FROM requested_trips WHERE status = 'request'"; // Replace with your table name
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


