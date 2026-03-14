<?php 
    include '../config.php';
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }
        // echo '<script>alert("' . $userInput. '");</script>';
        
//         $sql = "SELECT * FROM customers";
//         $result = mysqli_query($conn,$sql);
//         while($rowd = mysqli_fetch_array($result)) {
//             echo "<tr>";
//             echo    "<th class='text-center'>" . $rowd['id'] . "</th>";
//             echo    "<th class='text-center'>" . $rowd['name'] . "</th>";
//             echo    "<th class='text-center'>" . $rowd['phone'] . "</th>";
//             echo    "<th class='text-center'>" . $rowd['email'] . "</th>";
//             echo    "<th class='text-center'><button>Edit</button></th>";
//             echo "</tr>";
            
//         }
// >
// Fetch data from the database
$sql = "SELECT id, name, phone, email, vc_number, cartype FROM customers"; // Replace with your table name
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


