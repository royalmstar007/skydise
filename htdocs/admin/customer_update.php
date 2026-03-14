<?php
include '../config.php';

// if(isset($_POST["updatedata"])){
        
        $uname = $_POST['uname'];
        $uphone   = $_POST['uphone'];
        $uemail  = $_POST['uemail'];
        $uid = $_POST['uid'];
        $vc_number = $_POST['vc_number'];
        $dl_number = $_POST['dl_number'];
        $cartype = $_POST['cartype'];
        // echo '<script> alert("'.$uname.'"); </script>';
        // echo '<script> alert("'.$uphone.'"); </script>';
        // echo '<script> alert("'.$uemail.'"); </script>';
        // echo '<script> alert("'.$uid.'"); </script>';
        $queryupd = "UPDATE customers SET name = '$uname', phone ='$uphone', email ='$uemail', vc_number ='$vc_number', dl_number ='$dl_number', cartype = '$cartype' WHERE id = '$uid'";
        $query_runinv = mysqli_query($conn,$queryupd);
        if($query_runinv){
            header('Location:manage_customer');
        }
        else{
         echo '<script> alert("Data Not saved"); </script>';
        }
// }
?>