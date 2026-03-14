<?php
    $conn=new mysqli('localhost','root','','admin_panel');

    if(!$conn)
    {
        die(mysqli_error($conn));
    }
?>