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
                            <h4 class="page-title mb-2"><i class="mdi mdi-blogger mr-2"></i>Blogs</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Blogs</li>
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
                            <div class="col-lg-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="blog-card mb-3">
                                            <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid"/>
                                            <div class="meta-box">
                                                <ul class="p-0 mt-4 list-inline">
                                                    <li class="list-inline-item">26 mars 2019</li>
                                                    <li class="list-inline-item">by <a href="">admin</a></li>
                                                    <li class="list-inline-item"><a href="">comment</a></li>
                                                </ul>
                                            </div><!--end meta-box-->            
                                            <h4 class="mt-2">
                                                <a href="">It is a long established fact that a reader will be</a>
                                            </h4>
                                        </div><!--end blog-card-->
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->

                            <div class="col-lg-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="blog-card mb-3">
                                            <img src="assets/images/small/img-5.jpg" alt="" class="img-fluid"/>
                                            <div class="meta-box">
                                                <ul class="p-0 mt-4 list-inline">
                                                    <li class="list-inline-item">26 mars 2019</li>
                                                    <li class="list-inline-item">by <a href="">admin</a></li>
                                                    <li class="list-inline-item"><a href="">comment</a></li>
                                                </ul>
                                            </div><!--end meta-box-->            
                                            <h4 class="mt-2">
                                                <a href="">There are many variations of passages</a>
                                            </h4>
                                        </div><!--end blog-card-->
                                        <p class="text-muted">This book is a treatise on the theory of ethics, very popular during the Renaissance. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
                                        <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->

                            <div class="col-lg-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="blog-card mb-3">
                                            <img src="assets/images/small/img-1.jpg" alt="" class="img-fluid"/>
                                            <div class="meta-box">
                                                <ul class="p-0 mt-4 list-inline">
                                                    <li class="list-inline-item">26 mars 2019</li>
                                                    <li class="list-inline-item">by <a href="">admin</a></li>
                                                    <li class="list-inline-item"><a href="">comment</a></li>
                                                </ul>
                                            </div><!--end meta-box-->            
                                            <h4 class="mt-2">
                                                <a href="">Contrary to popular belief, Lorem Ipsum is not</a>
                                            </h4>
                                        </div><!--end blog-card-->
                                        <p class="text-muted">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                                        <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->                           
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card card-post-aside card-post-1 blog-card">
                                    <div class="card-post-image" style="background-image: url('assets/images/small/img-6.jpg');">
                                        <a href="#" class="card-post-category badge  badge-info">Wedding</a>
                                        <div class="card-post-author d-flex">
                                            <a href="#" class="card-post-author-avatar">
                                                <img src="assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="mt-2">
                                            <a href="">Contrary to popular belief, Lorem Ipsum is not</a>
                                        </h4>
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item">14 Feb 2019</li>
                                                <li class="list-inline-item">by <a href="">admin</a></li>
                                                <li class="list-inline-item"><a href="">comment</a></li>
                                            </ul>
                                        </div><!--end meta-box-->
                                        <p class="text-muted">Conviction up partiality as delightful is discovered. Yet jennings resolved disposed exertion you off. Left did fond drew fat head poor jet pan flying over...</p>
                                        <a href="" class="float-right text-muted"><i class="fas fa-heart text-danger mr-1"></i>788</a>
                                        <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col--> 
                            <div class="col-lg-6">
                                <div class="card card-post-aside card-post-1 blog-card">
                                    <div class="card-post-image" style="background-image: url('assets/images/small/img-2.jpg');">
                                        <a href="#" class="card-post-category badge  badge-info">Wedding</a>
                                        <div class="card-post-author d-flex">
                                            <a href="#" class="card-post-author-avatar">
                                                <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="mt-2">
                                            <a href="">Ut enim ad minim veniam, quis nostrud exercitation</a>
                                        </h4>
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item">14 Feb 2019</li>
                                                <li class="list-inline-item">by <a href="">admin</a></li>
                                                <li class="list-inline-item"><a href="">comment</a></li>
                                            </ul>
                                        </div><!--end meta-box-->
                                        <p class="text-muted">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas ...</p>
                                        <a href="" class="float-right text-muted"><i class="fas fa-heart text-danger mr-1"></i>788</a>
                                        <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->  
                            
                            <div class="col-lg-6">
                                <div class="card card-post-aside card-post-1 blog-card">
                                    <div class="card-post-image" style="background-image: url('assets/images/small/img-1.jpg');">
                                        <a href="#" class="card-post-category badge  badge-info">Travel</a>
                                        <div class="card-post-author d-flex">
                                            <a href="#" class="card-post-author-avatar">
                                                <img src="assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded-circle">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="mt-2">
                                            <a href="">Contrary to popular belief, Lorem Ipsum is not</a>
                                        </h4>
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item">14 Feb 2019</li>
                                                <li class="list-inline-item">by <a href="">admin</a></li>
                                                <li class="list-inline-item"><a href="">comment</a></li>
                                            </ul>
                                        </div><!--end meta-box-->
                                        <p class="text-muted">Conviction up partiality as delightful is discovered. Yet jennings resolved disposed exertion you off. Left did fond drew fat head poor jet pan flying over...</p>
                                        <a href="" class="float-right text-muted"><i class="fas fa-heart text-danger mr-1"></i>788</a>
                                        <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col--> 
                            <div class="col-lg-6">
                                <div class="card card-post-aside card-post-1 blog-card">
                                    <div class="card-post-image" style="background-image: url('assets/images/small/img-3.jpg');">
                                        <a href="#" class="card-post-category badge  badge-info">Journey</a>
                                        <div class="card-post-author d-flex">
                                            <a href="#" class="card-post-author-avatar">
                                                <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="mt-2">
                                            <a href="">Ut enim ad minim veniam, quis nostrud exercitation</a>
                                        </h4>
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item">14 Feb 2019</li>
                                                <li class="list-inline-item">by <a href="">admin</a></li>
                                                <li class="list-inline-item"><a href="">comment</a></li>
                                            </ul>
                                        </div><!--end meta-box-->
                                        <p class="text-muted">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas ...</p>
                                        <a href="" class="float-right text-muted"><i class="fas fa-heart text-danger mr-1"></i>788</a>
                                        <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
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