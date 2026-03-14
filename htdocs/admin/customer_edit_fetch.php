<?php 
    include '../config.php';
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }
$staff_id = $_POST['staff_id'];
// Fetch data from the database
$sql = "SELECT * FROM customers WHERE id = '$staff_id'"; // Replace with your table name
$result = mysqli_query($conn, $sql);
        $res = mysqli_fetch_array($result);
            $output["id"] = $res["id"];
            $output["name"] = $res["name"];
            $output["phone"] = $res["phone"];
            $output["email"] = $res["email"];
            $output["vc_number"] = $res["vc_number"];
            $output["dl_number"] = $res["dl_number"];
            $output["cartype"] = $res["cartype"];
        
        echo json_encode($output);
?>


