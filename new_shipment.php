<?php
include_once('includes/db_connection.php'); 

// default time
date_default_timezone_set("Asia/Kolkata");
  $date = date("m/d/Y H:i:s");
  $now =  date_format(date_create($date), 'Y-m-d H:i:s');

  if(isset($_POST['submit'])){



    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email_address'];
    $order_weight=$_POST['order_weight'];
    $dimension=$_POST['dimension'];
    $pickup_zipcode=$_POST['p_zipcode'];
    $drop_zipcode=$_POST['d_zipcode'];
    $last_status=$_POST['status'];
    $awb="AWB".mt_rand(1000, 9999);
#insert to db
$data= mysqli_query($con,"INSERT INTO project(f_name,l_name,phone_number,email_id,order_weight,dimension,pickup_zipcode,drop_zipcode,date_time_stamp,awb) 
VALUE ('$f_name','$l_name','$phone_number','$email','$order_weight','$dimension','$pickup_zipcode','$drop_zipcode','$now','$awb')");
    if(!$data){
        echo "Error: " . mysqli_error($con);
    }

    header('location: order_dispatched.php');
}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Logistics Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Logistics Management" name="description" />
    <meta content="Logistics Management" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>


    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-md-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="AWB Search..." autocomplete="off" id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon"></span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->

                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <?php include_once('includes/sidebar.php') ?>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <!--end row-->

                                <div class="row">

                                <form action="#" method="post">
    <div class="row g-3">
        <div class="col-lg-6">
            <div class="form-floating">
                <input type="text" name="f_name" class="form-control" id="firstnamefloatingInput" placeholder="Enter your firstname" required>
                <label for="firstnamefloatingInput">First Name</label>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-floating">
                <input type="text" name="l_name" class="form-control" id="lastnamefloatingInput" placeholder="Enter your Lastname" required>
                <label for="lastnamefloatingInput">Last Name</label>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-floating">
                <input type="number" name="phone_number" class="form-control" id="lastnamefloatingInput" placeholder="Enter your Lastname" required>
                <label for="lastnamefloatingInput">Phone_number</label>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-floating">
                <input type="email" name="email_address" class="form-control" id="emailfloatingInput" placeholder="Enter your email" required>
                <label for="emailfloatingInput">Email Address</label>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-floating">
                <select class="form-select" name="order_weight" id="floatingSelect" aria-label="Floating label select example" required>
                    <option selected>Less than 1 Kg</option>
                    <option value="1-2 Kg">1-2 Kg</option>
                    <option value="2-5 Kg">2-5 Kg</option>
                    <option value="5-7 Kg">5-7 Kg</option>
                    <option value="7-10 Kg">7-10 Kg</option>

                </select>
                <label for="floatingSelect">Weight</label>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-floating">
                <input type="text" name="dimension" class="form-control" id="passwordfloatingInput" placeholder="Enter your password">
                <label for="passwordfloatingInput">Dimension</label>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-floating">
                <input type="text" name="p_zipcode" class="form-control" id="cityfloatingInput" placeholder="Enter your city" required>
                <label for="cityfloatingInput">Pickup Zipcode</label>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-floating">
                <input type="number" name="d_zipcode" class="form-control" id="zipfloatingInput" placeholder="Enter your zipcode" required>
                <label for="zipfloatingInput">Drop Zipcode</label>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="text-end">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>



                        <!-- end col -->
                    </div>

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>
</html>