<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sky Dise</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="google-site-verification" content="V8qUtpsj3PhXQWOkNW7D2IqtH699-w8cEqg_LCJmbVA" />

    <!-- Favicon -->
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png"> -->
    <link href="images/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start new-->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <?php include "navbar.php";?>
        <!-- Header End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="images/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">SkyDise</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Your Journey, Our Expertise.</h1>
                                <a href="booking" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book Now</a>
                                <a href="booking" class="btn btn-light py-md-3 px-md-5 animated slideInRight">View Trips</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="images/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Happy Rides</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">"Discover the World with Us!"</h1>
                                <a href="booking" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book Now</a>
                                <a href="booking" class="btn btn-light py-md-3 px-md-5 animated slideInRight">View Trips</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
                <!-- Booking Start -->
                <form method="post">
                <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date">
                                    <input type="text" class="form-control" id="phone" name="phone"autocomplete="off" placeholder="Mobile Number" maxlength="12" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="Your Email" required>
                                </div>
                                <div class="col-md-3">
                                <select class="form-select" id="select1" name="type" required>
                                    <option value="0">Select</option>
                                    <option value="Airport">Airpot Trip</option>
                                    <option value="Package">Package</option>
                                    <option value="Outstation">Outstation</option>
                                </select>
                                </div>
                                <div class="col-md-3" id="pickupclass"style="display: none;">
                                    <input type="text" class="form-control" id="pickup" name="pickup" autocomplete="off" placeholder="Pickup Location" required>
                                </div>
                                <div class="col-md-3" id="dropclass" style="display: none;">
                                <input type="text" class="form-control" id="drop" name="drop" autocomplete="off" placeholder="Drop Location" required>
                                </div>
                                <div class="col-md-3">
                                <select class="form-select" id="select2" name="cartype" required>
                                    <option value="0">Select</option>
                                    <option value="Crysta">Innova Crysta</option>
                                    <option value="Eritiga">Eritiga</option>
                                    <option value="Sedan">Sedan</option>
                                </select>
                                </div>
                                <div class="col-md-3 date" id="date3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" id="date" name="date" placeholder="Date of Ride" data-target="#date3" data-toggle="datetimepicker" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100"  type="submit" id="book" name="book">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
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
                // $date=$_POST['date'];
                // $message=$_POST['message'];
                $sql="insert into requested_trips(name,phone,email,type,pickup,drop_location,cartype,date,status) values('$name','$phone','$email','$type','$pickup','$drop', '$cartype','$date','$status')";
                $result=mysqli_query($conn,$sql);
                if($result)
                {   
                    // header('Location:booking');
                    echo '<script>swal("Thank You!", "We Get Back to You Soon...", "success");</script>';
                    // header('Location:index');
                }
                else
                {
                    die(mysqli_error($conn));
                }
            } 
        ?>
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">SkyDise</span></h1>
                        <p class="mb-4">Discover our world of personalized travel experiences. As a dedicated travel agency, we craft journeys that suit your wanderlust. With a passion for exploration, our expert team ensures every detail is taken care of, letting you embark on unforgettable adventures with confidence. Your dream destinations are just a booking away.</p>
                    
                        <a class="btn btn-primary py-3 px-5 mt-2" href="service">Explore More</a>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- About End -->

        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3">SkyDise</h6>
                        <h1 class="text-white mb-4">Your gateway to unforgettable journeys and experiences.</h1>
                        <p class="text-white mb-4">Embark on unforgettable journeys with us. Expert travel planning, personalized experiences, and global destinations. Your adventure begins here.</p>
                        <a href="booking" class="btn btn-primary py-md-3 px-md-5 me-3">Tour Packages</a>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Modal for eritiga -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Trip Details of Ertiga (6+1 Seater)</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <b class="text-dark">AIRPORT TRIP  [Airport ⇌ City]</b><br>
                <span class="text-success"><b>₹2200</b></span><br><hr>
                
                <b class="text-dark">PACKAGE</b><br>
                <span class="text-dark">8hrs 80km - <b  class="text-success">₹3200</b></span><br>
                <span class="text-dark">Extra KM - <b class="text-success">₹16</b>, Extra Hour - <b class="text-success">₹175</b><span><br><hr>
                
                <b class="text-dark">OUTSTATION</b><br>
                <span class="text-dark"><b class="text-success">₹16/km</b></span><br>
                <span class="text-dark">Driver Bata - <b class="text-success">₹400</b><br>
                <span class="text-dark">[300km Per Day]</span><br>
                [Night After 10:00 PM - <b class="text-success">₹400</b>]</span><br>
                <span class="text-dark">Toll, Parking Extra</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Book Now</button> -->
                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="booking">Book Now</a>
            </div>
            </div>
        </div>
        </div>
            <!-- eritiga model end -->
            <!-- Modal for crysta -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Trip Details of Innova Crysta (7+1 Seater)</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <b class="text-dark">AIRPORT TRIP  [Airport ⇌ City]</b><br>
                <span class="text-success"><b>₹2500</b></span><br><hr>
                
                <b class="text-dark">PACKAGE</b><br>
                <span class="text-dark">8hrs 80km - <b  class="text-success">₹3500</b></span><br>
                <span class="text-dark">Extra KM - <b class="text-success">₹20</b>, Extra Hour - <b class="text-success">₹200</b><span><br><hr>
                
                <b class="text-dark">OUTSTATION</b><br>
                <span class="text-dark"><b class="text-success">₹19/km</b></span><br>
                <span class="text-dark">Driver Bata - <b class="text-success">₹400</b><br>
                <span class="text-dark">[300km Per Day]</span><br>
                [Night After 10:00 PM - <b class="text-success">₹400</b>]</span><br>
                <span class="text-dark">Toll, Parking Extra</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Book Now</button> -->
                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="booking">Book Now</a>
            </div>
            </div>
        </div>
        </div>
            <!-- crysta model end -->
            <!-- Modal for sedan -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Trip Details of Sedan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <b class="text-dark">AIRPORT TRIP  [Airport ⇌ City]</b><br>
                <span class="text-success"><b>₹1500</b></span><br><hr>
                
                <b class="text-dark">PACKAGE</b><br>
                <span class="text-dark">8hrs 80km - <b  class="text-success">₹2000</b></span><br>
                <span class="text-dark">Extra KM - <b class="text-success">₹12</b>, Extra Hour - <b class="text-success">₹150</b><span><br><hr>
                
                <b class="text-dark">OUTSTATION</b><br>
                <span class="text-dark"><b class="text-success">₹12/km</b></span><br>
                <span class="text-dark">Driver Bata - <b class="text-success">₹400</b><br>
                <span class="text-dark">[300km Per Day]</span><br>
                [Night After 10:00 PM - <b class="text-success">₹400</b>]</span><br>
                <span class="text-dark">Toll, Parking Extra</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Book Now</button> -->
                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="booking">Book Now</a>
            </div>
            </div>
        </div>
        </div>
            <!-- sedan model end -->
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Vehicle Overview</h6>
                    <h1 class="mb-5">Explore the <span class="text-primary text-uppercase">Rides</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="images/inova.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">SUV</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><small><i class="fa-solid fa-taxi text-primary me-2"></i></small>Innova Crysta</h5>
                                    <!-- <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div> -->
                                </div>
                               <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-clock text-primary me-2"></i>8 Hour</small>
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-road text-primary me-2"></i>80 Kilometers</small>
                                    <small><i class="fa-solid fa-indian-rupee-sign text-primary me-2"></i>3500</small>
                                </div>
                                <p class="text-body mb-3">Spacious XL Comfort Ride</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="" id="menuone" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="images/eritiga.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">SUV</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><small><i class="fa-solid fa-taxi text-primary me-2"></i></small>Eritiga</h5>
                                    <!-- <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div> -->
                                </div>
                               <div class="d-flex mb-3">
                               <small class="border-end me-3 pe-3"><i class="fa-solid fa-clock text-primary me-2"></i>8 Hour</small>
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-road text-primary me-2"></i>80 Kilometers</small>
                                    <small><i class="fa-solid fa-indian-rupee-sign text-primary me-2"></i>2800</small>
                                </div>
                                <p class="text-body mb-3">Spacious, Versatile XL Vehicles</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="" id="menutwo" data-bs-toggle="modal" data-bs-target="#exampleModal1">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="images/swift.png" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Prime</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><small><i class="fa-solid fa-taxi text-primary me-2"></i></small>Swift Dzire</h5>
                                    <!-- <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div> -->
                                </div>
                               <div class="d-flex mb-3">
                               <small class="border-end me-3 pe-3"><i class="fa-solid fa-clock text-primary me-2"></i>8 Hour</small>
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-road text-primary me-2"></i>80 Kilometers</small>
                                    <small><i class="fa-solid fa-indian-rupee-sign text-primary me-2"></i>2000</small>
                                </div>
                                <p class="text-body mb-3">Smooth, stylish, four-door comfort.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="" id="menuthree" data-bs-toggle="modal" data-bs-target="#exampleModal3">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="images/etios.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Prime</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><small><i class="fa-solid fa-taxi text-primary me-2"></i></small>Etios</h5>
                                    <!-- <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div> -->
                                </div>
                               <div class="d-flex mb-3">
                               <small class="border-end me-3 pe-3"><i class="fa-solid fa-clock text-primary me-2"></i>8 Hour</small>
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-road text-primary me-2"></i>80 Kilometers</small>
                                    <small><i class="fa-solid fa-indian-rupee-sign text-primary me-2"></i>2000</small>
                                </div>
                                <p class="text-body mb-3">Efficient, Compact, Stylish Sedan</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="" id="menufour" data-bs-toggle="modal" data-bs-target="#exampleModal3">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="images/ciaz.webp" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Prime</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><small><i class="fa-solid fa-taxi text-primary me-2"></i></small>Ciaz</h5>
                                    <!-- <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div> -->
                                </div>
                               <div class="d-flex mb-3">
                               <small class="border-end me-3 pe-3"><i class="fa-solid fa-clock text-primary me-2"></i>8 Hour</small>
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-road text-primary me-2"></i>80 Kilometers</small>
                                    <small><i class="fa-solid fa-indian-rupee-sign text-primary me-2"></i>2000</small>
                                </div>
                                <p class="text-body mb-3">Compact, Stylish, Reliable Sedan.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="" id="menufive" data-bs-toggle="modal" data-bs-target="#exampleModal3">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="images/swift_plus.jpeg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Prime</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><small><i class="fa-solid fa-taxi text-primary me-2"></i></small>Prime</h5>
                                    <!-- <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div> -->
                                </div>
                               <div class="d-flex mb-3">
                               <small class="border-end me-3 pe-3"><i class="fa-solid fa-clock text-primary me-2"></i>8 Hour</small>
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-road text-primary me-2"></i>80 Kilometers</small>
                                    <small><i class="fa-solid fa-indian-rupee-sign text-primary me-2"></i>2000</small>
                                </div>
                                <p class="text-body mb-3">Sleek, stylish, four doors.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="" id="menusix" data-bs-toggle="modal" data-bs-target="#exampleModal3">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">SkyDise</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-plane fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">AirPort Trips</h5>
                            <p class="text-body mb-0">Seamless airport transfers: Reach your destination stress-free with our reliable and comfortable transportation services.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-taxi fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Package Trips</h5>
                            <p class="text-body mb-0">Explore enticing destinations hassle-free with our curated package trips. Unforgettable experiences await you.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-mountain-sun fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Outstation</h5>
                            <p class="text-body mb-0">Escape city life with our curated outstation trips, exploring nature's beauty and cultural treasures.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-map-location-dot fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">City Trips</h5>
                            <p class="text-body mb-0">Experience urban wonders with our curated city trips. Unveil culture, history, and vibrant destinations.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-user-tie fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Corporate Travel</h5>
                            <p class="text-body mb-0">"Elevate teamwork and success with seamless corporate travel solutions for productive and memorable business journeys.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-calendar-check fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Special Events</h5>
                            <p class="text-body mb-0">Embark on unique journeys to celebrate milestones with our curated special events travel packages.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

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