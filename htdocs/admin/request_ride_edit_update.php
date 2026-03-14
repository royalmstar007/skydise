<?php
include '../config.php';

// if(isset($_POST["updatedata"])){
        
        $ride_no = $_POST['ride_no'];
        $status   = $_POST['status'];
        $id  = $_POST['id'];
        // $uid = $_POST['uid'];
        // echo '<script> alert("'.$uname.'"); </script>';
        // echo '<script> alert("'.$uphone.'"); </script>';
        // echo '<script> alert("'.$uemail.'"); </script>';
        // echo '<script> alert("'.$uid.'"); </script>';
        $queryupd = "UPDATE trip SET ride_no = '$ride_no', status ='$status' WHERE id = '$id'";
        $query_runinv = mysqli_query($conn,$queryupd);
        if($query_runinv){
            header('Location:scheduled_trips');
        }
        else{
         echo '<script> alert("Data Not saved"); </script>';
        }
// }
?>