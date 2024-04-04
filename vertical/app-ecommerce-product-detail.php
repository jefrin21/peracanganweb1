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
                            <h4 class="page-title mb-2"><i class="mdi mdi-google-pages mr-2"></i>Procuct-Detail</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                                    <li class="breadcrumb-item active">Detail</li>
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
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img src="assets/images/products/2.jpg" alt="" class=" mx-auto  d-block" height="400">
                                                <div class="row">
                                                    <div class="col-sm-4">

                                                    </div>
                                                    <div class="col-sm-4"></div>
                                                    <div class="col-sm-4"></div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6 align-self-center">
                                                <div class="single-pro-detail">
                                                    <p class="mb-1">Frogetor</p>
                                                    <div class="custom-border"></div>
                                                    <h3 class="pro-title">Frogetor Morden Chair</h3>
                                                    <p class="text-muted mb-2">Morden and good look model 2019</p> 
                                                    <h2 class="pro-price">$89.00 <span><del>$180.00</del></span><small class="text-danger font-weight-bold ml-2">50% Off</small></h2> 
                                                    <ul class="list-inline mb-2 product-review">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                                        <li class="list-inline-item">4.5 (30 reviews)</li>
                                                    </ul>
                                                    <h6 class="text-muted font-13">Features :</h6> 
                                                    <ul class="list-unstyled pro-features border-0">
                                                        <li>It is a long established fact that a reader will be distracted.</li>
                                                        <li>Contrary to popular belief, Lorem Ipsum is not text. </li>
                                                        <li>There are many variations of passages of Lorem.</li>
                                                    </ul>
                                                     
                                                    <span class="text-muted font-13 align-middle mr-2 font-weight-bold">Color :</span> 
                                                    <div class="radio2 radio-info2 form-check-inline ml-2">
                                                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                                        <label for="inlineRadio1"></label>
                                                    </div>
                                                    <div class="radio2 radio-dark2 form-check-inline">
                                                        <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                                        <label for="inlineRadio2"></label>
                                                    </div> 
                                                    <div class="radio2 radio-danger2 form-check-inline">
                                                        <input type="radio" id="inlineRadio3" value="option3" name="radioInline">
                                                        <label for="inlineRadio3"></label>
                                                    </div>
                                                    <div class="radio2 radio-purple2 form-check-inline">
                                                        <input type="radio" id="inlineRadio4" value="option4" name="radioInline">
                                                        <label for="inlineRadio4"></label>
                                                    </div> 
                                                   
                                                    <div class="quantity mt-3 ">
                                                        <input class="form-control" type="number" value="0" id="example-number-input">
                                                        <a href="" class="btn btn-success text-white px-4 d-inline-block"><i class="mdi mdi-cart mr-2"></i>Add to Cart</a>
                                                    </div>                                             
                                                </div>
                                            </div><!--end col-->                                            
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="pro-order-box">
                                                    <i class="mdi mdi-truck-fast text-success"></i>
                                                    <h4 class="header-title">Fast Delivery</h4>
                                                    <p class="text-muted">
                                                        It is a long established fact that a reader will be distracted.
                                                        Contrary to popular belief.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="pro-order-box">
                                                    <i class="mdi mdi-refresh text-danger"></i>
                                                    <h4 class="header-title">Returns in 30 Days</h4>
                                                    <p class="text-muted">
                                                        It is a long established fact that a reader will be distracted.
                                                        Contrary to popular belief.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="pro-order-box">
                                                    <i class="mdi mdi-headset text-warning"></i>
                                                    <h4 class="header-title">Online Support 24/7</h4>
                                                    <p class="text-muted">
                                                        It is a long established fact that a reader will be distracted.
                                                        Contrary to popular belief.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="pro-order-box mb-0">
                                                    <i class="mdi mdi-wallet text-purple"></i>
                                                    <h4 class="header-title">Secure Payment</h4>
                                                    <p class="text-muted">
                                                        It is a long established fact that a reader will be distracted.
                                                        Contrary to popular belief.
                                                    </p>
                                                </div>
                                            </div><!--end col-->
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="single-pro-info-tab">
                                            <ul class="nav nav-pills mb-0 nav-justified" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" aria-selected="true">Description</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-reviews-tab" data-toggle="pill" href="#pills-reviews"  aria-selected="false">Reviews</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-about-brand-tab" data-toggle="pill" href="#pills-about-brand" aria-selected="false">About brand</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-custom-tab" data-toggle="pill" href="#pills-custom" aria-selected="false">Custom Tab</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="tab-content mt-4" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-description">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/products/1.jpg" alt="" class="d-block mx-auto" height="300">
                                                        </div><!--end col-->
                                                        <div class="col-md-6 align-self-center">
                                                            <h4 class="header-title">Contrary to popular belief, Lorem Ipsum is not simply random text. </h4>
                                                            <p class="text-muted">There are many variations of passages of Lorem Ipsum available, 
                                                                but the majority have suffered alteration in some form, by injected 
                                                                humour, or randomised words which don't look even slightly believable. 
                                                                If you are going to use a passage of Lorem Ipsum, you need to be sure 
                                                                there isn't anything embarrassing hidden in the middle of text. 
                                                                All the Lorem Ipsum generators on the Internet tend to repeat predefined 
                                                                chunks as necessary.
                                                            </p>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="pro-order-box mb-2 mb-lg-0">
                                                                        <i class="mdi mdi-white-balance-sunny text-warning"></i>
                                                                        <h4 class="header-title">Seff from Sunlight</h4>
                                                                        <p class="text-muted">
                                                                            Contrary to popular belief, Lorem Ipsum is.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="pro-order-box mb-2 mb-lg-0">
                                                                        <i class="mdi mdi-fire text-danger"></i>
                                                                        <h4 class="header-title">Not Seff from Fire </h4>
                                                                        <p class="text-muted">
                                                                            It is a long established fact that.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="pro-order-box mb-2 mb-lg-0">
                                                                        <i class="mdi mdi-glass-wine text-success"></i>
                                                                        <h4 class="header-title">Seff from liqvid</h4>
                                                                        <p class="text-muted">
                                                                            There are many variations of passages.
                                                                        </p>
                                                                    </div>
                                                                </div>                                                                
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->                                                    
                                                </div>
                                                <div class="tab-pane fade mt-4" id="pills-reviews">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-3">                                                                
                                                                <div class="review-box text-center align-item-center">                                                                    
                                                                    <h1>4.8</h1> 
                                                                    <h4 class="header-title">Overall Rating</h4>  
                                                                    <ul class="list-inline mb-0 product-review">
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                                                        <li class="list-inline-item"><small class="font-weight-bold text-muted">Total Review (700)</small></li>
                                                                    </ul>                                     
                                                                </div>                                                                
                                                            </div><!--end col-->
                                                            <div class="col-md-6">    
                                                                <div class="text-center">
                                                                    <i class="mdi mdi-format-quote-close h1 text-success"></i>
                                                                </div>                                                            
                                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                                    <div class="carousel-inner">
                                                                        <div class="carousel-item active">
                                                                            <div class="text-center">                                                                                
                                                                                <p class="text-muted mb-0 px-5">It is a long established fact that a reader will 
                                                                                    be distracted by the readable content of a page when looking at its layout.
                                                                                </p>
                                                                                <img src="assets/images/users/user-2.jpg" class="thumb-md rounded-circle" alt="...">
                                                                                <h5 class="mt-0 mb-1">Joseph Cross</h5>
                                                                                <p class="text-muted font-13 mb-1">Location From - New Yourk</p>
                                                                                <ul class="list-inline mb-2 product-review">
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                </ul>
                                                                            </div>                                                                            
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <div class="text-center">
                                                                                <p class="text-muted mb-0 px-5">There are many variations of passages of Lorem Ipsum available,
                                                                                    but the majority have suffered alteration in some form, 
                                                                                    by injected humour, or randomised words.
                                                                                </p>
                                                                                <img src="assets/images/users/user-4.jpg" class="thumb-md rounded-circle" alt="...">
                                                                                <h5 class="mt-0 mb-1">Dorothy Key</h5>
                                                                                <p class="text-muted font-13 mb-1">Location From - London</p>
                                                                                <ul class="list-inline mb-2 product-review">
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                </ul>                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <div class="text-center">
                                                                                <p class="text-muted mb-0 px-5">Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                                                                    It has roots in a piece of classical Latin literature from 45 BC,
                                                                                        making it over 2000 years old.
                                                                                </p>
                                                                                <img src="assets/images/users/user-3.jpg" class="thumb-md rounded-circle" alt="...">
                                                                                <h5 class="mt-0 mb-1">Russell Jones</h5>
                                                                                <p class="text-muted font-13 mb-1">Location From - USA</p>
                                                                                <ul class="list-inline mb-2 product-review">
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                                </ul>                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-md-3">
                                                                <div class="review-box text-center align-item-center">                                                                    
                                                                    <h3>100%</h3> 
                                                                    <h4 class="header-title">Satisfied Customer</h4> 
                                                                    <p class="text-muted mb-0">All Customers give this product 4 and 5 Star Rating.</p>                                                                                                       
                                                                </div>     
                                                            </div><!--end col-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="reviewer "> 
                                                                    <a href="" class="text-muted float-right"><i class="mdi mdi-reply mr-1"></i>Reply</a> 
                                                                    <p class="font-weight-bold font-15 mb-1">Very comfortable chair and very  strong.</p>  
                                                                    <p class="text-muted font-13">by - Russell Jones</p>                                                                
                                                                    <ul class="list-inline mb-2 product-review">
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                    </ul>                                                                    
                                                                    <a href="" class="text-primary">View this product <i class="mdi mdi-arrow-right"></i></a>
                                                                </div>
                                                                <div class="reviewer "> 
                                                                    <a href="" class="text-muted float-right"><i class="mdi mdi-reply mr-1"></i>Reply</a> 
                                                                    <p class="font-weight-bold font-15 mb-1">Very very Nice !</p>  
                                                                    <p class="text-muted font-13">by - Russell Jones</p>                                                                
                                                                    <ul class="list-inline mb-2 product-review">
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                    </ul>                                                                    
                                                                    <a href="" class="text-primary">View this product <i class="mdi mdi-arrow-right"></i></a>
                                                                </div>
                                                                <div class="reviewer">
                                                                    <a href="" class="text-muted float-right"><i class="mdi mdi-reply mr-1"></i>Reply</a>  
                                                                    <p class="font-weight-bold font-15 mb-1">Goog look, strong and comfortable chair.</p>  
                                                                    <p class="text-muted font-13">by - Russell Jones</p>                                                                
                                                                    <ul class="list-inline mb-2 product-review">
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                    </ul>                                                                    
                                                                    <a href="" class="text-primary">View this product <i class="mdi mdi-arrow-right"></i></a>
                                                                </div>
                                                                
                                                                <div class="reviewer"> 
                                                                    <a href="" class="text-muted float-right"><i class="mdi mdi-reply mr-1"></i>Reply</a> 
                                                                    <p class="font-weight-bold font-15 mb-1">Wow ! Excellent </p>  
                                                                    <p class="text-muted font-13">by - Russell Jones</p>                                                                
                                                                    <ul class="list-inline mb-2 product-review">
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning"></i></li>
                                                                    </ul>                                                                    
                                                                    <a href="" class="text-primary">View this product <i class="mdi mdi-arrow-right"></i></a>
                                                                </div>
                                                            </div>                                                            
                                                        </div>                                                                                                               
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade mt-4" id="pills-about-brand">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <img src="assets/images/products/2.jpg" alt="" height="150" class="d-block mx-auto">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <span class="bg-soft-danger rounded-pill px-3 py-2 font-weight-bold">Frogetor</span>
                                                            <h5 class="mt-3">It is a long established fact that a reader will be distracted</h5>
                                                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available, 
                                                                but the majority have suffered alteration in some form, by injected humour, 
                                                                or randomised words which don't look even slightly believable. 
                                                                If you are going to use a passage.
                                                            </p>
                                                        </div><!--end col-->
                                                        <div class="col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-2 font-13 text-muted"><i class="mdi mdi-checkbox-marked-circle-outline text-success mr-2"></i>It is a long established fact that a reader will be distracted.</li>
                                                                <li class="mb-2 font-13 text-muted"><i class="mdi mdi-checkbox-marked-circle-outline text-success mr-2"></i>Contrary to popular belief, Lorem Ipsum is not text.</li>
                                                                <li class="mb-2 font-13 text-muted"><i class="mdi mdi-checkbox-marked-circle-outline text-success mr-2"></i>There are many variations of passages of Lorem.</li>
                                                                <li class="mb-2 font-13 text-muted"><i class="mdi mdi-checkbox-marked-circle-outline text-success mr-2"></i>It is a long established fact that a reade.</li>
                                                            </ul>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>
                                                <div class="tab-pane fade mt-4" id="pills-custom">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-order-box mb-2 mb-lg-0">
                                                                <i class="mdi mdi-white-balance-sunny text-warning"></i>
                                                                <h4 class="header-title">Seff from Sunlight</h4>
                                                                <p class="text-muted">
                                                                    Contrary to popular belief, Lorem Ipsum is.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="pro-order-box mb-2 mb-lg-0">
                                                                <i class="mdi mdi-fire text-danger"></i>
                                                                <h4 class="header-title">Not Seff from Fire </h4>
                                                                <p class="text-muted">
                                                                    It is a long established fact that.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="pro-order-box mb-2 mb-lg-0">
                                                                <i class="mdi mdi-glass-wine text-success"></i>
                                                                <h4 class="header-title">Seff from liqvid</h4>
                                                                <p class="text-muted">
                                                                    There are many variations of passages.
                                                                </p>
                                                            </div>
                                                        </div>                                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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