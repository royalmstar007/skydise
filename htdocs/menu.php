<!DOCTYPE html>
<html lang="en">

<head>
    <meta charlightf-8">
    <title>SkyDise</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon">

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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Food Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

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
                                    <small><i class="fa-solid fa-indian-rupee-sign text-primary me-2"></i>Amount</small>
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
</body>

</html>