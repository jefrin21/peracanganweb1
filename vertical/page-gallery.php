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
                            <h4 class="page-title mb-2"><i class="mdi mdi-folder-multiple-image mr-2"></i>Gallery</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Gallery</li>
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
                                            <ul class="col container-filter categories-filter mb-0" id="filter">
                                                <li><a class="categories active" data-filter="*">All</a></li>
                                                <li><a class="categories" data-filter=".branding">Branding</a></li>
                                                <li><a class="categories" data-filter=".design">Design</a></li>
                                                <li><a class="categories" data-filter=".photo">Photo</a></li>
                                                <li><a class="categories" data-filter=".coffee">coffee</a></li>
                                            </ul>
                                        </div><!-- End portfolio  -->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                                
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row container-grid nf-col-3  projects-wrapper">
                                            <div class="col-lg-4 col-md-6 p-0 nf-item branding design coffee spacing">
                                                <div class="item-box">
                                                    <a class="cbox-gallary1 mfp-image" href="assets/images/small/img-1.jpg" title="Consequat massa quis">
                                                        <img class="item-container " src="assets/images/small/img-1.jpg" alt="7" />
                                                        <div class="item-mask">
                                                            <div class="item-caption">
                                                                <h5 class="text-light">Consequat massa quis</h5>
                                                                <p class="text-light">Branding, Design, Coffee</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!--end item-box-->
                                            </div><!--end col-->
                            
                                            <div class="col-lg-4 col-md-6 p-0 nf-item photo spacing">
                                                <div class="item-box">
                                                    <a class="cbox-gallary1 mfp-image" href="assets/images/small/img-2.jpg" title="Vivamus elementum semper">
                                                        <img class="item-container mfp-fade" src="assets/images/small/img-2.jpg" alt="2" />
                                                        <div class="item-mask">
                                                            <div class="item-caption">
                                                                <h5 class="text-light">Vivamus elementum semper</h5>
                                                                <p class="text-light">Photo</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!--end item-box-->
                                            </div><!--end col-->
                            
                                            <div class="col-lg-4 col-md-6 p-0 nf-item branding coffee spacing">
                                                <div class="item-box">
                                                    <a class="cbox-gallary1 mfp-image" href="assets/images/small/img-3.jpg" title="Quisque rutrum">
                                                        <img class="item-container" src="assets/images/small/img-3.jpg" alt="4" />
                                                        <div class="item-mask">
                                                            <div class="item-caption">
                                                                <h5 class="text-light">Quisque rutrum</h5>
                                                                <p class="text-light">Branding, Design, Coffee</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!--end item-box-->
                                            </div><!--end col-->
                            
                                            <div class="col-lg-4 col-md-6 p-0 nf-item branding design spacing">
                                                <div class="item-box">
                                                    <a class="cbox-gallary1 mfp-image" href="assets/images/small/img-4.jpg" title="Tellus eget condimentum">
                                                        <img class="item-container" src="assets/images/small/img-4.jpg" alt="5" />
                                                        <div class="item-mask">
                                                            <div class="item-caption">
                                                                <h5 class="text-light">Tellus eget condimentum</h5>
                                                                <p class="text-light">Design</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!--end item-box-->
                                            </div><!--end col-->
                            
                                            <div class="col-lg-4 col-md-6 p-0 nf-item branding design spacing">
                                                <div class="item-box">
                                                    <a class="cbox-gallary1 mfp-image" href="assets/images/small/img-5.jpg" title="Nullam quis ant">
                                                        <img class="item-container" src="assets/images/small/img-5.jpg" alt="6" />
                                                        <div class="item-mask">
                                                            <div class="item-caption">
                                                                <h5 class="text-light">Nullam quis ant</h5>
                                                                <p class="text-light">Branding, Design</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!--end item-box-->
                                            </div><!--end col-->
                            
                                            <div class="col-lg-4 col-md-6 p-0 nf-item photo spacing">
                                                <div class="item-box">
                                                    <a class="cbox-gallary1 mfp-image" href="assets/images/small/img-6.jpg" title="Sed fringilla mauris">
                                                        <img class="item-container" src="assets/images/small/img-6.jpg" alt="1" />
                                                        <div class="item-mask">
                                                            <div class="item-caption">
                                                                <h5 class="text-light">Sed fringilla mauris</h5>
                                                                <p class="text-light">Photo</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!--end item-box-->
                                            </div><!--end col-->
                                        </div><!--end row-->
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

        <script src="assets/plugins/filter/isotope.pkgd.min.js"></script>
        <script src="assets/plugins/filter/masonry.pkgd.min.js"></script>
        <script src="assets/plugins/filter/jquery.magnific-popup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
             $(window).on('load', function() {
                // Filter 
                //PORTFOLIO FILTER 
                var $container = $('.projects-wrapper');
                var $filter = $('#filter');
                // Initialize isotope 
                $container.isotope({
                    filter: '*',
                    layoutMode: 'masonry',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });
                // Filter items when filter link is clicked
                $filter.find('a').click(function() {
                    var selector = $(this).attr('data-filter');
                    $filter.find('a').removeClass('active');
                    $(this).addClass('active');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            animationDuration: 750,
                            easing: 'linear',
                            queue: false,
                        }
                    });
                    return false;
                });
                /*END*/
            });
            $('.mfp-image').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-fade',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                        // Will preload 0 - before current, and 1 after the current image 
                }
            });
        </script>

    </body>
</html>