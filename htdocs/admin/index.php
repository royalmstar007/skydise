<?php

@include '../config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:../login_form');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydise</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <style>
      .rectangle-box {
      width: 200px;
      height: 100px;
      border: 2px solid #333;
      text-align: center;
      position: relative;
      background-color: black;
    }
    .rectangle-second-box {
      width: 200px;
      height: 100px;
      border: 2px solid #333;
      text-align: center;
      position: relative;
      margin-left: 400px;
      margin-top: -100px;
      background-color: black;
    }
    .rectangle-third-box {
      width: 200px;
      height: 100px;
      border: 2px solid #333;
      text-align: center;
      position: relative;
      margin-left: 750px;
      margin-top: -100px;
      background-color: black;
    }
    .rectangle-fourth-box {
      width: 200px;
      height: 100px;
      border: 2px solid #333;
      text-align: center;
      position: relative;
      margin-left: 2px;
      margin-top: 100px;
      background-color: black;
    }
    .rectangle-fifth-box {
      width: 200px;
      height: 100px;
      border: 2px solid #333;
      text-align: center;
      position: relative;
      margin-left: 406px;
      margin-top: -100px;
      background-color: black;
    }
    .rectangle-sixth-box {
      width: 200px;
      height: 100px;
      border: 2px solid #333;
      text-align: center;
      position: relative;
      margin-left: 750px;
      margin-top: -100px;
      background-color: black;
    }
    /* Style for the text above the box */
    .box-text {
      position: absolute;
      top: -20px; /* Adjust the distance from the top as needed */
      left: 50%;
      transform: translateX(-50%);
      font-size: 17px;
      width: max-content;
      font-weight: 800;
    }

    /* Style for the number in the center of the box */
    .box-number {
      line-height: 100px; /* Should match the height of the box */
      font-size: 29px;
      font-family: fantasy;
    }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include "sidebar.php";?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include "sidemenu.php";?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <h3 class="page-title" style="margin-left: 450px; font-size: 30px;">Dashboard</h3>
              <!-- <h3 class="page-title"> Form elements </h3> -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <!-- <li class="breadcrumb-item"><a href="#">customer</a></li>
                  <li class="breadcrumb-item active" aria-current="page">create new customer</li> -->
                </ol>
              </nav>
            </div>
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="container mt-5" style="margin-top: 0.1rem !important;">
              <div class="rectangle-box">
                <div class="box-text text-dark">TOTAL TRIPS</div>
                <?php
                    @include '../config.php';
                    $tot_trips = "SELECT MAX(id) AS max_id FROM trip";
                    $tot_trips1 = $conn->query($tot_trips);
                    if ($tot_trips1->num_rows > 0) {
                      $row_trips = $tot_trips1->fetch_assoc();
                      $max_id1 = $row_trips["max_id"];
                    } else {
                        echo "0 results";
                    }
                ?>
                <div class="box-number text-light"><?php echo $max_id1; ?></div>
              </div>
              <div class="rectangle-second-box">
                <div class="box-text text-dark">TOTAL EARNINGS</div>
                <?php
                    // @include '../config.php';
                    $tot_earned = "SELECT SUM(total_amount) AS max_id2 FROM trip";
                    $tot_earned2 = $conn->query($tot_earned);
                    if ($tot_earned2->num_rows > 0) {
                      $row_earns = $tot_earned2->fetch_assoc();
                      $max_id2 = $row_earns["max_id2"];
                    } else {
                        echo "0 results";
                    }
                ?>
                <div class="box-number text-light"><?php echo $max_id2; ?></div>
              </div>
              <div class="rectangle-third-box">
                <div class="box-text text-dark">TOTAL VEHICLES</div>
                <?php
                    // @include '../config.php';
                    $tot_cars = "SELECT MAX(id) AS max_id3 FROM customers";
                    $tot_cars2 = $conn->query($tot_cars);
                    if ($tot_cars2->num_rows > 0) {
                      $row_cars = $tot_cars2->fetch_assoc();
                      $max_id3 = $row_cars["max_id3"];
                    } else {
                        echo "0 results";
                    }
                ?>
                <div class="box-number text-light"><?php echo $max_id3; ?></div>
              </div>
              <div class="rectangle-fourth-box">
                <div class="box-text text-dark">TOTAL DRIVERS</div>
                <div class="box-number text-light"><?php echo $max_id3; ?></div>
              </div>
              <div class="rectangle-fifth-box">
                <div class="box-text text-dark">TOTAL CUSTOMERS</div>
                <?php
                    // @include '../config.php';
                    $tot_riders = "SELECT MAX(id) AS max_id5 FROM riders";
                    $tot_riders2 = $conn->query($tot_riders);
                    if ($tot_riders2->num_rows > 0) {
                      $row_riders = $tot_riders2->fetch_assoc();
                      $max_id5 = $row_riders["max_id5"];
                    } else {
                        echo "0 results";
                    }
                ?>
                <div class="box-number text-light"><?php echo $max_id5; ?></div>
              </div>
              <div class="rectangle-sixth-box">
                <div class="box-text text-dark">TOTAL BOOKINGS</div>
                <div class="box-number text-light"><?php echo $max_id1; ?></div>
              </div>
                </div>
              </div>
            </div>
          </div>
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>