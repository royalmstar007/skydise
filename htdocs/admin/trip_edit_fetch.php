<?php 
    include '../config.php';
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }
$ride_no = $_POST['ride_no'];
// Fetch data from the database
$sql = "SELECT * FROM trip WHERE ride_no = '$ride_no'"; // Replace with your table name
$result = mysqli_query($conn, $sql);
        $res = mysqli_fetch_array($result);
            $output["ride_no"] = $res["ride_no"];
            $output["name"] = $res["name"];
            $output["phone"] = $res["phone"];
            $output["email"] = $res["email"];
            $output["pickup"] = $res["pickup"];
            $output["drop_location"] = $res["drop_location"];
            $output["driver_name"] = $res["driver_name"];
            $output["type"] = $res["type"];
            $output["cartype"] = $res["cartype"];
            $output["vc_number"] = $res["vc_number"];
            $output["date"] = $res["date"];
            $output["drop_date"] = $res["drop_date"];
            $output["trip_price"] = $res["trip_price"];
            $output["bata"] = $res["bata"];
            $output["toll"] = $res["toll"];
            $output["tax"] = $res["tax"];
            $output["sub_total"] = $res["sub_total"];
            $output["total_amount"] = $res["total_amount"];
            $output["pay_mode"] = $res["pay_mode"];
            $output["pay_status"] = $res["pay_status"];
            $output["status"] = $res["status"];
        
        echo json_encode($output);
?>


