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
                            <h4 class="page-title mb-2"><i class="mdi mdi-account mr-2"></i>Profile</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Customer Data</li>
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body border-bottom">
                                        <div class="fro_profile">
                                            <div class="row">
                                                <div class="col-lg-4 mb-3 mb-lg-0">
                                                    <div class="fro_profile-main">
                                                        <div class="fro_profile_user-detail">
                                                            <h5 class="fro_user-name">Customer Data List</h5>
                                                            <p class="mb-0 fro_user-name-post">of Makan Terus</p>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->

                                            </div><!--end row-->
                                        </div><!--end f_profile-->                                                                                
                                    </div><!--end card-body-->

                          
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                                <div class="card">
                                    <div class="card-body">

                                        <div class="row mx-2 my-4">
                                            <h4 class="mt-0 header-title">Edit Customer Data</h4>   
                                            <button class="btn-success px-4 rounded-lg col-auto ml-auto" name="return" onclick="window.location.href='page-customerlist.php'"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp; Kembali</button>
                                        </div>

                                        <form  action="process-customeradd.php" method="post">
                                            <table class="table border">
                                                <tr>
                                                    <td>ID Pelanggan</td>
                                                    <td>:</td>
                                                    <td>
                                                        <input class="form-control form-control-lg" type="text" name="Pelangganid" required >
                                                    </td> 				
                                                </tr>
                                                
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>:</td>
                                                    <td>
                                                        <input class="form-control form-control-lg" type="text" name="Nama" required >
                                                    </td> 				
                                                </tr>	
                                                
                                                <tr>
                                                    <td>Email</td>
                                                    <td>:</td>
                                                    <td><input class="form-control form-control-lg" type="text" name="Email"  required >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>No. Telepon</td>
                                                    <td>:</td>
                                                    <td><input class="form-control form-control-lg" type="text" name="Telepon"  required >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>:</td>
                                                    <td><input class="form-control form-control-lg" type="text" name="Alamat"  required >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Tanggal Lahir</td>
                                                    <td>:</td>
                                                    <td><input class="form-control form-control-lg" type="date" name="TanggalLahir"  required >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Gender</td>
                                                    <td>:</td>
                                                    <td>
                                                        <select class="form-control form-control-lg py-1" name="Gender">

                                                            <option value="Laki-Laki"> 
                                                            Laki-Laki
                                                            </option>

                                                            <option value="Perempuan"> 
                                                            Perempuan
                                                            </option>

                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Point</td>
                                                    <td>:</td>
                                                    <td><input class="form-control form-control-lg" type="text" name="Points">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <input class="btn-success px-4 py-2 rounded-lg" type="submit" name="tambah" value="TAMBAH CUSTOMER" >
                                                    </td>
                                                </tr>

                                                
                                            </table>
                                        </form>
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