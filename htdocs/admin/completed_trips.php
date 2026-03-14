<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydise</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/datatable.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>
  <style>
    td,tr{
      color: black;
    }
    th{
      color: black;
    }
    .dataTables_paginate, .dataTables_info, .dataTables_filter, .dataTables_length{
      color: black;
    }
    .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
    color: blue;
}
.button .fa-pen-to-square .fa-trash{
            cursor: pointer;
        }
  </style>
  <body>
  <div class="container-scroller">
  <?php include "sidebar.php";?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper ">
        <!-- partial:partials/_sidebar.html -->
        <?php include "sidemenu.php";?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title" style="margin-left: 450px; font-size: 30px;">Completed Trips</h3>
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">customer</a></li>
                  <li class="breadcrumb-item active" aria-current="page">create new customer</li> 
                </ol>
              </nav>-->
            </div>
            <div class="row table-responsive" style="margin-left: 1px;">
            <!-- <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                  <div class="card-body"> -->
            <table id="example" class="display table-responsive" style="width:100%">
                <thead style="background: blueviolet;">
                    <tr>
                      <!--  <th class="text-center">ID</th>-->
                        <th class="text-center">Ride No</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Phone</th>
                        <!--<th class="text-center">Email</th>-->
                        <th class="text-center">Trip Type</th>
                        <th class="text-center">Pickup</th>
                        <th class="text-center">Drop</th>
                        <th class="text-center">Driver Name</th>
                        <th class="text-center">Car Type</th>
                        <th class="text-center">Vehicle Number</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Amount</th>
                        <!--<th class="text-center">Status</th>-->
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="answer">
                    
                </tbody>
                <tfoot>
                    <tr>
                        <?php 
                            include '../config.php';
                            if (!$conn) {
                                die('Could not connect: ' . mysqli_error($conn));
                            }
                        // Fetch data from the database
                        $sqlz = "SELECT COUNT(*) AS rowCount FROM trip"; // Replace with your table name
                        $resultz = mysqli_query($conn, $sqlz);
                                $resz = mysqli_fetch_array($resultz);
                                    $rowcount= $resz["rowCount"];
                        ?>
                        <th><?php echo"$rowcount";?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total =</th>
                        <?php 
                            include '../config.php';
                            if (!$conn) {
                                die('Could not connect: ' . mysqli_error($conn));
                            }
                        // Fetch data from the database
                        $sql = "SELECT SUM(total_amount) AS total FROM trip"; // Replace with your table name
                        $result = mysqli_query($conn, $sql);
                                $res = mysqli_fetch_array($result);
                                    $sumtotal= $res["total"];
                        ?>
                        <th><?php echo"$sumtotal";?></th>
                    </tr>
                </tfoot>
            </table>
            <!-- </div>
            </div>
            </div> -->
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Skydise.com 2023</span>
                <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="#" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span> -->
              </div>
            </div>
          </footer>
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
    <script src="jquery-3.6.1.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" /> -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready( function () {
        $('#example').DataTable({
        order: [[0, 'desc']],
        "ajax": {
            "url": "completed_trips_fetch.php",
            "dataSrc": ""
        },
        "columns": [
            // { "data": "id" },
            { "data": "ride_no" },
            { "data": "name" },
            { "data": "phone" },
            // { "data": "email" },
            { "data": "type" },
            { "data": "pickup" },
            { "data": "drop_location" },
            { "data": "driver_name" },
            { "data": "cartype" },
            { "data": "vc_number" },
            { "data": "date" },
            { "data": "total_amount" },
            // { "data": "status" },
            {
              "data": null,
              "render": function(data, type, row) {
                return '<span style="margin-left:5px;"><a href="trip_edit?ride_id=' + row.ride_no + '"><i class="fa-regular fa-pen-to-square edit_modal" data-id="' + row.ride_no + '"></i></span></a><span style="margin-left:13px;"><a href="fpdf186/Trip_Invoice?ride_id='+ row.ride_no +'"><i class="fa-solid fa-print"></i></a></span>';
              }
            }
        ]
      });
    });
    
$(document).on('click','.edit_modal',function(){
    $tr = $(this).closest('tr');
    var d = $tr.children("td").map(function(){
        return $(this).text();
        }).get();
    var staff_id = d[0];
    // alert (staff_id);

    $.ajax({
            url:"customer_edit_fetch.php",
            method:"POST",
            data:{staff_id,staff_id},
            dataType:"json",
            success:function(data){
             $('#uid').val(data.id);
             $('#uname').val(data.name);
             $('#uphone').val(data.phone);
             $('#uemail').val(data.email);
             $('#updatemodal').modal('show');
            }
        });
});
 
    </script>
  </body>
</html>