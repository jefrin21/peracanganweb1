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
                            <div class="float-right align-item-center mt-2">
                                <button class="btn btn-info px-4 align-self-center report-btn">Create Report</button>
                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-format-list-checkbox mr-2"></i>Product List</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                                    <li class="breadcrumb-item active">Product List</li>
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
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                            <h4 class="mt-0 header-title">Product Stock</h4>
                                            </div>
                                            <div>
                                            <button class="btn-success px-4 rounded-lg col-auto ml-5 mt-n2 text-right" name="return" onclick="window.location.href='app-product-add.php'"><i class="fas fa-plus"></i>&nbsp;&nbsp; Tambah Product</button>
                                            </div>
                                        </div>
                                       
                                        
                                        <p class="text-muted mb-4 font-13">
                                            Available all products.
                                        </p>
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Pieces</th>
                                                <th>Price</th>
                                                <th class="height=50%;">Deskripsi</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php
                                             $query = mysqli_query($koneksi,"SELECT * FROM produk INNER JOIN kategoriproduk ON Kategoriproduk.KategoriID=produk.KategoriID");
                                             while ($data = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                            <td>
                                                <img src="assets/images/products/<?php
                                                    echo $data['GambarProduk'];
                                                    ?>" alt='' height='52'>
                                               
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">
                                                           <?php 
                                                            echo $data['NamaProduk'];
                                                           ?>
                                                        </a> 
                                                        <br>
                                                        <span class="text-muted font-13">Size-05 (Model 2019)</span> 
                                                    </p>
                                                    
                                                </td>
                                                <td>
                                                    <?php
                                                    echo $data['NamaKategori'];
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    echo $data['Stok'];
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    echo $data['HargaSatuan'];
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    echo $data['Deskripsi'];
                                                    ?>
                                                </span></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                      </div>
                                                </td>
                                            </tr>
                                            <?php
                                             }
                                             ?>
                                            
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->        
                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
            $('#datatable').DataTable();
        </script>

    </body>
</html>