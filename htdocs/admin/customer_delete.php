<?php
include '../config.php';

// if(isset($_POST["updatedata"])){
        
        $delid = $_POST['del_id'];
        $querydel = "DELETE FROM customers WHERE id = '$delid'";
        $query_runinv = mysqli_query($conn,$querydel);
        if($query_runinv){
            header('Location:manage_customer');
        }
        else{
         echo '<script> alert("Data Not saved"); </script>';
        }
// }
?>