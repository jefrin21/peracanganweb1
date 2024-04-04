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
                            <h4 class="page-title mb-2"><i class="mdi mdi-help-circle-outline mr-2"></i>FAQ</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">FAQ</li>
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
                            <div class="col-md-12 col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Most Commonly Asked Questions</h4>
                                        <p class="text-muted">Anim pariatur cliche reprehenderit, 
                                            enim eiusmod high life accusamus terry richardson ad squid. 
                                        </p>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6">
                                                <ul class="list-unstyled">
                                                    <li class="mb-5">
                                                        <h6 class="">1. What is Frogetor?</h6>
                                                        <p class="font-14 text-muted ml-3">Anim pariatur cliche reprehenderit, 
                                                            enim eiusmod high life accusamus terry richardson ad squid.
                                                        </p>
                                                    </li>
                                                    <li class="mb-5">
                                                        <h6 class="">3. What cryptocurrency can i use to buy Frogetor?</h6>
                                                        <p class="font-14 text-muted  ml-3">Anim pariatur cliche reprehenderit, 
                                                            enim eiusmod high life accusamus terry richardson ad squid.
                                                        </p>
                                                    </li>
                                                    <li class="mb-5">
                                                        <h6 class="">5. Can i trade Frogetor?</h6>
                                                        <p class="font-14 text-muted ml-3">Anim pariatur cliche reprehenderit, 
                                                            enim eiusmod high life accusamus terry richardson ad squid.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 col-lg-6">
                                                <ul class="list-unstyled">
                                                    <li class="mb-5">
                                                        <h6 class="">2. How buy Frogetor on coin?</h6>
                                                        <p class="font-14 text-muted ml-3">Anim pariatur cliche reprehenderit, 
                                                            enim eiusmod high life accusamus terry richardson ad squid.
                                                        </p>
                                                    </li>
                                                    <li class="mb-5">
                                                        <h6 class="">4. Where can i download the wallet?</h6>
                                                        <p class="font-14 text-muted ml-3">Anim pariatur cliche reprehenderit, 
                                                            enim eiusmod high life accusamus terry richardson ad squid.
                                                        </p>
                                                    </li>
                                                    <li class="mb-5">
                                                        <h6 class="">6. What is Frogetor?</h6>
                                                        <p class="font-14 text-muted ml-3">Anim pariatur cliche reprehenderit, 
                                                            enim eiusmod high life accusamus terry richardson ad squid.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>                                            
                                    </div>
                                </div>                                                                        
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Have More Questions</h4>
                                        <p class="text-muted">Don't Worry ! Email us your Questions or you can send us twitter.</p>
                                        <form>
                                            <div class="form-group row">
                                                <div class="col-sm-12 col-lg-6  mo-b-15">
                                                    <input class="form-control" type="text" id="name" placeholder="Name">                                                       
                                                </div> 
                                                <div class="col-sm-12 col-lg-6">
                                                    <input class="form-control" type="email" id="example-email-input3" placeholder="Email">
                                                </div>                                                   
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" id="subject2" placeholder="Subject">                                                       
                                                </div>                                                    
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your message"></textarea>
                                            </div>                                                
                                           
                                            <button type="submit" class="btn btn-primary btn-block px-4">Send Email</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Most Commonly Asked Questions</h4>
                                        <p class="text-muted">Anim pariatur cliche reprehenderit, 
                                            enim eiusmod high life accusamus terry richardson ad squid. 
                                        </p>
                                        <div class="accordion" id="accordionExample-faq">
                                            <div class="card shadow-none border mb-1">
                                                <div class="card-header" id="headingOne">
                                                <h5 class="my-0">
                                                    <button class="btn btn-link ml-4" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        What is Frogetor?
                                                    </button>
                                                </h5>
                                                </div>
                                            
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample-faq">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                                </div>
                                                </div>
                                            </div>
                                            <div class="card shadow-none border mb-1">
                                                <div class="card-header" id="headingTwo">
                                                <h5 class="my-0">
                                                    <button class="btn btn-link collapsed ml-4 align-self-center" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        How buy Frogetor on coin?
                                                    </button>
                                                </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample-faq">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                                </div>
                                                </div>
                                            </div>
                                            <div class="card shadow-none border mb-1">
                                                <div class="card-header" id="headingThree">
                                                <h5 class="my-0">
                                                    <button class="btn btn-link collapsed ml-4" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What cryptocurrency can i use to buy Frogetor?
                                                    </button>
                                                </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample-faq">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                </div>
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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