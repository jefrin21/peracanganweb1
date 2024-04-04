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
                            <h4 class="page-title mb-2"><i class="mdi mdi-currency-inr mr-2"></i>Pricing</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Pricing</li>
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
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pricingTable1 text-center">
                                            <h6 class="title1 py-3 m-0">Basic plan</h6>
                                            <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                                            <div class="text-center py-4">
                                                <h3 class="amount">$39.00<small class="font-12 text-muted">/month</small></h3>
                                            </div>
                                            <ul class="list-unstyled pricing-content-2 py-3 border-0">
                                                <li>30GB Disk Space</li>
                                                <li>30 Email Accounts</li>
                                                <li>30GB Monthly Bandwidth</li>
                                                <li>06 Subdomains</li>
                                                <li>10 Domains</li>
                                            </ul>
                                                
                                            <a href="#" class="btn btn-block  btn-success btn-square btn-skew btn-outline-dashed mt-3 py-3 font-18"><span>Sign up</span></a>
                                        </div><!--end pricingTable-->
                                    </div><!--end card-body-->
                                </div> <!--end card-->                                   
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="badge badge-pink a-animate-blink mt-0">POPULAR</span>
                                        <div class="pricingTable1 text-center">
                                            <h6 class="title1 py-3 m-0">Premium Plan</h6>
                                            <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                                            <div class="text-center py-4">
                                                <h3 class="amount">$49.00<small class="font-12 text-muted">/month</small></h3>
                                            </div>
                                            <ul class="list-unstyled pricing-content-2 py-3 border-0">
                                                <li>30GB Disk Space</li>
                                                <li>30 Email Accounts</li>
                                                <li>30GB Monthly Bandwidth</li>
                                                <li>06 Subdomains</li>
                                                <li>10 Domains</li>
                                            </ul>
                                                
                                            <a href="#" class="btn btn-block  btn-warning btn-square btn-skew btn-outline-dashed mt-3 py-3 font-18"><span>Sign up</span></a>
                                        </div><!--end pricingTable-->
                                    </div><!--end card-body-->
                                </div> <!--end card-->                                   
                            </div><!--end col-->

                            

                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pricingTable1 text-center">
                                            <h6 class="title1 py-3 m-0">Plus Plan</h6>
                                            <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                                            <div class="text-center py-4">
                                                <h3 class="amount">$69.00<small class="font-12 text-muted">/month</small></h3>
                                            </div>
                                            <ul class="list-unstyled pricing-content-2 py-3 border-0">
                                                <li>30GB Disk Space</li>
                                                <li>30 Email Accounts</li>
                                                <li>30GB Monthly Bandwidth</li>
                                                <li>06 Subdomains</li>
                                                <li>10 Domains</li>
                                            </ul>
                                                
                                            <a href="#" class="btn btn-block  btn-success btn-square btn-skew btn-outline-dashed mt-3 py-3 font-18"><span>Sign up</span></a>
                                        </div><!--end pricingTable-->
                                    </div><!--end card-body-->
                                </div> <!--end card-->                                   
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pricingTable1 text-center">
                                            <h6 class="title1 py-3 m-0">Master Plan</h6>
                                            <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                                            <div class="text-center py-4">
                                                <h3 class="amount">$199.00<small class="font-12 text-muted">/month</small></h3>
                                            </div>
                                            <ul class="list-unstyled pricing-content-2 py-3 border-0">
                                                <li>30GB Disk Space</li>
                                                <li>30 Email Accounts</li>
                                                <li>30GB Monthly Bandwidth</li>
                                                <li>06 Subdomains</li>
                                                <li>10 Domains</li>
                                            </ul>
                                                
                                            <a href="#" class="btn btn-block  btn-success btn-square btn-skew btn-outline-dashed mt-3 py-3 font-18"><span>Sign up</span></a>
                                        </div><!--end pricingTable-->
                                    </div><!--end card-body-->
                                </div> <!--end card-->                                   
                            </div><!--end col-->
                        </div><!--end row-->

                        
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pricingTable1">
                                            <span class="pricing-icon"><i class="fas fa-user"></i></span>
                                            <h6 class="title1 py-3 mt-2 mb-0">Basic plan <small class="text-muted">Per Month</small></h6>
                                            <ul class="list-unstyled pricing-content-2 pb-3">
                                                <li>30GB Disk Space</li>
                                                <li>30 Email Accounts</li>
                                                <li>30GB Monthly Bandwidth</li>
                                                <li>06 Subdomains</li>
                                                <li>10 Domains</li>
                                            </ul>
                                            <div class="text-center">
                                                <h3 class="amount">$39.00<small class="font-12 text-muted">/month</small></h3>
                                            </div> 
                                            <a href="#" class="pricingTable-signup mt-3">sign up</a>
                                        </div><!--end pricingTable-->
                                    </div><!--end card-body-->
                                </div> <!--end card-->                                   
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pricingTable1">
                                            <span class="badge badge-warning float-right a-animate-blink">POPULAR</span>
                                            <span class="pricing-icon"><i class="fas fa-rocket"></i></span>
                                            <h6 class="title1 py-3 mt-2 mb-0">Premium plan <small class="text-muted">Per Month</small></h6>
                                            <ul class="list-unstyled pricing-content-2 pb-3">
                                                <li>50GB Disk Space</li>
                                                <li>50 Email Accounts</li>
                                                <li>50GB Monthly Bandwidth</li>
                                                <li>10 Subdomains</li>
                                                <li>15 Domains</li>
                                            </ul>
                                            <div class="text-center">
                                                <h3 class="amount">$49.00<small class="font-12 text-muted">/month</small></h3>
                                            </div> 
                                            <a href="#" class="pricingTable-signup mt-3">sign up</a>
                                        </div><!--end pricingTable1-->
                                    </div><!--end card-body-->
                                </div><!--end card-->                                  
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pricingTable1">
                                            <span class="pricing-icon"><i class="fas fa-envelope"></i></span>
                                            <h6 class="title1 py-3 mt-2 mb-0">Plus plan <small class="text-muted">Per Month</small></h6>                                                                                       
                                            <ul class="list-unstyled pricing-content-2 pb-3">
                                                <li>80GB Disk Space</li>
                                                <li>80 Email Accounts</li>
                                                <li>80GB Monthly Bandwidth</li>
                                                <li>15 Subdomains</li>
                                                <li>20 Domains</li>
                                            </ul>
                                            <div class="text-center">
                                                <h3 class="amount">$69.00<small class="font-12 text-muted">/month</small></h3>
                                            </div>
                                            <a href="#" class="pricingTable-signup mt-3">sign up</a>
                                        </div><!--end pricingTable1-->
                                    </div><!--end card-body-->
                                </div> <!--end card-->                                   
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pricingTable1">
                                            <span class="pricing-icon"><i class="fas fa-box"></i></span>
                                            <h6 class="title1 py-3 mt-2 mb-0">Master plan <small class="text-muted">Per year</small></h6>                                                                                       
                                            <ul class="list-unstyled pricing-content-2 pb-3">
                                                <li>180GB Disk Space</li>
                                                <li>180 Email Accounts</li>
                                                <li>180GB Yearly Bandwidth</li>
                                                <li>50 Subdomains</li>
                                                <li>40 Domains</li>
                                            </ul>
                                            <div class="text-center">
                                                <h3 class="amount">$199.00<small class="font-12 text-muted">/One year</small></h3>
                                            </div>
                                            <a href="#" class="pricingTable-signup mt-3">sign up</a>
                                        </div><!--end pricingTable1-->
                                    </div><!--end card-body-->
                                </div> <!--end card-->                                   
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