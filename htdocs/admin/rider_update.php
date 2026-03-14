<?php
include '../config.php';

// if(isset($_POST["updatedata"])){
        
        $uname = $_POST['uname'];
        $uphone   = $_POST['uphone'];
        $uemail  = $_POST['uemail'];
        $uid = $_POST['uid'];
        // echo '<script> alert("'.$uname.'"); </script>';
        // echo '<script> alert("'.$uphone.'"); </script>';
        // echo '<script> alert("'.$uemail.'"); </script>';
        // echo '<script> alert("'.$uid.'"); </script>';
        $queryupd = "UPDATE riders SET name = '$uname', phone ='$uphone', email ='$uemail' WHERE id = '$uid'";
        $query_runinv = mysqli_query($conn,$queryupd);
        if($query_runinv){
            header('Location:manage_rider');
        }
        else{
         echo '<script> alert("Data Not saved"); </script>';
        }
// }
?>