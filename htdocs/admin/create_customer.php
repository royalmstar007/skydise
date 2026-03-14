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
  </head>
  <style>
      label{
        color: blueviolet;
      }
    </style>
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
            <h3 class="page-title" style="margin-left: 450px; font-size: 30px;">Create Driver</h3>
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
          <div class="container mt-5">
                  <!--<div class="card-body">
                    <h4 class="card-title">Create New Driver</h4>-->
                    <form id="myForm">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name">
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="phone">Phone no</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter Phone">
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email">
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="vc_number">Vehicle Number</label>
                            <input type="text" class="form-control" id="vc_number" placeholder="Enter Vehicle Number">
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="dl_number">DL Number</label>
                            <input type="text" class="form-control" id="dl_number" placeholder="Enter DL Number">
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="cartype">Car type</label>
                            <!-- <input type="text" class="form-control" id="cartype" placeholder="Enter Cartype"> -->
                            <select class="form-select form-control" id="cartype" name="cartype" placeholder="Select Car" required>
                            <option value="0">Select Car Type</option>
                            <option value="Crysta">Innova Crysta</option>
                            <option value="Eritiga">Eritiga</option>
                            <option value="Sedan">Sedan</option>
                        </select>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" onclick="create_validation()">Submit</button>
                        <button class="btn btn-light" onclick="clearForm()">Cancel</button>
                        </form>
                  </div>
                </div>
              </div>
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

function create_validation(){
  var name = document.getElementById("name").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;

if(name == "" ){
  alert("Please enter name");
  return false;
}
else if(phone == "" ){
  alert("Please enter phone number");
  return false;
}
// else if(email == "" ){
//   alert("Please enter email");
//   return false;
// }
else{        
  var name = document.getElementById("name").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var vc_number = document.getElementById("vc_number").value;
  var dl_number = document.getElementById("dl_number").value;
  var cartype = document.getElementById("cartype").value;
  $.ajax({
      url: "add_customer.php",
      method: "POST",
      cache: false,
      dataType:"json",
      data: {
          name:name,
          phone:phone,
          email:email,
          vc_number:vc_number,
          dl_number:dl_number,
          cartype:cartype

      },
      success: function(data){
        if(data == 200){
                        alert("Data Saved Succefully.");
                        window.location.href='manage_customer';
                        // location.reload();
                    }
            },
       error: function() {
            // Handle errors here
            alert("Failed to save data.");
        }
  });
}   
}

</script>
  </body>
</html>