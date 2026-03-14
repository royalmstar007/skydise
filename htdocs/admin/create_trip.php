<?php

@include '../config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:../login_form');
}
$date = date("d");
$month = date("m");
$year = date("y");

// SQL query to select the max ID
$sql = "SELECT MAX(id) AS max_id FROM trip";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    $row = $result->fetch_assoc();
    $maxId = $row["max_id"];
    $maxId++;
}
$result = $month . $year . $maxId;
// echo "<script>alert('$result');</script>";
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
      label{
        color: blueviolet;
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
          <h3 class="page-title" style="margin-left: 450px; font-size: 30px;">Create Trips</h3>
          <div class="container mt-5">
   <!-- <h2>Travel Agency Point of Sale</h2>-->
<form id="myForm">
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="ridenumber">Ride Number</label>
          <input type="text" class="form-control" name="ridenumber" value="<?php echo $result;?>" id="ridenumber" readOnly placeholder="Ride Number" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="pickup">Pickup</label>
          <input type="text" class="form-control" name="pickup" id="pickup" placeholder="Enter Pickup Location">
        </div>
        <div class="col-md-4 mb-3">
          <label for="drop">Drop</label>
          <input type="text" class="form-control" name="drop" id="drop" placeholder="Enter Drop Location">
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="name">Rider Name</label>
          <!--<input type="text" class="form-control" name="name" id="name" placeholder="Enter Rider Name">-->
          <select class="form-select form-control" name="name" id="name">
          <option value="0">Select Rider</option>
            <?php
            // Query to select all customers from the 'customers' table
            $sql = "SELECT id, name, phone, email FROM riders";
            $result = $conn->query($sql);

            // Check if there are rows in the result
            if ($result->num_rows > 0) {
                // Loop through each row and create an option for each customer
                while ($row = $result->fetch_assoc()) {
                    $rider_id = $row["id"];
                    $rider_name = $row["name"];
                    $phone = $row["phone"];
                    $email = $row["email"];
                    echo "<option value='$rider_name' data-id='$rider_id' data-phone='$phone' data-email='$email'>$rider_name</option>";
                }
            } else {
                echo "<option value=''>No customers found</option>";
            }

            // Close the database connection
            // $conn->close();
            ?>
            </select>
        </div>
        <div class="col-md-4 mb-3">
          <label for="phone">Phone no</label>
          <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
        </div>
        <div class="col-md-4 mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="driver">Select Driver</label>
          <!--<input type="text" class="form-control" name="driver" id="driver" placeholder="Driver Name" required>-->
          <select class="form-select form-control" name="driver" id="driver">
          <option value="0">Select Driver</option>
            <?php
            // require "../config.php";
            // Query to select all customers from the 'customers' table
            $sql2 = "SELECT id, name, cartype, vc_number FROM customers";
            $result2 = $conn->query($sql2);

            // Check if there are rows in the result
            if ($result2->num_rows > 0) {
                // Loop through each row and create an option for each customer
                while ($row2 = $result2->fetch_assoc()) {
                    $customer_id = $row2["id"];
                    $customer_name = $row2["name"];
                    $cartype = $row2["cartype"];
                    $vc_number = $row2["vc_number"];
                    echo "<option value='$customer_name' data-car='$cartype' data-id='$customer_id' data-vcnum='$vc_number'>$customer_name</option>";
                }
            } else {
                echo "<option value=''>No Drivers found</option>";
            }

            // Close the database connection
            // $conn->close();
            ?>
        </select>

        </div>
        <div class="col-md-4 mb-3">
          <label for="cartype">Select Car</label>
           <select class="form-select form-control" id="cartype" name="cartype" placeholder="Select Car" required>
                <option value="0">Select Car Type</option>
                <option value="Crysta">Innova Crysta</option>
                <option value="Eritiga">Eritiga</option>
                <option value="Sedan">Sedan</option>
            </select>
        </div>
        <div class="col-md-4 mb-3">
          <label for="vehicleNumber">VehicleNumber</label>
          <input type="text" class="form-control" name="vcnumber" id="vehicleNumber" placeholder="Vehicle Number" required>
        </div>
      </div>
            <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="trip_type">Select Trip Type</label>
           <select class="form-select form-control" id="trip_type" name="type" placeholder="Select Trip Type" required>
                <option value="0">Select Trip Type</option>
                <option value="Airport">Airport</option>
                <option value="Package">Package</option>
                <option value="Outstation">Outstation</option>
            </select>
        </div>
        <div class="col-md-4 mb-3">
          <label for="date">Date</label>
          <input type="date" class="form-control"  name="date" id="date" placeholder="Enter Date">
        </div>
        <div class="col-md-4 mb-3">
          <label for="drop_date">Drop Date</label>
          <input type="date" class="form-control"  name="drop_date" id="drop_date" placeholder="Drop Date">
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="trip_price">Trip Price</label>
           <input type="text" class="form-control"  name="trip_price" id="trip_price" placeholder="Trip Price">
        </div>
        <div class="col-md-4 mb-3">
          <label for="toll">Toll</label>
          <input type="text" class="form-control"  name="toll" id="toll" placeholder="Toll">
        </div>
        <div class="col-md-4 mb-3">
          <label for="tax">Tax</label>
          <input type="text" class="form-control"  name="tax" id="tax" placeholder="Tax">
        </div>
      </div>
            <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="sub_total">Sub Total</label>
           <input type="text" class="form-control"  name="sub_total" id="sub_total" placeholder="Sub Total">
        </div>
        <div class="col-md-4 mb-3">
          <label for="bata">Driver Bata</label>
          <input type="text" class="form-control"  name="bata" id="bata" placeholder="Driver Bata">
        </div>
        <div class="col-md-4 mb-3">
          <label for="total_amount">Grand Total</label>
          <input type="text" class="form-control"  name="total_amount" id="total_amount" placeholder="Grand Total">
        </div>
      </div>
          <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="pay_mode">Pay Mode</label>
           <select class="form-select form-control" id="pay_mode" name="pay_mode" placeholder="Select Payment Method" required>
                <option value="0">Select Payment Mode</option>
                <option value="Cash">Cash</option>
                <option value="Cash">Card</option>
                <option value="UPI">UPI</option>
            </select>
        </div>
        <div class="col-md-4 mb-3">
          <label for="pay_status">Payment Status</label>
           <select class="form-select form-control" id="pay_status" name="pay_status" placeholder="Select Pay Status" required>
                <option value="0">Select Payment Status</option>
                <option value="Paid">Paid</option>
                <option value="Pending">Pending</option>
            </select>
        </div>
      </div>
      <!-- Similar structure for other fields like toll charges, CGST, SGST, etc. -->
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <button class="btn btn-light" onclick="clearForm()">Cancel</button>
    </form>
    <!--<div id="response"></div>-->

  </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
<script>
  
function clearForm() {
    document.getElementById("myForm").reset();
}
$(document).ready(function() {
    // Attach a submit handler to the form
    $("#myForm").submit(function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Serialize the form data
        var formData = $(this).serialize();

        // Send an AJAX request
        $.ajax({
            type: "POST", // Change this to "GET" if needed
            url: "process.php", // Replace with your server-side script URL
            data: formData,
            cache: false,
            dataType:"json",
            success: function(data) {
                if(data == 200){
                        alert("Data Saved Succefully.");
                        window.location.href='completed_trips';
                        // location.reload();
                    }
            },
            error: function() {
                // Handle errors here
                alert("Failed to save data.");
            }
        });
    });
});

// Get references to the select input and input fields
const customerSelect = document.getElementById("driver");
const customerNameInput = document.getElementById("cartype");
const customerPhoneInput = document.getElementById("vehicleNumber");

// Add an event listener to the select input
customerSelect.addEventListener("change", function () {
    // Get the selected option
    const selectedOption = customerSelect.options[customerSelect.selectedIndex];

    // Check if an option is selected
    if (selectedOption) {
        // Update the input fields with the customer's name, phone, and email
        customerNameInput.value = selectedOption.getAttribute("data-car");
        customerPhoneInput.value = selectedOption.getAttribute("data-vcnum");
    }
});
// Get references to the select input and input fields
const customerSelect2 = document.getElementById("name");
const customerNameInput2 = document.getElementById("phone");
const customerPhoneInput2 = document.getElementById("email");

// Add an event listener to the select input
customerSelect2.addEventListener("change", function () {
    // Get the selected option
    const selectedOption2 = customerSelect2.options[customerSelect2.selectedIndex];

    // Check if an option is selected
    if (selectedOption2) {
        // Update the input fields with the customer's name, phone, and email
        customerNameInput2.value = selectedOption2.getAttribute("data-phone");
        customerPhoneInput2.value = selectedOption2.getAttribute("data-email");
    } 
    // else {
        // Clear the input fields if no option is selected
    //     customerNameInput2.value = "";
    //     customerPhoneInput2.value = "";
    // }
});
</script>
  </body>
</html