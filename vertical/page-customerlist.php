<?php
session_start();
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
                            <h4 class="page-title mb-2"><i class="mdi mdi-account mr-2"></i>Customer Data</h4>  
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
                                            <div class="app-search ml-5 my-n5 mr-5 col-auto">
                                                <form method="GET" role="search" class="">
                                                    <div class="d-flex">
                                                        <input type="text" name="search" placeholder="Search..." value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control">
                                                        <button type="submit" class="btn ml-n5"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <button class="btn-success px-4 rounded-lg col-auto ml-5 mt-n2 text-right" name="return" onclick="window.location.href='page-customeradd.php'"><i class="fas fa-plus"></i>&nbsp;&nbsp; Tambah Customer</button>
                                        </div>
                                        <table class="table border mb-3" >
                                            <tr style="color:#5d5b6f">
                                                <td><b>ID</b></td>
                                                <td><b>Nama</b></td>
                                                <td><b>Email</b></td>
                                                <td><b>Telepon</b></td>
                                                <td><b>Alamat</b></td>
                                                <td><b>Tanggal Lahir</b></td>
                                                <td><b>Gender</b></td>
                                                <td><b>Point</b></td>
                                                <td><b>Atur</b></td>
                                            </tr>

                                            <?php

                                                if(isset($_GET['search'])){
                                                    
                                               
                                                    $filter = $_GET['search'];
                                                    $query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE CONCAT(PelangganID, Nama, Email, Telepon) LIKE '%$filter%'");

                                
                                                    if (mysqli_num_rows($query) > 0) {

                                                        foreach($query as $data){
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $data['PelangganID']; ?>      </td>
                                                                    <td><?php echo $data['Nama']; ?>    </td>
                                                                    <td><?php echo $data['Email']; ?>   </td>
                                                                    <td><?php echo $data['Telepon']; ?>   </td>
                                                                    <td><?php echo $data['Alamat']; ?>   </td>
                                                                    <td><?php echo $data['TanggalLahir']; ?>   </td>
                                                                    <td><?php echo $data['Gender']; ?>   </td>
                                                                    <td><?php echo $data['Points']; ?>   </td>
                                                                    <td>
                                                                        <a href="page-customeredit.php?id=<?php echo $data['PelangganID']; ?>">
                                                                            <button class="btn btn-block btn-success my-2"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp; Ubah</button>
                                                                        </a>
                                                                        
                                                                        <a href="process-customerdelete.php?id=<?php echo $data['PelangganID']; ?>">
                                                                            <button class="btn btn-block btn-success my-2" onclick="return confirm('Apakah Anda yakin akan menghapus data?')"><i class="fas fa-trash"></i>&nbsp;&nbsp; Hapus</button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            <?php
                                                        }
                                            
                                                        
                                            
                                                    }

                                                    else {
                                                        ?>
                                                        <tr>
                                                            <td colspan="8">Data tidak ditemukan</td>
                                                        </tr>
                                                        <?php
                                                    }
                                                } 
                                                
                                                else {
                                                    // If search query is not provided, show all data
                                                    $query = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                                                
                                                    if(mysqli_num_rows($query) > 0) {
                                                        foreach($query as $data) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $data['PelangganID']; ?></td>
                                                                <td><?php echo $data['Nama']; ?></td>
                                                                <td><?php echo $data['Email']; ?></td>
                                                                <td><?php echo $data['Telepon']; ?></td>
                                                                <td><?php echo $data['Alamat']; ?></td>
                                                                <td><?php echo $data['TanggalLahir']; ?></td>
                                                                <td><?php echo $data['Gender']; ?></td>
                                                                <td><?php echo $data['Points']; ?></td>
                                                                <td>
                                                                    <a href="page-customeredit.php?id=<?php echo $data['PelangganID']; ?>">
                                                                        <button class="btn btn-block btn-success my-2"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp; Ubah</button>
                                                                    </a>
                                                                    
                                                                    <a href="process-customerdelete.php?id=<?php echo $data['PelangganID']; ?>">
                                                                        <button class="btn btn-block btn-success my-2" onclick="return confirm('Apakah Anda yakin akan menghapus data?')"><i class="fas fa-trash"></i>&nbsp;&nbsp; Hapus</button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                    } 
                                                    
                                                    else {
                                                        ?>
                                                        <tr>
                                                            <td colspan="8">Data tidak ditemukan</td>
                                                        </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                        </table>
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