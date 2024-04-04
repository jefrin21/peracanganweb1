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
                            <h4 class="page-title mb-2"><i class="mdi mdi-account mr-2"></i>Profile</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
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
                                                        <div class="fro_profile-main-pic">
                                                            <img src="assets/images/users/user-4.jpg" alt="" class="rounded-circle">
                                                            <span class="fro-profile_main-pic-change">
                                                                <i class="fas fa-camera"></i>
                                                            </span>
                                                        </div>
                                                        <div class="fro_profile_user-detail">
                                                            <h5 class="fro_user-name">Rosa Dodson</h5>
                                                            <p class="mb-0 fro_user-name-post">UI/UX Designer</p>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-4 mb-3 mb-lg-0">
                                                    <div class="header-title">Sales Report</div> 
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <div class="seling-report">
                                                                <h3 class="seling-data mb-1">81.88%</h3>
                                                                <ul class="list-inline mb-0">
                                                                    <li class="mb-2 list-inline-item text-muted font-13"><i class="mdi mdi-label text-success mr-2"></i>Computers</li>
                                                                    <li class="mb-2 list-inline-item text-muted font-13"><i class="mdi mdi-label text-danger mr-2"></i>IPhones</li>
                                                                    <li class="mb-2 list-inline-item text-muted font-13"><i class="mdi mdi-label text-warning mr-2"></i>Tablates</li>
                                                                </ul>
                                                                <h5 class="seling-data-detail">Total delivered</h5>
                                                            </div>                                                            
                                                        </div>
                                                        <div class="col-5 align-item-center">
                                                            <canvas id="pro-doughnut" height="180"></canvas> 
                                                        </div>
                                                    </div> 
                                                </div><!--end col-->
                                                <div class="col-lg-4 mb-2 mb-lg-0">
                                                    <div class="header-title">Revenue Report</div>                                                    
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="seling-report">
                                                                <h3 class="seling-data mb-1">$2353</h3>
                                                                <p class="text-muted">Today's Revenue</p>
                                                                <h5 class="seling-data-detail">Total Payment Clear</h5>
                                                            </div>                                                            
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="peity-bar" data-peity='{ "fill": ["#44a2d2", "#e6edf3"]}' data-width="100%" data-height="100">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8</span>
                                                        </div>
                                                    </div> 
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end f_profile-->                                                                                
                                    </div><!--end card-body-->

                                    <div class="card-body">
                                        <div class="wrap">
                                            <div class="jctkr-label">
                                                <strong>Sold itemes Reverse</strong>
                                            </div>
                                            <div class="js-conveyor-example">
                                                <ul>
                                                    <li>
                                                        <img src="assets/images/products/img-4.png" alt="" class="thumb-sm rounded">
                                                        <span class="text-primary font-14"><b>Purse</b></span>
                                                        <span class="text-muted mb-0 font-12 ">14Feb 2019</span>
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/products/img-5.png" alt="" class="thumb-sm rounded">
                                                        <span class="text-primary font-14"><b>Shoes</b></span>
                                                        <span class="text-muted mb-0 font-12 ">14Feb 2019</span>
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/products/img-3.png" alt="" class="thumb-sm rounded">
                                                        <span class="text-primary font-14"><b>Head Phone</b></span>
                                                        <span class="text-muted mb-0 font-12 ">14Feb 2019</span>
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/products/img-2.png" alt="" class="thumb-sm rounded">
                                                        <span class="text-primary font-14"><b>Watch</b></span>
                                                        <span class="text-muted mb-0 font-12 ">14Feb 2019</span>
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/products/img-1.png" alt="" class="thumb-sm rounded">
                                                        <span class="text-primary font-14"><b>Bag</b></span>
                                                        <span class="text-muted mb-0 font-12 ">14Feb 2019</span>
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/products/img-6.png" alt="" class="thumb-sm rounded">
                                                        <span class="text-primary font-14"><b>Vallyboll</b></span>
                                                        <span class="text-muted mb-0 font-12 ">14Feb 2019</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body profile-nav"> 
                                        <div class="nav flex-column nav-pills" id="profile-tab" aria-orientation="vertical">
                                            <a class="nav-link active" id="profile-dash-tab" data-toggle="pill" href="#profile-dash" aria-selected="true">Dashboard</a>
                                            <a class="nav-link" id="profile-activities-tab" data-toggle="pill" href="#profile-activities" aria-selected="false">Activities</a>
                                            <a class="nav-link d-flex justify-content-between align-items-center" id="profile-pro-stock-tab" data-toggle="pill" href="#profile-pro-stock" aria-selected="false">
                                                Products Stock
                                                <span class="badge badge-warning">8</span>
                                            </a>
                                            <a class="nav-link mb-0" id="profile-settings-tab" data-toggle="pill" href="#profile-settings" aria-selected="false">Settings</a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Personal Information</h4>
                                        <h6>About :</h6>
                                        <p class="text-muted font-13">Hi I'm Mark Kearney,has 
                                            been the industry's standard dummy text ever since the 1500s, 
                                            when an unknown printer took a galley of type.
                                        </p>
                                        <hr>
                                        <div class="button-list btn-social-icon">                                                
                                            <button type="button" class="btn btn-facebook btn-round">
                                                <i class="fab fa-facebook-f"></i>
                                            </button>
    
                                            <button type="button" class="btn btn-twitter btn-round ml-2">
                                                <i class="fab fa-twitter"></i>
                                            </button>
    
                                            <button type="button" class="btn btn-info btn-round  ml-2">
                                                <i class="fab fa-linkedin"></i>
                                            </button>
    
                                            <button type="button" class="btn btn-pink btn-round  ml-2">
                                                <i class="fab fa-dribbble"></i>
                                            </button>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-3">Contact</h4>   
                                        <ul class="list-unstyled mb-0">
                                            <li class=""><i class="mdi mdi-phone mr-2 text-success font-18"></i> <b> phone </b> : +91 23456 78910</li>
                                            <li class="mt-2"><i class="mdi mdi-email-outline text-success font-18 mt-2 mr-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                                            <li class="mt-2"><i class="mdi mdi-map-marker text-success font-18 mt-2 mr-2"></i> <b>Location</b> : USA</li>
                                        </ul>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade show active" id="profile-dash">
                                                <h4 class="header-title mt-0">Overview</h4>                                         
                                                <div class="chart-demo dash-apex-chart m-0">
                                                    <div id="d2_overview" class="apex-charts"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card shadow-none  overflow-hidden">
                                                            <div class="card-body bg-gradient2">
                                                                <div class="">
                                                                    <div class="card-icon">
                                                                        <i class="fas fa-coins"></i>
                                                                    </div>
                                                                    <h2 class="font-weight-bold text-white">$85750.00</h2>
                                                                    <p class="text-white mb-0 font-16">Total payments</p>                                            
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="">
                                                                    <div id="d1_payment" class="apex-charts"></div>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="card shadow-none overflow-hidden">
                                                            <div class="card-body bg-gradient1">
                                                                <div class="">
                                                                    <div class="card-icon">
                                                                        <i class="far fa-user"></i>
                                                                    </div>
                                                                    <h2 class="font-weight-bold text-white">10</h2>
                                                                    <p class="text-white mb-0 font-16">Top 10 Best Saler This Month</p>                                            
                                                                </div>
                                                            </div><!--end card-body-->
                                                            <div class="card-body dash-info-carousel">                                        
                                                                <div id="carousel_best_saler" class="carousel slide" data-ride="carousel">
                                                                    <div class="carousel-inner">
                                                                        <div class="carousel-item active">
                                                                            <div class="text-center">
                                                                                <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                                                <h5>Nancy Flanary</h5>
                                                                                <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>USA Dealer</p>
                                                                                <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin.</p>
                                                                                <div class="mt-2 align-item-center">
                                                                                    <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">$34800.00</h5>
                                                                                    <a class="btn btn-sm btn-primary text-light mb-2"><i class="mdi mdi-email-outline mr-1"></i>Message</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <div class="text-center">
                                                                                <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                                                <h5>Donald Gardner</h5>
                                                                                <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>Russia Dealer</p>
                                                                                <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin.</p>
                                                                                <div class="mt-2 align-item-center">
                                                                                    <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">$31200.00</h5>
                                                                                    <a class="btn btn-sm btn-primary text-light mb-2"><i class="mdi mdi-email-outline mr-1"></i>Message</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <div class="text-center">
                                                                                <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                                                <h5>Matt Rosales</h5>
                                                                                <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>Spain Dealer</p>
                                                                                <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin.</p>
                                                                                <div class="mt-2 align-item-center">
                                                                                    <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">$29200.00</h5>
                                                                                    <a class="btn btn-sm btn-primary text-light mb-2"><i class="mdi mdi-email-outline mr-1"></i>Message</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a class="carousel-control-prev" href="#carousel_best_saler" role="button" data-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="carousel-control-next" href="#carousel_best_saler" role="button" data-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                            </div><!--end card-body-->
                                                        </div><!--end card-->
                                                    </div><!--end col-->
                                                </div><!--end row-->                                                
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-activities">
                                                <h4 class="mt-0 header-title mb-3">Activity</h4>
                                                <div class="activity">
                                                    <i class="mdi mdi-check text-primary"></i>
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">5 minutes ago</div>
                                                            <h5 class="my-0">Task finished</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/users/user-8.jpg" alt="" class="img-activity">                                                                                                            
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">30 minutes ago</div>
                                                            <h5 class="my-0">Task Overdue</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <i class="mdi mdi-alert-outline text-danger"></i>    
                                                    <div class="time-item ">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">50 minutes ago</div>
                                                            <h5 class="my-0">Task finished</h5>
                                                            <p class="text-muted font-13">There are many variations of passages of Lorem Ipsum available.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/users/user-6.jpg" alt="" class="img-activity">
                                                    <div class="time-item ">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">1 Day ago</div>
                                                            <h5 class="my-0">New Comment</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                            <img src="assets/images/products/img-4.png" alt="" class="thumb-sm rounded">
                                                            <img src="assets/images/products/img-5.png" alt="" class="thumb-sm rounded">
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/users/user-8.jpg" alt="" class="img-activity">                                                                                                                                
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">3 Day ago</div>
                                                            <h5 class="my-0">Task finished</h5>
                                                            <p class="text-muted font-13 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <i class="mdi mdi-comment-outline text-info"></i>
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">5 minutes ago</div>
                                                            <h5 class="my-0">Task finished</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/users/user-8.jpg" alt="" class="img-activity">                                                                                                            
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">30 minutes ago</div>
                                                            <h5 class="my-0">Task Overdue</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                            <img src="assets/images/products/img-2.png" alt="" class="thumb-sm rounded">
                                                        </div>
                                                    </div>
                                                    <i class="mdi mdi-check text-primary"></i>
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">5 minutes ago</div>
                                                            <h5 class="my-0">Task finished</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/users/user-8.jpg" alt="" class="img-activity">                                                                                                            
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted text-right font-10">30 minutes ago</div>
                                                            <h5 class="my-0">Task Overdue</h5>
                                                            <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                                <a href="#" class="text-info">[more info]</a>
                                                            </p>                                                            
                                                        </div>
                                                    </div>                                                                
                                                </div> <!--end activity-->

                                                <div class="activity-meeting">
                                                    <div class="meeting-title">
                                                        <p class="text-muted mb-0 float-right"><i class="mdi mdi-calendar mr-1"></i>14 Feb 2019</p>
                                                        <h4 class="header-title mb-3">Meeting With Managers</h4>
                                                        <div class="card-body bg-light">
                                                            <ul class=" mb-0">
                                                                <li>There are many variations of passages of Lorem Ipsum available</li>
                                                                <li>Contrary to popular belief, Lorem Ipsum is not simply random text. </li>
                                                                <li>Various versions have evolved over the years, sometimes by accident.</li>
                                                                <li>This book is a treatise on the theory of ethics, very popular during the Renaissance. </li>
                                                            </ul>
                                                        </div><!--end card-body-->
                                                    </div>
                                                </div>
                                            </div><!--end tab-pane-->

                                            <div class="tab-pane fade" id="profile-pro-stock">
                                                <h4 class="mt-0 header-title mb-3">Stock Products</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-hover mb-0">
                                                        <thead>
                                                            <tr class="align-self-center">
                                                                <th>No</th>
                                                                <th>Product Name</th>
                                                                <th>Company</th>                                                                
                                                                <th>Sku</th>
                                                                <th>Color</th>
                                                                <th>Size</th>
                                                                <th>Pics</th>
                                                                <th>Rating</th>                                                                                    
                                                            </tr><!--end tr-->
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td><img src="assets/images/products/img-2.png" alt="" class="thumb-sm rounded-circle mr-2">Watch</td>
                                                                <td>Rado</td>
                                                                <td>F500</td>
                                                                <td>White, <del>Blue</del></td>
                                                                <td>3,<del>4</del>,5</td>
                                                                <td>55</td>
                                                                <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline  text-warning"></i>
                                                                </td>                                                                        
                                                            </tr><!--end tr-->
                                                            <tr>
                                                                <td>2</td>
                                                                <td><img src="assets/images/products/img-4.png" alt="" class="thumb-sm rounded-circle mr-2">Purse</td>
                                                                <td>Lavie</td>
                                                                <td>P500</td>
                                                                <td>Green,Blue <del>Red</del></td>
                                                                <td>Medium ,<del>Long</del></td>
                                                                <td>14</td>
                                                                <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline  text-warning"></i>
                                                                </td>                                         
                                                            </tr><!--end tr-->
                                                            
                                                            <tr>
                                                                <td>3</td>
                                                                <td><img src="assets/images/products/img-5.png" alt="" class="thumb-sm rounded-circle mr-2">Shoes</td>
                                                                <td>Reebok</td>
                                                                <td>R400</td>
                                                                <td>White,Gray <del>Red</del></td>
                                                                <td>5 to 10 <del>11, 12</del></td>
                                                                <td>10</td>
                                                                <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline  text-warning"></i>
                                                                </td>                                         
                                                            </tr><!--end tr-->
                                                            
                                                            <tr>
                                                                <td>4</td>
                                                                <td><img src="assets/images/products/img-3.png" alt="" class="thumb-sm rounded-circle mr-2">Headphone</td>
                                                                <td>MI</td>
                                                                <td>Mi450</td>
                                                                <td>Black, Blue <del>white</del></td>
                                                                <td>-</td>
                                                                <td>4</td>
                                                                <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline  text-warning"></i>
                                                                </td>                                         
                                                            </tr><!--end tr-->
                                                        </tbody><!--end tbody-->
                                                    </table><!--end table-->
                                                </div><!--end table-responsive-->
                                                <div class="pt-3 border-top text-right">
                                                    <a href="#" class="text-primary">View all <i class="mdi mdi-arrow-right"></i></a>
                                                </div> 

                                                <div class="new-product mt-5">
                                                    <h4 class="mt-0 header-title">Coming Soon Products</h4>
                                                    <p class="text-muted">There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form, by injected. </p>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="new-product-img">
                                                                <div class="card-body text-center">
                                                                    <img src="assets/images/products/img-1.png" alt="" height="220" class="">
                                                                    <h4 class="mb-0">Nike Bag</h4>
                                                                    <small class="text-muted">New Modal Nike Bag</small>
                                                                    <h6>MRP: $99.00</h6>
                                                                </div>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-4">
                                                            <div class="new-product-img">
                                                                <div class="card-body text-center">
                                                                    <img src="assets/images/products/img-5.png" alt="" height="220" class="">
                                                                    <h4 class="mb-0">Nike Shoes</h4>
                                                                    <small class="text-muted">PU Leather Pasted 20</small>
                                                                    <h6>MRP: $12.00</h6>
                                                                </div>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-4">
                                                            <div class="new-product-img">
                                                                <div class="card-body text-center">
                                                                    <img src="assets/images/products/img-3.png" alt="" height="220" class="">
                                                                    <h4 class="mb-0">Headphone F2019</h4>
                                                                    <small class="text-muted">Wired Connectivity</small>
                                                                    <h6>MRP: $199.00</h6>
                                                                </div>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end new-product-->
                                            </div><!--end tab-pen-->

                                            <div class="tab-pane fade" id="profile-settings">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form method="post" class="card-box">
                                                            <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="assets/images/users/user-4.jpg"/>
                                                            <span class="input-icon icon-right">
                                                                <textarea rows="4" class="form-control" placeholder="Post a new message"></textarea>
                                                            </span>
                                                            <div class="float-right my-3">
                                                                <a class="btn btn-sm btn-primary text-light px-4 mb-0">Send</a>
                                                            </div>
                                                            <ul class="nav nav-pills profile-pills mt-1">                                                                
                                                                <li>
                                                                    <a href="#"><i class=" fas fa-video font-18 mr-2 mt-2 text-primary"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><i class="fas fa-camera  font-18 mx-2 mt-2 text-primary"></i></a>
                                                                </li>
                                                            </ul>
                                                        </form>
    
                                                        <div class="">
                                                            <form class="form-horizontal form-material mb-0">
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Full Name" class="form-control">
                                                                </div>
                                                                
                                                                <div class="form-group row">
                                                                    <div class="col-md-4">
                                                                        <input type="email" placeholder="Email" class="form-control" name="example-email" id="example-email">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="password" placeholder="password" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="password" placeholder="Re-password" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-6">
                                                                        <input type="text" placeholder="Phone No" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <select class="form-control">
                                                                            <option>London</option>
                                                                            <option>India</option>
                                                                            <option>Usa</option>
                                                                            <option>Canada</option>
                                                                            <option>Thailand</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea rows="5" placeholder="Message" class="form-control"></textarea>
                                                                    <button class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0">Update Profile</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div> <!--end col-->                                          
                                                </div><!--end row-->
                                            </div><!--end tab-pane-->
                                        </div>  <!--end tab-content-->                                                                              
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