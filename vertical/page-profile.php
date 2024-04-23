<?php
include 'koneksi.php';
session_start();
$currentUser = $_SESSION['userID'];
$query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE KaryawanID ='$currentUser'");
$catchdata = mysqli_fetch_assoc($query);
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
                    <div class="col-sm-12 mt-n5">
                        <div class="page-title-box">
                            <h4 class="page-title mb-2"><i class="mdi mdi-account mr-2"></i>Profile</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Makan Terus</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>                                      
                        </div><!--end page title box-->
                    </div><!--end col-->
                </div><!--end row-->
                <!-- end page title end breadcrumb -->
            </div><!--end page-wrapper-img-inner-->
        </div><!--end page-wrapper-img-->
        
        <div class="page-wrapper mt-n5">
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body border-bottom">
                                        <div class="fro_profile">
                                            <div class="row">
                                                <div class="col-lg-11 d-flex">
                                                    <div class="mr-5 align-items-center">
                                                        <div class="rounded-circle border border-dark bg-secondary" style="width: 130px; height: 130px;">
                                                        <?php 
                                                            $jk = $catchdata['Gender'];
                                                                if($jk==0){?>
                                                                    <img src="assets/images/userMan.png" alt="user" class="rounded-circle img-thumbnail mb-1">
                                                                    <?php 
                                                                }
                                                            
                                                                else {?>
                                                                    <img src="assets/images/userWoman.png" alt="user" class="rounded-circle img-thumbnail mb-1">
                                                                    <?php 
                                                                } ?>
                                                        </div>
                                                    </div>
                                                    <div class="align-items-center d-flex">
                                                        <div class="fro_profile-main">
                                                            <div class="fro_profile_user-detail">
                                                                <h5 class="fro_user-name">
                                                                    <?php 
                                                                        echo $catchdata['Nama'];
                                                                    ?>
                                                                </h5>
                                                                <p class="mb-0 fro_user-name-post">
                                                                    <?php 
                                                                        echo $catchdata['Posisi'];
                                                                    ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                            </div><!--end row-->
                                        </div><!--end f_profile-->                                                                                
                                    </div><!--end card-body-->

                          
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-3">Contact</h4>   
                                        <ul class="list-unstyled mb-0">
                                            <li class="mt-2"><i class="mdi mdi-map-marker text-success font-18 mt-2 mr-2"></i> <b>ID</b> : 
                                                <?php 
                                                    echo $catchdata['KaryawanID'];
                                                ?>
                                            </li>
                                            <li class=""><i class="mdi mdi-phone mr-2 text-success font-18"></i> <b> Phone </b> : 
                                                <?php 
                                                    echo $catchdata['Telepon'];
                                                ?>
                                            </li>
                                            <li class="mt-2"><i class="mdi mdi-email-outline text-success font-18 mt-2 mr-2"></i> <b> Email </b> : 
                                                <?php 
                                                    echo $catchdata['Email'];
                                                ?>
                                            </li>
                                        </ul>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <?php
                                include 'footer.php';
                            ?>
                        </div><!--end row-->               
                    </div><!-- container -->

                   
         

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="assets/plugins/dropify/js/dropify.min.js"></script>
        <script src="assets/plugins/ticker/jquery.jConveyorTicker.min.js"></script>
        <script src="assets/plugins/peity-chart/jquery.peity.min.js"></script>
        <script src="assets/plugins/chartjs/chart.min.js"></script>
        <script src="assets/pages/jquery.profile.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>