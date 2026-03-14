<?php 
    include '../config.php';
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }

$sql = "SELECT id, name, email, subject, message FROM contact_summary"; // Replace with your table name
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


