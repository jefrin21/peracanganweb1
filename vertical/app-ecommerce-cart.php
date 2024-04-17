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
                            <h4 class="page-title mb-2"><i class="mdi mdi-cart mr-2"></i>Cart</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                                    <li class="breadcrumb-item active">Cart</li>
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0">Shopping Cart</h4>
                                        <p class="mb-4 text-muted">Makan Terus shopping cart.</p>
                                        <div class="table-responsive shopping-cart">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th>Jumlah</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                                <?php
                                                        if (!empty($_SESSION['shop'])) {
                                                            foreach ($_SESSION['shop'] as $id => $product) {
                                                                echo "<tr>";
                                                                echo  "<td>
                                                                         <img src='assets/images/products/".$product['gambar']."' alt='' height='52'>
                                                                         <p class='d-inline-block align-middle mb-0'>
                                                                             <a href='' class='d-inline-block align-middle mb-0 product-name'>".$product['name']."</a> 
                                                                             <br>
                                                                             <span class='text-muted font-13'>size-08 (Model 2019)</span> 
                                                                         </p>
                                                                     </td>";
                                                                 echo "<td>".$product['price']."</td>";
                                                                 echo "<td>". $product['jumlah'] ."</td>";
                                                                 echo "<td>" . ($product['price'] * $product['jumlah']) . "</td>";
                                                                 echo "<td>
                                                                            <form method='POST' action='app-ecommerce-delete-cart.php' onsubmit=\"return confirm('Hapus Pesanan?')\">
                                                                            <input type='hidden' name='id' value='".$id."'>
                                                                            <button type='submit' class='btn btn-link text-dark' name='delete'><i class='mdi mdi-close-circle-outline font-20'></i></button>
                                                                            </form>
                                                                        </td>";
                                                                 echo "</tr>"; 
                                                            }
                                                        }
                                                ?>                                              
                                                </tbody>
                                            </table>
                                         
                                        </div>
                                        
                                     </div><!--end col--> 
                                     
                            
                                            <div class="mt-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <a href="app-ecommerce-product.php" class="text-info"><i class="fas fa-long-arrow-alt-left mr-1"></i> Continue Shopping</a>
                                                        </div>                                                        
                                                        <div class="col-6 text-right">
                                                            <a href="app-ecommerce-checkout.php" class="text-info">Checkout <i class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                                        </div> 
                                                    </div>
                                                </div>
                                        </div><!--end row--> 
                                    </div><!--end card-->
                                </div><!--end card-body-->
                            </div><!--end col-->
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