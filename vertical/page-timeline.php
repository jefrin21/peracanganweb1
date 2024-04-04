<?php
include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
?>


    <body>

        <!-- Top Bar Start -->
        <?php
        include 'navbar.php';
        ?>

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right align-item-center mt-2">
                                <button class="btn btn-info px-4 align-self-center report-btn">Create Report</button>
                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-timetable mr-2"></i>Timeline</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Timeline</li>
                                </ol>
                            </div>                                      
                        </div><!--end page title box-->
                    </div><!--end col-->
                </div><!--end row-->
                <!-- end page title end breadcrumb -->
            </div><!--end page-wrapper-img-inner-->
        </div><!--end page-wrapper-img-->
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                <?php
                include 'menu.php';
                ?>

                <!-- end left-sidenav-->

                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-timeline">
                                    <div class="timeline">
                                        <a href="#" class="timeline-content">
                                            <div class="timeline-icon">
                                                <i class="fas fa-trophy"></i>
                                            </div>
                                            <div class="inner-content">
                                                <h3 class="title">Best Company Of The Year </h3>
                                                <p class="description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo
                                                </p>
                                            </div>
                                            <div class="timeline-year"><span>2019</span></div>
                                        </a>
                                    </div>
                                    <div class="timeline">
                                        <a href="#" class="timeline-content">
                                            <div class="timeline-icon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <div class="inner-content">
                                                <h3 class="title">Employee Of The Year</h3>
                                                <p class="description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo
                                                </p>
                                            </div>
                                            <div class="timeline-year"><span>2018</span></div>
                                        </a>
                                    </div>
                                    <div class="timeline">
                                        <a href="#" class="timeline-content">
                                            <div class="timeline-icon">
                                                <i class="far fa-building"></i>
                                            </div>
                                            <div class="inner-content">
                                                <h3 class="title">Start Our Company</h3>
                                                <p class="description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo
                                                </p>
                                            </div>
                                            <div class="timeline-year"><span>2017</span></div>
                                        </a>
                                    </div>
                                    <div class="timeline">
                                        <a href="#" class="timeline-content">
                                            <div class="timeline-icon">
                                                <i class="fas fa-user-graduate"></i>
                                            </div>
                                            <div class="inner-content">
                                                <h3 class="title">Education Complete</h3>
                                                <p class="description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo
                                                </p>
                                            </div>
                                            <div class="timeline-year"><span>2016</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div><!-- container -->

                    <?php
                    include 'footer.php';
                    ?>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>