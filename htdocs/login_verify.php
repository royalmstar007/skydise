<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   // $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];
   // $cpass = md5($_POST['cpassword']);
   // $user_type = $_POST['user_type'];

   $select = " SELECT * FROM login_details WHERE username = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['usertype'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['usertype'] = $row['usertype'];
         header('location:admin/index');

      }elseif($row['usertype'] == 'customer'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['usertype'] = $row['usertype'];
         $_SESSION['id'] = $row['id'];
         header('location:customer/index');

      }
     
   }else{
      echo '<script> alert("Incorrect Credentials"); </script>';
      header('location:login_form');
   }

};
?>