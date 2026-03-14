<?php 
    include '../config.php';

$cid = $_POST['cid'];

$sql = "SELECT name, phone, email FROM customers WHERE id = '$cid'"; // Replace with your table name
$result = mysqli_query($conn, $sql);
        $res = mysqli_fetch_array($result);
            $output["name"] = $res["name"];
            $output["email"] = $res["email"];
            $output["phone"] = $res["phone"];
            
echo json_encode($output);
?>


