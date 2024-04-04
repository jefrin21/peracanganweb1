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
        include 'navbarr.php';
        ?>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right align-item-center mt-2">
                                <button class="btn btn-info px-4 align-self-center report-btn">Create Report</button>
                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-google-pages mr-2"></i>Products</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                                    <li class="breadcrumb-item active">Products</li>
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
                            <div class="col-lg-3">
                                <div class="card e-co-product">
                                    <a href="">  
                                        <img src="assets/images/products/1.jpg" alt="" class="img-fluid">
                                    </a>                                    
                                    <div class="card-body text-center product-info">
                                        <a href="" class="product-title">Home & Office Chair Green</a>
                                        <p class="product-price">$99.00 <span class="ml-2"><del>$149.00</del></span></p>
                                        <ul class="list-inline mb-2 product-review">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                        <button class="btn btn-dark btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                        <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                        <button class="btn btn-dark btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="card e-co-product">
                                    <div class="ribbon-box mb-0">
                                        <a href="">                                            
                                            <div class="ribbon ribbon-label bg-primary">25% OFF</div>
                                            <img src="assets/images/products/2.jpg" alt="" class="img-fluid mx-auto d-block">
                                        </a>                                    
                                        <div class="card-body text-center product-info">
                                            <a href="" class="product-title">Home & Office Chair White</a>
                                            <p class="product-price">$149.00 <span class="ml-2"><del>$199.00</del></span></p>
                                            <ul class="list-inline mb-2 product-review">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                            </ul>
                                            <button class="btn btn-dark btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                            <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                            <button class="btn btn-dark btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                        </div><!--end card-body-->
                                    </div> <!--end ribbon-box-->                                  
                                </div><!--end card-->                               
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="card e-co-product">
                                    <a href="">  
                                        <img src="assets/images/products/3.jpg" alt="" class="img-fluid">
                                    </a>                                    
                                    <div class="card-body text-center product-info">
                                        <a href="" class="product-title">Home & Office Chair Brown</a>
                                        <p class="product-price">$139.00 <span class="ml-2"><del>$200.00</del></span></p>
                                        <ul class="list-inline mb-2 product-review">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                        <button class="btn btn-dark btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                        <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                        <button class="btn btn-dark btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-3">
                                <div class="card e-co-product">
                                    <a href="">  
                                        <img src="assets/images/products/4.jpg" alt="" class="img-fluid">
                                    </a>                                    
                                    <div class="card-body text-center product-info">
                                        <a href="" class="product-title">Home & Office Chair Blue</a>
                                        <p class="product-price">$129.00 <span class="ml-2"><del>$179.00</del></span></p>
                                        <ul class="list-inline mb-2 product-review">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>                                        
                                        <button class="btn btn-dark btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                        <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                        <button class="btn btn-dark btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->


                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card e-co-product">
                                    <div class="ribbon-box mb-0">
                                        <a href="">                                            
                                            <div class="ribbon ribbon-label bg-warning">NEW</div>
                                            <img src="assets/images/products/3.jpg" alt="" class="img-fluid mx-auto d-block">
                                        </a>                                    
                                        <div class="card-body text-center product-info">
                                            <a href="" class="product-title">Home & Office Chair Brown</a>
                                            <p class="product-price">$89.00 <span class="ml-2"><del>$119.00</del></span></p>
                                            <ul class="list-inline mb-2 product-review">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                            </ul>
                                            <button class="btn btn-dark btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                            <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                            <button class="btn btn-dark btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                        </div><!--end card-body-->
                                    </div> <!--end ribbon-box-->                                  
                                </div><!--end card-->                               
                            </div><!--end col-->
                            
                            <div class="col-lg-3">
                                <div class="card e-co-product">
                                    <a href="">  
                                        <img src="assets/images/products/4.jpg" alt="" class="img-fluid">
                                    </a>                                    
                                    <div class="card-body text-center product-info">
                                        <a href="" class="product-title">Home & Office Chair Blue</a>
                                        <p class="product-price">$299.00 <span class="ml-2"><del>$399.00</del></span></p>
                                        <ul class="list-inline mb-2 product-review">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                        <button class="btn btn-dark btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                        <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                        <button class="btn btn-dark btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="card e-co-product">
                                    <a href="">  
                                        <img src="assets/images/products/1.jpg" alt="" class="img-fluid">
                                    </a>                                    
                                    <div class="card-body text-center product-info">
                                        <a href="" class="product-title">Home & Office Chair Green</a>
                                        <p class="product-price">$149.00 <span class="ml-2"><del>$199.00</del></span></p>
                                        <ul class="list-inline mb-2 product-review">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                        <button class="btn btn-dark btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                        <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                        <button class="btn btn-dark btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-3">
                                <div class="card e-co-product">
                                    <a href="">  
                                        <img src="assets/images/products/2.jpg" alt="" class="img-fluid">
                                    </a>                                    
                                    <div class="card-body text-center product-info">
                                        <a href="" class="product-title">Home & Office Chair White</a>
                                        <p class="product-price">$151.00 <span class="ml-2"><del>$219.00</del></span></p>
                                        <ul class="list-inline mb-2 product-review">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>                                        
                                        <button class="btn btn-dark btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                        <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                        <button class="btn btn-dark btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                    </div><!--end card-body-->
                                </div><!--end card-->
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