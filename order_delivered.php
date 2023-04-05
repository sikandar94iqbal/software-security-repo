<?php include_once('includes/db_connection.php'); ?>
<?php include_once('includes/header.php'); ?>

        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->

                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>
<?php include_once('includes/sidebar.php'); ?>

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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Manage </h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm-auto">
                                                <div>
                                                </div>
                                            </div>
                                        
                                        <div class="table-responsive table-card mt-3 mb-1">
                                            <table class="table align-middle table-nowrap" id="customerTable" aria-describedby="customerTableDesc">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="sort" data-sort="customer_name">Full Name</th>
                                                        <th class="sort" data-sort="email">Pickup Zipcode</th>
                                                        <th class="sort" data-sort="phone">Drop Zipcode</th>
                                                        <th class="sort" data-sort="date">AWB Number</th>
                                                        <th class="sort" data-sort="status">Phone Number</th>
                                                        <th class="sort" data-sort="action">Weight</th>
                                                        <th class="sort" data-sort="action">Dimension</th>
                                                        <th class="sort" data-sort="action">Date_time</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                <?php
                                                        $orders=mysqli_query($con,"SELECT project.f_name, project.l_name, project.pickup_zipcode, project.drop_zipcode, project.awb, project.phone_number, project.order_weight, project.dimension, 
                                                        timeline.date_time_stamp FROM project INNER JOIN timeline WHERE status='Delivered' ORDER BY date_time_stamp DESC");
                                                        while ($rows=mysqli_fetch_array($orders)) { 
                                                        ?>
                                                    <tr>
                                                        <td class="customer_name"><?= $rows['f_name'];?> . <?= $rows['l_name'];?></td>
                                                        <td class="email"><?= $rows['pickup_zipcode'];?></td>
                                                        <td class="date"><?= $rows['drop_zipcode']; ?></td>
                                                        <td class="customer_name"><?= $rows['awb']; ?></td>
                                                        <td class="email"><?= $rows['phone_number'];?></td>
                                                        <td class="phone"><?= $rows['order_weight'];?></td>
                                                        <td class="date"><?= $rows['dimension'];?></td>
                                                        <td class="phone"><?= $rows['date_time_stamp'];?></td>
                                                       
                                                    </tr>
                                                   <?php } ?>
                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled" href="javascrpit:void(0)">
                                                    Previous
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="javascrpit:void(0)">
                                                    Next
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
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