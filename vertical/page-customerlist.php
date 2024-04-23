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
                                                <div class="col-lg-6 mb-3 mb-lg-0">
                                                    <div class="fro_profile-main">
                                                        <div class="fro_profile_user-detail">
                                                            <h5 class="fro_user-name">Customer Data List</h5>
                                                            <p class="mb-0 fro_user-name-post">of Makan Terus</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=" d-flex justify-content-end col-lg-6 d-flex">
                                                    <button class="btn-success px-4 rounded-lg my-3" name="add" onclick="window.location.href='page-customeradd.php'"><i class="fas fa-plus"></i>&nbsp;&nbsp; Tambah Customer</button>
                                                </div>
                                            </div><!--end row-->
                                        </div><!--end f_profile-->                                                                                
                                    </div><!--end card-body-->

                          
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mt-3 mb-5 justify-content-center">

                                            <div class="app-search d-flex">
                                                <form method="GET" role="search" class="">
                                                    <div class="d-flex">
                                                        <input type="text" name="search" placeholder="Search..." value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control">
                                                        <button type="submit" class="btn ml-n5"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>      

                                        <div class="row">

                                            <?php

                                                if(isset($_GET['search'])){
                                                    
                                               
                                                    $filter = $_GET['search'];
                                                    $query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE CONCAT(PelangganID, Nama, Email, Telepon) LIKE '%$filter%'");
                                
                                                    if (mysqli_num_rows($query) > 0) {

                                                        foreach($query as $data){
                                                            ?>

                                                            <div class="col-lg-3">
                                                                <div class="card profile-card">
                                                                    <div class="card-body bg-primary p-0">
                                                                        <div class="media p-3  align-items-center">                     
                                                                        <?php 
                                                                                $jd = $data['Gender'];
                                                                                if($jd==0){?>
                                                                                    <img src="assets/images/userMan.png" alt="user" class="rounded-circle thumb-lg ml-2">
                                                                                    <?php 
                                                                                }
                                                                            
                                                                                else {?>
                                                                                    <img src="assets/images/userWoman.png" alt="user" class="rounded-circle thumb-lg ml-2">
                                                                                    <?php 
                                                                                } 
                                                                            ?>                        
                                                                            <div class="media-body ml-3 align-self-center">
                                                                                <h5 class="mb-1 ml-2 text-white"><?php echo $data['Nama']; ?></h5>
                                                                                <p class="mb-0 ml-2 font-12 text-white"><?php echo $data['Email']; ?></p>                                                    
                                                                            </div>
                                                                        </div>
                                                                    </div><!--end card-body-->   

                                                                    <div class="card-body ml-n1 mb-n5">
                                                                        <table class="table">
                                                                            <tr>
                                                                                <td>Points</td>
                                                                                <td>:</td>
                                                                                <td><?php echo $data['Points']; ?></td> 				
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Telepon</td>
                                                                                <td>:</td>
                                                                                <td><?php echo $data['Telepon']; ?></td> 				
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Alamat</td>
                                                                                <td>:</td>
                                                                                <td><?php echo $data['Alamat']; ?></td> 				
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tanggal Lahir</td>
                                                                                <td>:</td>
                                                                                <td><?php echo $data['TanggalLahir']; ?></td> 				
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Gender</td>
                                                                                <td>:</td>
                                                                                <td>
                                                                                <?php 
                                                                                        $jf = $data['Gender'];
                                                                                        if ($jf == 0){?>
                                                                                            Laki-Laki
                                                                                            <?php 
                                                                                        }
                                                                                    
                                                                                        else {?>
                                                                                            Perempuan
                                                                                            <?php 
                                                                                        } 
                                                                                    ?>    
                                                                                </td> 				
                                                                            </tr>
                                                                        </table>
                                                                    </div><!--end card-body-->   

                                                                    <div class="card-body pb-0 px-0">
                                                                        <div class="row text-center border-top m-0">
                                                                            <div class="col-6 border-right py-3">
                                                                                <a href="page-customeredit.php?id=<?php echo $data['PelangganID']; ?>">
                                                                                    <button class="btn btn-block btn-success my-2"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp; Ubah</button>
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-6 border-right py-3">
                                                                                <a href="process-customerdelete.php?id=<?php echo $data['PelangganID']; ?>">
                                                                                    <button class="btn btn-block btn-success my-2" onclick="return confirm('Apakah Anda yakin akan menghapus data?')"><i class="fas fa-trash"></i>&nbsp;&nbsp; Hapus</button>
                                                                                </a>
                                                                            </div>
                                                                        </div><!--end row--> 
                                                                    </div><!--end card-body--> 

                                                                </div><!--end card--> 
                                                            </div><!--end col-->
          
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

                                                            <div class="col-lg-3">
                                                                <div class="card profile-card">
                                                                    <div class="card-body bg-primary p-0">
                                                                        <div class="media p-3  align-items-center">                                                
                                                                            <?php 
                                                                                $jd = $data['Gender'];
                                                                                if($jd == 0){?>
                                                                                    <img src="assets/images/userMan.png" alt="user" class="rounded-circle thumb-lg ml-2">
                                                                                    <?php 
                                                                                }
                                                                            
                                                                                else {?>
                                                                                    <img src="assets/images/userWoman.png" alt="user" class="rounded-circle thumb-lg ml-2">
                                                                                    <?php 
                                                                                } 
                                                                            ?>   
                                                                            <div class="media-body ml-3 align-self-center">
                                                                                <h5 class="mb-1 ml-2 text-white"><?php echo $data['Nama']; ?></h5>
                                                                                <p class="mb-0 ml-2 font-12 text-white"><?php echo $data['Email']; ?></p>                                                    
                                                                            </div>
                                                                        </div>
                                                                    </div><!--end card-body-->   

                                                                    <div class="card-body ml-n1 mb-n5">
                                                                        <table class="table">
                                                                            <tr>
                                                                                <td>Points</td>
                                                                                <td>:</td>
                                                                                <td><?php echo $data['Points']; ?></td> 				
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Telepon</td>
                                                                                <td>:</td>
                                                                                <td><?php echo $data['Telepon']; ?></td> 				
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Alamat</td>
                                                                                <td>:</td>
                                                                                <td><?php echo $data['Alamat']; ?></td> 				
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tanggal Lahir</td>
                                                                                <td>:</td>
                                                                                <td><?php echo $data['TanggalLahir']; ?></td> 				
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Gender</td>
                                                                                <td>:</td>
                                                                                <td>
                                                                                    <?php 
                                                                                        $jf = $data['Gender'];
                                                                                        if ($jf == 0){?>
                                                                                            Laki-Laki
                                                                                            <?php 
                                                                                        }
                                                                                    
                                                                                        else {?>
                                                                                            Perempuan
                                                                                            <?php 
                                                                                        } 
                                                                                    ?>    
                                                                                </td> 				
                                                                            </tr>
                                                                        </table>
                                                                    </div><!--end card-body-->   

                                                                    <div class="card-body pb-0 px-0">
                                                                        <div class="row text-center border-top m-0">
                                                                            <div class="col-6 border-right py-3">
                                                                                <a href="page-customeredit.php?id=<?php echo $data['PelangganID']; ?>">
                                                                                    <button class="btn btn-block btn-success my-2"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp; Ubah</button>
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-6 border-right py-3">
                                                                                <a href="process-customerdelete.php?id=<?php echo $data['PelangganID']; ?>">
                                                                                    <button class="btn btn-block btn-success my-2" onclick="return confirm('Apakah Anda yakin akan menghapus data?')"><i class="fas fa-trash"></i>&nbsp;&nbsp; Hapus</button>
                                                                                </a>
                                                                            </div>
                                                                        </div><!--end row--> 
                                                                    </div><!--end card-body--> 

                                                                </div><!--end card--> 
                                                            </div><!--end col-->
          
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
                                        </div>

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