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
                            <h4 class="page-title mb-2"><i class="mdi mdi-google-pages mr-2"></i>Shopping</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                                    <li class="breadcrumb-item active">Shopping</li>
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

                                <?php
                                $query = mysqli_query($koneksi,"SELECT * FROM produk");
                                while ($data = mysqli_fetch_array($query)){
                                ?>
                                <div class="col-lg-3">
                                    <div class="card e-co-product">
                                        
                                        <a href="">  
                                            <img src="assets/images/products/<?php echo $data['GambarProduk'];?>" alt="" class="img-fluid">
                                        </a>                                    
                                        <div class="card-body text-center product-info">
                                            <a href="" class="product-title">
                                                <?php echo $data['NamaProduk'];?>
                                            </a>
                                            <p class="product-price"><?php echo $data ['HargaSatuan'];?> <span class="ml-2"></span></p>
                                            
                                            <ul class="list-inline mb-2 product-review">
                                            <?php
                                            echo  ' <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>';
                                            echo   '<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>';
                                            echo   '<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>';
                                            echo    '<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>';
                                            echo    '<li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>';
                                            ?>
                                            </ul>
                                         <form method="post" action="app-ecommerce-proses-cart.php">
                                            <input type="hidden" name= "produkk" value="<?php echo $data['ProdukID'];?>">
                                            <button class="btn btn-dark btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                            <button class="btn btn-cart btn-sm waves-effect waves-light" type="submit" name="add" value="bro"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                            <button class="btn btn-dark btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                        </form>       
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                                
                                <?php
                                }
                                ?>
                           
                            </div><!--end row-->
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