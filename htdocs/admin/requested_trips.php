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
    <link rel="shortcut icon" href="../images/favicon.ico">
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
              <h3 class="page-title" style="margin-left: 450px; margin-top: 50px; font-size: 30px;">Requested Trips</h3>
              <!-- <nav aria-label="breadcrumb"> -->
                <!-- <ol class="breadcrumb"> -->
                  <!-- <li class="breadcrumb-item"><a href="#">customer</a></li>
                  <li class="breadcrumb-item active" aria-current="page">create new customer</li> -->
                <!-- </ol>
              </nav>-->
            </div> 
            <div class="row"  style="margin-left: 50px;">
            <!-- <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                  <div class="card-body"> -->
            <table id="example" class="display" style="width:100%">
                <thead style="background: blueviolet;">
                    <tr>
                        <th class="text-center" >ID</th>
                        <th class="text-center" >Name</th>
                        <th class="text-center" >Phone</th>
                        <th class="text-center" >Email</th>
                        <th class="text-center" >Trip Type</th>
                        <th class="text-center" >Pickup</th>
                        <th class="text-center" >Drop</th>
                        <th class="text-center" >Car Type</th>
                        <th class="text-center" >Date</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Action</th>
                    </tr>
                </thead>
                <tbody id="answer">
                    
                </tbody>
                <!-- <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </tfoot> -->
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
        <div class="modal fade" id="updatemodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-dark">Edit Driver</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="request_ride_edit_update.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ride_no" style="color: black;">Ride No:</label>
                        <input type="text" class="form-control" id="ride_no" name="ride_no">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="status" style="color: black;">Status:</label>
                        <select class="form-select form-control" id="status" name="status" placeholder="Select Trip Type" required>
                            <option value="0">Select status</option>
                            <option value="request">request</option>
                            <option value="scheduled">scheduled</option>
                        </select>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="updatedata" class="btn btn-primary">Update</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="delmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Delete Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
        Are You Sure You Want To Delete ?
        <input type="hidden" id="delid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="button" class="btn btn-primary" onclick="window.location.href='requested_trips'" id="deletebutton">YES</button>
      </div>
    </div>
  </div>
</div>
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
            "url": "requested_trips_fetch.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "phone" },
            { "data": "email" },
            { "data": "type" },
            { "data": "pickup" },
            { "data": "drop_location" },
            { "data": "cartype" },
            { "data": "date" },
            { "data": "status" },
            {
              "data": null,
              "render": function(data, type, row) {
                return '<span style="margin-left:5px;"><a><i class="fa-regular fa-pen-to-square edit_modal" data-id="' + row.id + '"></i></span></a><span style="margin-left:25px;"><i class="fa-regular fa-trash-can delete_modal" data-id="' + row.id + '" data-toggle="modal" data-target="#delmodel"></i></span>';
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
            url:"request_ride_edit_fetch.php",
            method:"POST",
            data:{staff_id,staff_id},
            dataType:"json",
            success:function(data){
            var today = new Date();
            var month = today.getMonth()+1;
            var year = today.getFullYear().toString().slice(-2);
             $('#ride_no').val(month + year + data.id);
             $('#status').val(data.status);
             $('#id').val(staff_id);
             
            //  var del_id = $('#id').val();
            //  alert(del_id);
             $('#updatemodal').modal('show');
            }
        });
});

$(document).on('click','.delete_modal',function(){
    $trr = $(this).closest('tr');
    var c = $trr.children("td").map(function(){
        return $(this).text();
        }).get();
    var delpass = c[0];
    $('#delid').val(delpass);
    $('#deletebutton').click(function(){
      var del_id = $('#delid').val();
      // alert(del_id);
    $.ajax({
        url:"customer_delete.php",
        method:"POST",
        data:{del_id,del_id},
        // dataType:"json",
        success:function(data){
          // alert("Customer Deleted Succefully");
        }
    });
});
});

      
    </script>
  </body>
</html>