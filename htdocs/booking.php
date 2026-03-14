<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SkyDise | Book</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .css-button {
            color: #ffffff;
            font-size: 16px;
            border-radius: 20px;
            border: solid 2px white;
            text-shadow: 1px 1px 0px #a3a3a3;
            box-shadow: 6px 8px 13px -7px black;
            text-decoration: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            font-family: Arial;
            background: linear-gradient(180deg, limegreen 10%, limegreen 100%);
            display: inline-flex;
            align-items: center;
            padding: 0;
        }
        .css-button-text {
            position: relative;
            padding: 10px 18px;
        }
        .css-button-icon {
            position: relative;
            border-right: 1px solid #ffffff29;
            box-shadow: inset rgb(0 0 0 / 14%) -1px 0 0;
            padding: 10px 10px;
        }
        .css-button-t {
            color: #ffffff;
            font-size: 16px;
            border-radius: 20px;
            border: solid 2px white;
            text-shadow: 1px 1px 0px #a3a3a3;
            box-shadow: 6px 8px 13px -7px black;
            text-decoration: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            font-family: Arial;
            background: linear-gradient(180deg, #1e90ff 10%, #007bff 100%);
            display: inline-flex;
            align-items: center;
            padding: 0;
        }
        .css-button-y{
            color: #ffffff;
            font-size: 14px;
            border-radius: 20px;
            border: solid 2px white;
            text-shadow: 1px 1px 0px #a3a3a3;
            box-shadow: 6px 8px 13px -7px black;
            text-decoration: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            font-family: Arial;
            background: linear-gradient(180deg, #FF0000 0%, #B00000 100%);
            display: inline-flex;
            align-items: center;
            padding: 0;
        }

        .blink-text {
            color: #00ffea; /* neon-like color */
            font-weight: bold;
            animation: blinkAnim 1s infinite;
            text-decoration: none;
        }

        @keyframes blinkAnim {
            0%, 50%, 100% { opacity: 1; }
            25%, 75% { opacity: 0; }
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <?php include "navbar.php";?>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(images/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <div class="container-xxl py-2">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">For Quick Book or Details</h6>
                    <h1 class="mt-1 text-light"><a href="tel:9148456257"><button type="button" class="css-button"><span class="css-button-icon"><i class="fa fa-phone"></i></span><span class="css-button-text"><span>CALL US</span></span></button></a><br><h6>or</h6>
                    <h1 class="mt-1 text-light"><a href="https://wa.me/919148456257?text=Hello,+I+need+to+book+a+ride."><button type="button" class="css-button"><span class="css-button-icon"><i class="fa-brands fa-whatsapp"></i></span><span class="css-button-text"><span>Whatsapp</span></span></button></a>
                    </h1>
                </div>
            </div>
        </div>
    <!--tour packages start-->
    <!-- Button -->
        <div class="container-xxl py-2">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Tour Packages</h6>
            <h1 class="mt-1 text-light">
                <button type="button" class="css-button-t" data-bs-toggle="modal" data-bs-target="#tourModal">
                <span class="css-button-icon"><i class="fa fa-eye"></i></span>
                <span class="css-button-text"><span>View Packages</span></span>
                </button>
            </h1>
            <h1 class="mt-1 text-light">
                <button type="button" class="css-button-y" onclick="window.open('https://www.youtube.com/@manoj_kumar_ai1', '_blank')">
                    <span class="css-button-icon"><i class="fab fa-youtube"></i></span>
                    <span class="css-button-text"><span>Subscribe for Vlogs</span></span>
                </button>
            </h1>
            </div>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="tourModal" tabindex="-1" aria-labelledby="tourModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark text-light">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="tourModalLabel">Tour Packages</h5>
                <a href="https://www.youtube.com/watch?v=LkcHCfy_Jbg&list=PL89aXBNgwgNBSqM_G6g31-9KR0MOtPf_8&index=2" target="_blank" class="btn btn-sm btn-danger ms-2">
                    <i class="fab fa-youtube"></i> Subscribe for Vlogs
                </a>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- One Day Trips -->
                <h6 style="color: #ffffff;">One Day Trips > <a href="booking.php" class="blink-text">📞Know more</a></h6>
                <hr class="bg-light">
                <ul>
                <li>
                    Shivanasamudra 
                </li>
                <li>
                    Kolar 
                </li>
                <li>
                    Bannerghatta National Park 
                </li>
                <li>
                    Adichunchanagiri, Panchamukhi Anjaneya, Leelavathi memorial
                </li>
                </ul>
                <!-- Two Day Trips -->
                <h6 style="color: #ffffff;">Two Day Trips > <a href="booking.php" class="blink-text">📞Know more</a></h6>
                <hr class="bg-light">
                <ul>
                <li>
                    Chitradurga 
                </li>
                <li>
                Sakleshpur
                </li>
                <li>
                    Tirupathi & Srikalahasti
                </li>
                </ul>
                <!-- Three Day Trips -->
                <h6 style="color: #ffffff;">Three Day Trips > <a href="booking.php" class="blink-text">📞Know more</a></h6>
                <hr class="bg-light">
                <ul>
                <li>
                Madurai & Rameshwaram
                </li>
                <li>
                    Srirangam & Thanjavur
                </li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    <!--tour packages end-->
        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Ride Booking</h6>
                    <h1 class="mb-5 text-dark">Book Your <span class="text-primary text-uppercase">Ride</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="images/book1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="images/book3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="images/book2.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="images/book4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form method="post" onsubmit="emailSend();">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" autocomplete="off" name="name" placeholder="Your Name" required>
                                            <label for="name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="phone" autocomplete="off" name="phone" placeholder="Mobile Number" maxlength="12" required>
                                            <label for="phone">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" autocomplete="off" name="email" placeholder="Your Email" required>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1" name="type" required>
                                              <option value="0">Select</option>
                                              <option value="Airport">Airpot Trip</option>
                                              <option value="Package">Package</option>
                                              <option value="Outstation">Outstation</option>
                                            </select>
                                            <label for="select1">Trip Type</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="pickup" autocomplete="off" name="pickup" placeholder="Pickup Location" required>
                                            <label for="pickup">From</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="drop" autocomplete="off" name="drop" placeholder="Drop Location" required>
                                            <label for="drop">To</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select2" name="cartype" required>
                                              <option value="0">Select</option>
                                              <option value="Crysta">Innova Crysta</option>
                                              <option value="Eritiga">Eritiga</option>
                                              <option value="Sedan">Sedan</option>
                                            </select>
                                            <label for="select2">Cars</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="date" name="date" placeholder="Date of Ride" data-target="#date3"  data-toggle="datetimepicker" required />
                                            <label for="date">Date of Ride</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit" id="book" name="book">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
        <?php
            require 'config.php';
            // include 'config.php';
            if(isset($_POST['book']))
            {
                $name=$_POST['name'];
                $phone=$_POST['phone'];
                $email=$_POST['email'];
                $type=$_POST['type'];
                $pickup=$_POST['pickup'];
                $drop=$_POST['drop'];
                $cartype=$_POST['cartype'];
                $status= 'Request';
                $date=date('y-m-d', strtotime($_POST['date']));
                // $to = "skydise.contact@gmail.com";
                // $subject = "Someone Requested a ride";
                // $txt ="Hi.. You got request for a ride";
                // $headers = "From: kumarnmanoj77@gmail.com";
                // $date=$_POST['date'];
                // $message=$_POST['message'];
                $sql="insert into requested_trips(name,phone,email,type,pickup,drop_location,cartype,date,status) values('$name','$phone','$email','$type','$pickup','$drop', '$cartype','$date','$status')";
                $result=mysqli_query($conn,$sql);
                if($result)
                {   
                    
                    // if($email!=NULL){
                        // mail($to,$subject,$txt,$headers);
                    // }
                    // $to = "skydise.contact@gmail.com";
                    // $subject = "New Order Requested";
                    // $message = "A new order has been requested";
                    // by $type from $pickup to $drop.
                    // $headers = "From: kumarnmanoj77@gmail.com" . "\r\n" .
                    //            "Reply-To: skydise.contact@gmail.com" . "\r\n" .
                    //            "X-Mailer: PHP/" . phpversion();
                    // mail($to, $subject, $message, $headers);
                    // header('Location:booking');
                    echo '<script>swal("Thank You!", "We Get Back to You Soon...", "success");</script>';
                }
                else
                {
                    die(mysqli_error($conn));
                }

                // if ($conn->query($sql) === TRUE) {
                //     // Email notification
                //     $to = "skydise.contact@gmail.com.com";
                //     $subject = "New Order Requested";
                //     $message = "A new order has been requested by $type from $pickup to $drop.";
                //     $headers = "From: webmaster@example.com" . "\r\n" .
                //                "Reply-To: webmaster@example.com" . "\r\n" .
                //                "X-Mailer: PHP/" . phpversion();
            
                //     mail($to, $subject, $message, $headers);
                    
                    // echo "Order placed successfully. We will contact you shortly.";
                // }
            } 
        ?>
        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                              <form method="post">  <input class="form-control w-100 py-3 ps-4 pe-5" type="text" name="email" placeholder="Enter your email">
                                <button type="submit" name="newsletter" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->
          <?php
            require 'config.php';
            if(isset($_POST['newsletter']))
            {
                $email=$_POST['email'];
                $sql="insert into newsletter(email) values('$email')";
                $result=mysqli_query($conn,$sql);
            } 
        ?>
        
        <!-- Footer Start -->
        <?php include "footer.php";?>
        <!-- Footer End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="cform.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <!-- <script>
        $('#submitbtn').click(function(){
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var email = document.getElementById("email").value;
            var type = document.getElementById("select1").value;
            var pickup = document.getElementById("pickup").value;
            var drop = document.getElementById("drop").value;
            var cartype = document.getElementById("select2").value;
            var date = document.getElementById("date").value;
            alert(date);
            if(name == "" ){
            alert("Please Enter Name");
            return false;
            }
            else if(phone == "" ){
            alert("Please Enter Phone Number");
            return false;
            }
            if(email == "" ){
            alert("Please Email Id");
            return false;
            }
            else if(type == "" ){
            alert("Please Enter Ride Type");
            return false;
            }
            else if(pickup == "" ){
            alert("Please Enter Pickup Point");
            return false;
            }
            else if(drop == "" ){
            alert("Please Enter Drop Point");
            return false;
            }
            else if(cartype == "" ){
            alert("Please Enter Car Type");
            return false;
            }else if(date == "" ){
            alert("Please Select Date");
            return false;
            }
            else{        
            $.ajax({
                url: "post_trip.php",
                method: "POST",
                data: {
                    name:name,
                    phone:phone,
                    email:email,
                    type:type,
                    pickup:pickup,
                    drop:drop,
                    cartype:cartype,
                    date:date
                    
                },
                success: function(data){
                    // alert("Driver created succefully.");
                    swal("Thank You!", "We Get Back to You Soon...", "success");
                },
                error: function(data) {
                    console.error("Error submitting form:", error);
                } 
            });
            }
        });
              
            
    </script> -->
    <script>
        // $(document).ready(function(){
        //     $("#menuone").click(function(){
        //         // alert('one');
        //         $("#car_header").text('Innvoa Crysta');
        //     });
        //     $("#menutwo").click(function(){
        //         // alert('twoe');
        //         $("#car_header").text('Eritiga');
        //     });
        //     $("#menuthree").click(function(){
        //         // alert('twoe');
        //         $("#car_header").text('Swift');
        //     })
        //     $("#menufour").click(function(){
        //         // alert('twoe');
        //         $("#car_header").text('Etios');
        //     })
        //     $("#menufive").click(function(){
        //         // alert('twoe');
        //         $("#car_header").text('Ciaz');
        //     })
        //     $("#menusix").click(function(){
        //         // alert('twoe');
        //         $("#car_header").text('Sedan');
        //     })
        // });
        $("#select1").change(function(){
            var value = $('#select1').val();
            if(value == "Airport"){
                // $('.pickup').hide();
                document.getElementById("pickupclass").style.display = "none";
                document.getElementById("dropclass").style.display = "none";
                // $('.drop').hide();
                document.getElementById("pickup").value = "Airport";
                document.getElementById("drop").value = "City";

            }else{
                document.getElementById("pickupclass").style.display = "";
                document.getElementById("dropclass").style.display = "";
                document.getElementById("pickup").value = "";
                document.getElementById("drop").value = "";
            }
        });


    </script>
</body>

</html>