<?php

@include 'config.php';

if(isset($_POST['register'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];
   $phone = $_POST['phone'];
   $user_type = 'customer';

   $select = " SELECT * FROM login_details WHERE username = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO login_details(name, username, password, phone, usertype) VALUES('$name','$email','$pass','$phone','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form');
      }
   }

};


?>