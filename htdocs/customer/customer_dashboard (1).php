<?php
session_start();

include '../config.php';

if(!isset($_SESSION['role_id']))
{
    header('Location: index.html');
    exit();
    $role_id=0;
}
require_once("login_varification.php");
$role_id = $_SESSION['role_id'];

$logged_id=$_SESSION['login_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kahnke</title>
    <link href="../images/ilogo.png" rel="icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <style>
        .profilepic{
            max-width: 150px; /* Adjust the width as needed */
            height: auto;
            margin-left: 80px;
            border: 2px solid black;
            border-radius: 70px;
            margin-top: 23px;
        }

        body {
            background-color: #eae1e1;
            overflow-x: hidden;
            }
        th:hover {
            cursor: pointer;
            background-color: rgb(220, 128, 9);
        }
        .editbtn{
                width: 130px;
        }
        .profile-box{
            border: 1px solid rgb(219, 155, 155);
            background-color: rgb(255 240 191);
            border-radius: 20px;
        }
        .pic-button{
            margin-left: 90px;
            margin-top: 15px;
        }
        .fourth-box{
            max-width: 80%;
        }
        /*.main-container{*/
        /*            margin-left: 132px;*/
        /*    }*/
        @media (min-width: 1025px) {
            /* Styles for large screens */
        .status{
            margin-left: 906px;
            margin-top: -283px;
        }
        .status1{
            margin-left: 906px;
            margin-top: 8px;
            max-width: 39%;
            margin-bottom: 5px;
        }
        .customer-details{
            margin-left: -60px;
        }
        .address{
            white-space: nowrap;
        }
        .es-cash{
            margin-left: 14px;
        }
        .right-tab{
            padding-right: 35px;
        }
        .inside-box{
            display: flex;
            justify-content: center;
            margin-top: -22px;
        }
        .box-price{
            font-size:22px;
        }
        .main-container{
                 margin-left: 18px; 
            }
            .input{
            
            border: none;
            /*font-weight: bold;*/
            color: black;
            width:204%;
            background-color: transparent!important;
        }
        .inputaddress {
           
            border: none;
            /*font-weight: bold;*/
            color: black;
            width:204%;
        }
        .emailinput{
            margin-left: 86px;
            margin-top: -30px;
                width: 204%
                 
        }
         
        }

        
        
        @media (max-width: 768px) {
    /* Styles for screens smaller than 768px */
        .main-container{
                 margin-left: -10px; 
            }
            .btn-group{
                margin-left: 110px;
            }
            #greenbox{
                    margin-left: -55px;
            }
            .centercard{
                width: 320px;
            }
            .navbar{
                width: 508px;
            }
            .sidebar{
                display:none;
            }
            .one{
                margin-left: 134px;
            }
            .profile-box{
                width: 459px;
            }
            .two{
                margin-left: 68px;
            }
            .welcome-tag{
                justify-content: center;
                display: flex;
                margin-left: 120px;
                white-space: nowrap;
            }
            .box-container{
                margin-left: -13px;
            }
            .first-box{
                /* white-space: pre-line; */
                width: 255px;
            }
            .second-box{
                /* white-space: pre-line; */
                /* margin-left: 1px; */
                margin-left: 233px;
                margin-top: -99px;
                width: 245px;
            }
            .third-box{
                /* white-space: pre-line; */
                
                margin-left: 233px;
                margin-top: -99px;
                width: 245px;
            }
            .fourth-box{
                /* white-space: pre-line; */
                width: 255px;
                
                margin-top: 21px;
                margin-left: 100px;
            }
            .fa-3x{
                margin-left: -15px;
            }
            .box-text{
                margin-left: 10px;
            }
            .box-price{
                margin-left: 27px;
                font-size:22px;
            }
            .editbtn{
                width: 130px;
            }
            .container{
                 /*margin-left: 55px; */
            }
            .cust-detail{
                margin-left: 1;
            }
            .table-responsive{
                width: 141%;
            }
            .yellow-card{
                width: 350px;
                display: flex;
                justify-content: center;
                margin-left: 103px;
            }
            .input{
            
            border: none;
            /*font-weight: bold;*/
            color: black;
            width:70%;
            white-space: nowrap; /* Prevent line breaks */
          overflow: auto;
        }
        .inputaddress{
           
            border: none;
            /*font-weight: bold;*/
            color: black;
            width:70%;
            white-space: nowrap; /* Prevent line breaks */
          overflow: auto;
        }
        }
        /*//laptop*/
        
        /*.form-control{*/
        /*    background-color: rgb(230, 190, 190);*/
        /*    border: none;*/
        /*    font-weight: bold;*/
        /*    color: black;*/
            /*width:700px;*/
        /*}*/
        .ph-col:active {
            background-color: rgb(220, 128, 9);
        }
        /*.form-control:disabled, .form-control[readonly] {*/
        /*     background-color: rgb(230, 190, 190); */
            /* opacity: 1; */
        /*}*/
        
        .custom-column-style{
            text-align: right;
        }
        #tbutton, #pbutton{
            padding:17px;
            margin:2px;
            font-size: 23px;
        }
        /*#tabletext{*/
        /*    white-space: nowrap;*/
        /*}*/
        /*.input{*/
        /*  white-space: nowrap;*/
        /*  overflow: auto;  */
        /*}*/
        /*.inputaddress{*/
           /* Enable scrolling for overflowed content */
        /*}*/
        .btn-primary1 {
    color: black;
    background-color: gray;
    /* border-color: #007bff; */
}
 .btn-primary2 {
    color: black;
    background-color: #fcf214;
    /* border-color: #007bff; */
}
th{
     text-align:center;
     padding:0px;
     color:black;
     background-color:#fcf214;
 }
 table.dataTable tbody tr:hover {
    background-color:white!important;
}
th:hover{
     text-align:center;
     padding:0px;
     color:black;
     background-color:#fcf214;
 }
 .total{
    font-size: 16px;
    font-weight: bold;
    float: right!important;
}
.total1{
    /*font-size: 16px;*/
    /*font-weight: bold;*/
    float: right!important;
}
.yeardrop{
        width:84px;
        cursor:pointer;
      }
    </style>

</head>

<body>
<!--    <nav class="navbar fixed-top bg-body-tertiary">-->
<!--  <div class="container-fluid">-->
<!--    <a class="navbar-brand" href="#">Fixed top</a>-->
<!--  </div>-->
<!--</nav>-->
<!--    <nav class="navbar bg-primary" data-bs-theme="dark">-->
  <!-- Navbar content -->
<!--</nav>-->
    <nav class="navbar bg-warning">
  <div class="container-fluid">
      <img src="../images/ilogo.png" style="height: 66px; width: 52px; border-radius: 10px; margin: 0 14px 0 12px;  padding: 2px;">
    <a class="navbar-brand" style="color:black; font-weight:bold; font-size:38px;">Kahnke's Tree Farm</a>
    <form class="d-flex" role="search">
      <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
     <a href="logout.php" class="btn btn-outline-success text-light bg-dark" style="font-weight:bold;" >LOGOUT &nbsp<i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </form>
  </div>
</nav>
<!--    <a href="logout.php">-->
<!--<i class='bx bx-log-out' ></i>-->
<!--<i  class='bx'><img src='../images/logout.png' style='margin-top:10px; height:25px; width:25px; cursor:pointer; ' ></i>-->
<!--<span class="link_name">Logout</span>-->
<!--</a>-->
<!--<php -->
<!--		include 'dboard.php';-->
	<!--?>-->
    <div class="container-fluid main-container">
        <!-- Content here -->
      
    <br>
    <!--<div class="text-center one">-->
    <!--    <h2>YOUR PROFILE </h2>-->
    <!--  </div><br><br>-->
      
  <div class="container">
    <div class="profile-box">
    <div class="row mt-4">
      <div class="col-md-4 two">
        <!-- Profile Picture Card -->
        <img src="th.jpeg" class="profilepic" alt="Profile Picture">
        <div class="pic-button">
            <!--<a href="#" class="btn btn-primary active editbtn" role="button" data-bs-toggle="button" aria-pressed="true">Edit Profile</a>-->
        </div>
        <!-- <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Customer Name</h5>
            <p class="card-text">Phone Number: 123-456-7890</p>
          </div>
        </div> -->
      </div>
      
      <div class="col-md-4 customer-details three" >
        <!-- Profile Customer Details -->
        <!-- <div class="row" style="white-space: nowrap;">
            <div class="col" style="white-space: nowrap;">
                First Name : John
            </div>
            <div class="col" style="white-space: nowrap;">
                Middle Name :vir
            </div>
            <div class="col" style="white-space: nowrap;">
                Last Name : Richard
            </div>
          </div> -->
        <table class="table table-borderless">
          <thead>
            <tr>
              <!-- <td colspan="2"><h4>Customer Details</h4></td> -->
            </tr>
          </thead>
          <tbody>
            <tr>
                <td class="welcome-tag">
                    
                    <!--<b>Welcome <input type="text" class="input" style="font-weight:bold;" name="cname" id="cname" value="" disabled>!</b>-->
                    <b>Welcome <span  style="font-weight:bold;" id="cname"></span>!</b>
                    </td>
                <input type="hidden" value="<?php echo $logged_id;?>" id="custid">
            </tr>
            <!-- &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Middle Name :</b> v &nbsp&nbsp&nbsp <b>Last Name :</b> Richard -->
            <tr>
              <!--<td style="white-space: nowrap;" class="cust-detail"><b>Name :</b> John v Richard </td>-->
              <!-- <td>John</td> -->
              <!-- <td style="white-space: nowrap;">Middle Name:</td>
              <td>v</td>
              <td style="white-space: nowrap;">Last Name:</td>
              <td>Richard</td> -->
            </tr>
            <tr>
                <td style="white-space: nowrap;" class="cust-detail"><b>Company Name :</b><input class="input" type="text" name="ccompnay" id="ccompany" value="" disabled></td>
                <td></td>
              </tr>
              <tr>
                <td style="white-space: nowrap;" class="cust-detail"><b>Address :</b><input class="inputaddress input emailinput form-control-plaintext" type="text" name="caddress" id="caddress" value="" disabled></td>
                <!-- <td class="address">Washington, United States - 560064</td> -->
            </tr>
            <tr>
                <td style="white-space: nowrap;" class="cust-detail"><b>Phone Number :</b><input class="input" type="text" name="cphone" id="cphone" value="" disabled> </td>
                <!-- <td></td> -->
              </tr>
            <tr>
                <!-- &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Phone Number :</b> 123-456-7890 -->
                <td style="white-space: nowrap;" class="cust-detail"><b>Email ID :</b><input class="input form-control-plaintext emailinput" type="text" name="cemail" id="cemail" value="" disabled></td>
                <!-- <td>abcd@gmail.com</td> -->
              </tr>
            <!-- <tr>
              <td style="white-space: nowrap;">Phone Number:</td>
              <td>123-456-7890</td>
            </tr> -->
            
            
            
          </tbody>
        </table>
        
      </div>
    </div>
    </div>
        <br>
        <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4 box-container">
        <div class="row g-4 inside-box">
            <div class="col-sm-6 col-xl-3 first-box">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4" style="margin-right: 30px;">
                    <!--<i class="fa-solid fa-shield-halved fa-3x text-primary"></i>-->
                    <img src="../images/icon1.png" style="height: 66px;  border-radius: 10px; margin: 0 14px 0 12px;  padding: 2px;">
 
                    <div class="ms-3">
                        <p class="mb-2" style="white-space: nowrap;"><b>Tier Status</b></p>
                        <h6 class="mb-0 text-dark box-price font-weight-bold" id="tierbox"></h6>
                        <input type="hidden" class="form-control-plaintext" id="ctier">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 second-box">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <!--<i class="fa-solid fa-cart-shopping fa-3x text-primary"></i>-->
                     <img src="../images/icon2.png" style="height: 66px; border-radius: 10px; margin: 0 14px 0 12px;  padding: 2px;">
 
                    <div class="ms-3">
                        <p class="mb-2 box-text" style="white-space: nowrap;"><b>Total Purchases</b></p>
                        <h6 class="mb-0 box-price text-dark font-weight-bold" id="totalbox"></h6>
                        <input type="hidden" class="form-control-plaintext" id="ctotal">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 fourth-box">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <!--<i class="fa-solid fa-wallet fa-3x text-primary"></i>-->
                     <img src="../images/icon3.png" style="height: 66px;  border-radius: 10px; margin: 0 14px 0 12px;  padding: 2px;">
 
                    <div class="ms-3 es-cash">
                        <p class="mb-2 box-text" style="white-space: nowrap;"><b>Estimated Cashback</b></p>
                        <h6 class="mb-0  box-price text-dark font-weight-bold" id="estimatedcash"></h6>
                        <input type="hidden" class="form-control-plaintext" id="cestimated">
                    </div>
                </div>
            </div>
            <!--<div class="col-sm-6 col-xl-3 third-box">-->
            <!--    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">-->
            <!--        <i class="fa fa-chart-area fa-3x text-primary"></i>-->
            <!--        <div class="ms-3">-->
            <!--            <p class="mb-2 box-text" style="white-space: nowrap;"><b>Today Revenue</b></p>-->
            <!--            <h6 class="mb-0 box-price">$1234</h6>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
    <!-- Sale & Revenue End -->
    <br>
    <!--<div class="table-responsive">-->
    <!--  <table class="table col-tab">-->
    <!--    <thead class="thead bg-dark text-light  table-bordered text-center">-->
    <!--      <tr>-->
    <!--        <th scope="col" class="ph-col">Purchase History</th>-->
    <!--        <th scope="col" class="right-tab">Tier History</th>-->
            <!--<th scope="col">My Profile</th>-->
    <!--      </tr>-->
    <!--    </thead>-->
    <!--  </table>-->
    <!--</div>-->
        <div style="display:flex;"class="btn-group" >
      <button class="btn btn-primary2" id="pbutton" onclick="tabbuttons(this)" type="button"><b>Purchase History</b></button>
      <button class="btn btn-primary1" id="tbutton" onclick="tabbuttons(this)" type="button"><b>Tier History</b></button>
    </div>
    <div class="row mt-4" id="greenbox">
      <div class="col-md-12 yellow-card">
        <!--<div class="card centercard" style="background-color: #eae1e1;">-->
        <!--  <div class="card-body">-->
        <!--    <h5 class="card-title text-center text-dark" id="tabletext">Purchase History</h5>-->
        <!--  </div>-->
        <!--</div>-->
      </div>
    </div>
    <div class="" style="text-align: left; margin-left:4px; margin-bottom: 50px;">
            <!-- <span><b>Filter by Year : </b> -->
            <!--    <select type="text" name="year" id="year" style="cursor:pointer;">-->
            <!--      <option value="2023" selected>2023</option>-->
            <!--      <option value="2022">2022</option>-->
            <!--      <option value="2021">2021</option>-->
            <!--      <option value="2020">2020</option>-->
            <!--</select></span>-->
            <div class="input-group mb-3">
      <label class="input-group-text bg-dark text-light" for="">Filter By Year</label>
      <select type="text" name="year" id="year" class="yeardrop" >
        <option value="2023" selected="">2023</option>
        <option value="2022">2022</option>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
      </select>
    </div>
    </div>
    <!--<br>-->
    <div class="table-responsive" id="tableone" >
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th class=" text-center">Invoice</th>
                <th class=" text-center">Sale Date</th>
                <th class=" text-center">Sub Total</th>
                <th class=" text-center">Tax</th>
                <th class=" text-center">Add. Charges</th>
                <th class=" text-center">Total</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<!--<br>-->
<!--<div class="row mt-4">-->
<!--      <div class="col-md-12 yellow-card">-->
<!--        <div class="card bg-success">-->
<!--          <div class="card-body">-->
<!--            <h5 class="card-title text-center text-light">Tier History</h5>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
    <!--<br>-->
    <div class="table-responsive"id="tabletwo" style="display:none;">
    <table id="secondtable" class="display" style="width:100%">
        <thead>
            <tr>
                <th class=" text-center">Updated On</th>
                <th class=" text-center">Amount</th>
                <th class=" text-center">Tier Status</th>
                <th class=" text-center">Comment</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
    <br><br>
  </div>
  
</div>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
  
  <script>
    // $(document).ready( function () {
    //     $("#example").DataTable();
    // });
      $(document).ready( function () {
          var custid = $("#custid").val();
          var year = $("#year").val();
        // alert(year);
       $('#example').DataTable({
  "processing" : true,
  "bSort" : true ,
  'order': [[ 0, 'desc' ]],
//   'columnDefs': [{ 'targets': [0,1,2,4,5,6,7,8], 'orderable': false }],
//   "columnDefs": [{ "targets": [3], "orderable": true }],
//   table.columns([0, 1, 2, 3]).search().draw(),
//   "dom": 'lFrtip',
  
    // "dom":' <"search"f><"top"l>rt<"bottom"ip><"clear">',
"language": {"searchPlaceholder": "By Invoice"},
 "lengthMenu": [[15, 25, 50, 100, -1], [15, 25, 50, 100, "All"]],
 "iDisplayLength": 15,
//   "columnDefs": [
//     { "searchable": true, "targets": 0 }
//   ],
//   "columns": [
//     { "searchable": false },
//     null,
//     null,
//     null,
//     null
//   ],
//   "dom": '<"search"f><"left"i>rt<"bottom"flp><"clear">'
// "dom":' <"search"f><"top"l>rt<"bottom"ip><"clear">',
// dom: 'B<"top"frli>tp',
// dom: '<"clear">',
   "serverSide" : true,
//   "order" : [3] desc,
   'order': [[ 3, 'desc' ]],
//   "searchPlaceholder": "search",
//   "targets": 0,
//         "className": 'dt-body-right',
//   "dom": '<"search">',
  "pagingType": "full_numbers",
  "info":     false,
// "dom": '<"top"i>rt<"bottom"flp><"clear">'
// "dom":' <"search"f><"top"l>rt<"bottom"ip><"clear">'
   "ajax" : {
    url:"cust_pos_summary_fetchNew.php",
    type:"POST",
    data:{
     custid:custid,
     year: year
    }
   }
//   'columns': [
//          { data: 'invoice_number' },
//          { data: 'cash_payment' },
//          { data: 'card_payment' }
//       ]
  });
      
       
      
      //2nd
      $.ajax({
                url:"customer_details_fetch.php",
                method:"POST",
                data:{custid: custid,
                            year: year},
                dataType:"json",
                success:function(data){
                //   $('#cname').val(data.first_name);
                  document.getElementById("cname").innerHTML = data.first_name;
                  $('#cemail').val(data.email);
                  $('#cphone').val(data.phone1);
                  $('#ccompany').val(data.company_name);
                  $('#caddress').val(data.street_address);
                  $('#ctier').val(data.tier_status);
                  $('#ctotal').val(data.customer_total_sale);
                  $('#cestimated').val(data.estimated_cash);
                  
                  var ctier = $("#ctier").val();
                  var tierbox = document.getElementById("tierbox");
                  tierbox.textContent = "Tier "+ctier;
                  
                  var ctotal = $("#ctotal").val();
                  var totalbox = document.getElementById("totalbox");
                  totalbox.textContent = "$"+parseFloat(ctotal).toFixed(2);
                  
                  var ccashback = $("#cestimated").val();
                  var ccashback2 = parseFloat(ccashback).toFixed(2);
                  var estimatedcash = document.getElementById("estimatedcash");
                  estimatedcash.textContent = "$"+ccashback2;
                  
                }
            });
            
        //3rd
        $('#secondtable').DataTable({
        order: [[0, 'desc']],
        searching: false,
        paging:false,
        bInfo : false,
        "ajax": {
            "url": "cust_tier_history_fetch.php",
                "method":"POST",
                "data": { 
                            custid: custid,
                            year: year
                        },
                "dataType":"json",
            "dataSrc": ""
        },
        "columns": [
            { "data": "update_date1" },
            { 
                "data": "amount",
                "render": function(data, type, row) {
                    return '$' + row.amount;  
                }
            },
            { "data": "status" },
            { "data": "comment" },
            
        ],
        "columnDefs": [
            {
                "targets": [1], 
                "className": "custom-column-style" 
            }
        ]
        
      });
        
    });
    
    $( "#year" ).change(function() {
        var custid = $("#custid").val();
        var year = $("#year").val();
         $('#example').DataTable().destroy();
         $('#secondtable').DataTable().destroy();
       filter(year);
       filtertwo(year);
       filterthree(year);
    });
    
    function filter(yearnum){
        var year = yearnum;
        var custid = $("#custid").val();
        // alert(newyear);
        
        $('#example').DataTable({
          "processing" : true,
          "bSort" : true ,
          'order': [[ 0, 'desc' ]],
        "language": {"searchPlaceholder": "By Invoice"},
         "lengthMenu": [[15, 25, 50, 100, -1], [15, 25, 50, 100, "All"]],
         "iDisplayLength": 15,
           "serverSide" : true,
           'order': [[ 3, 'desc' ]],
          "pagingType": "full_numbers",
          "info":     false,
           "ajax" : {
            url:"cust_pos_summary_fetchNew.php",
            type:"POST",
            data:{
             custid:custid,
             year:year
            }
           }
          });
    }
    function filtertwo(yearnum){
        var year = yearnum;
        var custid = $("#custid").val();
        $.ajax({
                url:"customer_details_fetch.php",
                method:"POST",
                data:{custid: custid,
                            year: year},
                dataType:"json",
                success:function(data){
                //   $('#cname').val(data.first_name);
                  document.getElementById("cname").innerHTML = data.first_name;
                  $('#cemail').val(data.email);
                  $('#cphone').val(data.phone1);
                  $('#ccompany').val(data.company_name);
                  $('#caddress').val(data.street_address);
                  $('#ctier').val(data.tier_status);
                  $('#ctotal').val(data.customer_total_sale);
                  $('#cestimated').val(data.estimated_cash);
                  
                  var ctier = $("#ctier").val();
                  var tierbox = document.getElementById("tierbox");
                  tierbox.textContent = "Tier "+ctier;
                  
                  var ctotal = $("#ctotal").val();
                  var totalbox = document.getElementById("totalbox");
                  totalbox.textContent = "$"+parseFloat(ctotal).toFixed(2);
                  
                  var ccashback = $("#cestimated").val();
                  var ccashback2 = parseFloat(ccashback).toFixed(2);
                  var estimatedcash = document.getElementById("estimatedcash");
                  estimatedcash.textContent = "$"+ccashback2;
                  
                }
            });
    }
    function filterthree(yearnum){
        var year = yearnum;
        var custid = $("#custid").val();
        $('#secondtable').DataTable({
        order: [[0, 'desc']],
        searching: false,
        paging:false,
        bInfo : false,
        "ajax": {
            "url": "cust_tier_history_fetch.php",
                "method":"POST",
                "data": { 
                            custid: custid,
                            year: year
                        },
                "dataType":"json",
            "dataSrc": ""
        },
        "columns": [
            { "data": "update_date1" },
            { 
                "data": "amount",
                "render": function(data, type, row) {
                    return '$' + row.amount;  
                }
            },
            { "data": "status" },
            { "data": "comment" },
            
        ],
        "columnDefs": [
            {
                "targets": [1], 
                "className": "custom-column-style" 
            }
        ]
        
      });
        
    }
    function tabbuttons(buttonId){
        // const clickedButton = event.target;
      const btnid = buttonId.id;
    //   alert('Clicked button ID: ' + btnid);
    //   var tabletext = document.getElementById('tabletext');
    document. getElementById('pbutton'). style. backgroundColor = '#fcf214';
      if(btnid=="pbutton"){
        //   document.getElementById("pbutton").style.color = "#fcf214";
          document. getElementById('pbutton'). style. backgroundColor = '#fcf214';
          document. getElementById('tbutton'). style. backgroundColor = 'gray';
          document.getElementById('greenbox').style.display="block";
          document.getElementById('tableone').style.display="block";
          document.getElementById('tabletwo').style.display="none";
        //   tabletext.innerText = 'Purchase History';
      }
      else if(btnid=="tbutton"){
          document. getElementById('pbutton'). style. backgroundColor = 'gray';
          document. getElementById('tbutton'). style. backgroundColor = '#fcf214';
          document.getElementById('greenbox').style.display="block";
          document.getElementById('tableone').style.display="none";
          document.getElementById('tabletwo').style.display="block";
        //   tabletext.innerText = 'Tier History';
      }
    }
  </script>
</body>
</html>

</body>
</html>