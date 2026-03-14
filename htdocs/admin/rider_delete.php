<?php
include '../config.php';

// if(isset($_POST["updatedata"])){
        
        $delid = $_POST['del_id'];
        $querydel = "DELETE FROM riders WHERE id = '$delid'";
        $query_runinv = mysqli_query($conn,$querydel);
        if($query_runinv){
            header('Location:manage_rider');
        }
        else{
         echo '<script> alert("Data Not saved"); </script>';
        }
// }
?>