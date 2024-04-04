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
                            <h4 class="page-title mb-2"><i class="mdi mdi-book-open-variant mr-2"></i>Contact list</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                                    <li class="breadcrumb-item active">Contact list</li>
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
                                <div class="card profile-card">
                                    <div class="card-body bg-primary p-0">
                                        <div class="media p-3  align-items-center">                                                
                                            <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-lg">
                                            <div class="media-body ml-3 align-self-center">
                                                <h5 class="mb-1 text-white">Sara Hopkins</h5>
                                                <p class="mb-0 font-12 text-white">@SaraHopkins.com</p>                                                    
                                            </div>
                                            <a class="btn btn-light btn-sm"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div><!--end card-body-->   
                                    <div class="card-body pb-0">
                                        <h6 class="text-center">Activity level : 90%</h6>
                                        <p class="font-14 text-muted text-center">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <ul class="list-inline list-unstyled profile-socials text-center mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" class=""><i class="fab fa-facebook-f bg-soft-primary"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class=""><i class="fab fa-twitter bg-soft-info"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class=""><i class="fab fa-dribbble bg-soft-danger"></i></a>
                                            </li>                                                                                                                
                                        </ul>
                                    </div><!--end card-body-->   
                                    <div class="card-body socials-data pb-0 px-0">
                                        <div class="row text-center border-top m-0">
                                            <div class="col-4 border-right py-3">
                                                <h3 class="mt-0 mb-1">50</h4>
                                                <span class="font-14 text-muted">Posts</span>
                                            </div><!--end col--> 
                                            <div class="col-4 border-right py-3">
                                                <h3 class="mt-0 mb-1">1250</h3>
                                                <span class="font-14 text-muted">Followers</span>
                                            </div><!--end col--> 
                                            <div class="col-4 py-3">
                                                <h3 class="mt-0 mb-1">250</h3>
                                                <span class="font-14 text-muted">Following</span>
                                            </div><!--end col--> 
                                        </div><!--end row--> 
                                    </div><!--end card-body-->                                         
                                </div><!--end card--> 
                            </div><!--end col-->
                            <div class="col-lg-3">
                                <div class="card profile-card">
                                    <div class="card-body bg-pink p-0">
                                        <div class="media p-3  align-items-center">                                                
                                            <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-lg">
                                            <div class="media-body ml-3  align-self-center">
                                                <h5 class="mb-1 text-white">Paul Schmidt</h5>
                                                <p class="mb-0 font-12 text-light">@PaulSchmidt.com</p>                                                    
                                            </div>
                                            <a class="btn btn-light btn-sm"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div><!--end card-body-->   
                                    <div class="card-body pb-0">
                                        <h6 class="text-center">Activity level : 90%</h6>
                                        <p class="font-14 text-muted text-center">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <ul class="list-inline list-unstyled profile-socials text-center mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" class=""><i class="fab fa-facebook-f bg-soft-primary"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class=""><i class="fab fa-twitter bg-soft-info"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class=""><i class="fab fa-dribbble bg-soft-danger"></i></a>
                                            </li>                                                                                                                
                                        </ul>
                                    </div><!--end card-body-->   
                                    <div class="card-body socials-data pb-0 px-0">
                                        <div class="row text-center border-top m-0">
                                            <div class="col-4 border-right py-3">
                                                <h3 class="mt-0 mb-1">50</h4>
                                                <span class="font-14 text-muted">Posts</span>
                                            </div><!--end col--> 
                                            <div class="col-4 border-right py-3">
                                                <h3 class="mt-0 mb-1">1250</h3>
                                                <span class="font-14 text-muted">Followers</span>
                                            </div><!--end col--> 
                                            <div class="col-4 py-3">
                                                <h3 class="mt-0 mb-1">250</h3>
                                                <span class="font-14 text-muted">Following</span>
                                            </div><!--end col--> 
                                        </div><!--end row--> 
                                    </div><!--end card-body-->                                         
                                </div><!--end card--> 
                            </div><!--end col-->
                            <div class="col-lg-3">
                                <div class="card profile-card">
                                    <div class="card-body bg-success p-0">
                                        <div class="media p-3  align-items-center">                                                
                                            <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-lg">
                                            <div class="media-body ml-3  align-self-center">
                                                <h5 class="mb-1 text-white">Allen Collins</h5>
                                                <p class="mb-0 font-12 text-light">@AllenCollins.com</p>                                                    
                                            </div>
                                            <a class="btn btn-light btn-sm"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div><!--end card-body-->
                                    <div class="card-body pb-0">
                                        <h6 class="text-center">Activity level : 90%</h6>
                                        <p class="font-14 text-muted text-center">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <ul class="list-inline list-unstyled profile-socials text-center mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" class=""><i class="fab fa-facebook-f bg-soft-primary"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class=""><i class="fab fa-twitter bg-soft-info"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class=""><i class="fab fa-dribbble bg-soft-danger"></i></a>
                                            </li>                                                                                                                
                                        </ul>
                                    </div><!--end card-body-->
                                    <div class="card-body socials-data pb-0 px-0">
                                        <div class="row text-center border-top m-0">
                                            <div class="col-4 border-right py-3">
                                                <h3 class="mt-0 mb-1">50</h4>
                                                <span class="font-14 text-muted">Posts</span>
                                            </div><!--end col--> 
                                            <div class="col-4 border-right py-3">
                                                <h3 class="mt-0 mb-1">1250</h3>
                                                <span class="font-14 text-muted">Followers</span>
                                            </div><!--end col--> 
                                            <div class="col-4 py-3">
                                                <h3 class="mt-0 mb-1">250</h3>
                                                <span class="font-14 text-muted">Following</span>
                                            </div><!--end col--> 
                                        </div><!--end row--> 
                                    </div><!--end card-body-->                                         
                                </div><!--end card--> 
                            </div><!--end col-->
                            <div class="col-lg-3">
                                <div class="card profile-card">
                                    <div class="card-body bg-secondary p-0">
                                        <div class="media p-3  align-items-center">                                                
                                            <img src="assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-lg">
                                            <div class="media-body ml-3  align-self-center">
                                                <h5 class="mb-1">Eva Keene</h5>
                                                <p class="mb-0 font-12">@EvaKeene.com</p>                                                    
                                            </div>
                                            <a class="btn btn-light btn-sm"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div><!--end card-body-->
                                    <div class="card-body pb-0">
                                        <h6 class="text-center">Activity level : 90%</h6>                                        
                                        <p class="font-14 text-muted text-center">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>                    
                                        <ul class="list-inline list-unstyled profile-socials text-center mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" class=""><i class="fab fa-facebook-f bg-soft-primary"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class=""><i class="fab fa-twitter bg-soft-info"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class=""><i class="fab fa-dribbble bg-soft-danger"></i></a>
                                            </li>                                                                                                                
                                        </ul>
                                    </div><!--end card-body-->
                                    <div class="card-body socials-data pb-0 px-0">
                                        <div class="row text-center border-top m-0">
                                            <div class="col-4 border-right py-3">
                                                <h3 class="mt-0 mb-1">50</h4>
                                                <span class="font-14 text-muted">Posts</span>
                                            </div><!--end col-->
                                            <div class="col-4 border-right py-3">
                                                <h3 class="mt-0 mb-1">1250</h3>
                                                <span class="font-14 text-muted">Followers</span>
                                            </div><!--end col-->
                                            <div class="col-4 py-3">
                                                <h3 class="mt-0 mb-1">250</h3>
                                                <span class="font-14 text-muted">Following</span>
                                            </div><!--end col--> 
                                        </div><!--end row--> 
                                    </div><!--end card-body-->                                         
                                </div><!--end card--> 
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card profile-card">
                                    <div class="card-body bg-soft-purple p-0">
                                        <div class="media p-3  align-items-center">                                                
                                            <img src="assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-lg">
                                            <div class="media-body ml-3  align-self-center">
                                                <h5 class="mb-1">Wendy Keen</h5>
                                                <p class="mb-0 font-12">@WendyKeen.com</p>                                                    
                                            </div>
                                            <a class="btn btn-purple btn-sm"><i class="far fa-trash-alt text-white"></i></a>
                                        </div>
                                    </div><!--end card-body--> 
                                    <div class="card-body pb-0">
                                        <h6 class="text-center">Activity level : 90%</h6>
                                        <p class="font-14 text-muted text-center">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end card-body--> 
                                    <div class="card-body socials-data pb-0 px-0">
                                        <div class="row text-center border-top m-0">
                                            <div class="col-6 border-right py-3">
                                                <h3 class="mt-0 mb-1">50</h4>
                                                <span class="font-14 text-muted">Projects</span>
                                            </div><!--end col--> 
                                            <div class="col-6 border-right py-3">
                                                <h3 class="mt-0 mb-1">1250</h3>
                                                <span class="font-14 text-muted">Followers</span>
                                            </div>  <!--end col-->                                          
                                        </div><!--end row-->
                                    </div> <!--end card-body-->                                       
                                </div><!--end col-->
                            </div><!--end col--> 
                            <div class="col-lg-3">
                                <div class="card profile-card">
                                    <div class="card-body bg-soft-info p-0">
                                        <div class="media p-3  align-items-center">                                                
                                            <img src="assets/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-lg">
                                            <div class="media-body ml-3  align-self-center">
                                                <h5 class="mb-1">Merri Diamond</h5>
                                                <p class="mb-0 font-12">@MerriDiamond.com</p>                                                    
                                            </div>
                                            <a class="btn btn-info btn-sm"><i class="far fa-trash-alt text-white"></i></a>
                                        </div>
                                    </div><!--end card-body--> 
                                    <div class="card-body pb-0">
                                        <h6 class="text-center">Activity level : 90%</h6>
                                        <p class="font-14 text-muted text-center">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end card-body--> 
                                    <div class="card-body socials-data pb-0 px-0">
                                        <div class="row text-center border-top m-0">
                                            <div class="col-6 border-right py-3">
                                                <h3 class="mt-0 mb-1">50</h4>
                                                <span class="font-14 text-muted">Projects</span>
                                            </div><!--end col-->
                                            <div class="col-6 border-right py-3">
                                                <h3 class="mt-0 mb-1">1250</h3>
                                                <span class="font-14 text-muted">Followers</span>
                                            </div>  <!--end col-->                                          
                                        </div><!--end row-->
                                    </div> <!--end card-body-->                                       
                                </div><!--end col-->
                            </div><!--end col--> 
                            <div class="col-lg-3">
                                <div class="card profile-card">
                                    <div class="card-body bg-soft-warning p-0">
                                        <div class="media p-3  align-items-center">                                                
                                            <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-lg">
                                            <div class="media-body ml-3  align-self-center">
                                                <h5 class="mb-1">Harry McCall</h5>
                                                <p class="mb-0 font-12">@HarryMcCall.com</p>                                                    
                                            </div>
                                            <a class="btn btn-warning btn-sm"><i class="far fa-trash-alt text-white"></i></a>
                                        </div>
                                    </div><!--end card-body--> 
                                    <div class="card-body pb-0">
                                        <h6 class="text-center">Activity level : 90%</h6>
                                        <p class="font-14 text-muted text-center">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end card-body--> 
                                    <div class="card-body socials-data pb-0 px-0">
                                        <div class="row text-center border-top m-0">
                                            <div class="col-6 border-right py-3">
                                                <h3 class="mt-0 mb-1">50</h4>
                                                <span class="font-14 text-muted">Projects</span>
                                            </div><!--end col--> 
                                            <div class="col-6 border-right py-3">
                                                <h3 class="mt-0 mb-1">1250</h3>
                                                <span class="font-14 text-muted">Followers</span>
                                            </div>  <!--end col-->                                          
                                        </div><!--end row-->
                                    </div> <!--end card-body-->                                       
                                </div><!--end col-->
                            </div><!--end col--> 
                            <div class="col-lg-3">
                                <div class="card profile-card">
                                    <div class="card-body bg-soft-dark p-0">
                                        <div class="media p-3  align-items-center">                                                
                                            <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-lg">
                                            <div class="media-body ml-3  align-self-center">
                                                <h5 class="mb-1">Dessie Parks</h5>
                                                <p class="mb-0 font-12">@DessieParks.com</p>                                                    
                                            </div>
                                            <a class="btn btn-dark btn-sm"><i class="far fa-trash-alt text-white"></i></a>
                                        </div>
                                    </div><!--end card-body-->
                                    <div class="card-body pb-0">
                                        <h6 class="text-center">Activity level : 90%</h6>
                                        <p class="font-14 text-muted text-center">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-dark" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end card-body-->
                                    <div class="card-body socials-data pb-0 px-0">
                                        <div class="row text-center border-top m-0">
                                            <div class="col-6 border-right py-3">
                                                <h3 class="mt-0 mb-1">50</h4>
                                                <span class="font-14 text-muted">Projects</span>
                                            </div><!--end col-->
                                            <div class="col-6 border-right py-3">
                                                <h3 class="mt-0 mb-1">1250</h3>
                                                <span class="font-14 text-muted">Followers</span>
                                            </div>  <!--end col-->                                          
                                        </div><!--end row-->
                                    </div> <!--end card-body-->                                       
                                </div><!--end col-->
                            </div><!--end col-->                            
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card  profile-card">
                                    <img src="assets/images/widgets/profile-1.jpg" alt="" class="img-fluid">                                       
                                    <div class="card-body pb-0 profile-card-user">
                                        <div class="text-center">
                                            <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-2">
                                            <h5>Theresa Clark</h5>
                                            <p class="mb-0 font-12 text-muted"><i class="fas fa-briefcase mr-2"></i>Freelance UI/UX Desiner</p>
                                            <a class="btn btn-sm btn-primary text-light mt-3">+ Follow</a>
                                            <a class="btn btn-sm btn-info text-light mt-3">Message</a>
                                        </div>
                                    </div><!--end card-body-->
                                    <div class="card-body pb-0 px-0">
                                        <div class="row text-center border-top m-0">
                                            <div class="col-4 border-right p-3">
                                                <a href="#">
                                                    <i class="fas fa-user-plus text-primary font-20"></i>  
                                                </a>                                                                                                      
                                            </div><!--end col-->
                                            <div class="col-4 border-right p-3">
                                                <a href="#">
                                                    <i class="fas fa-comment-alt text-info font-20"></i>  
                                                </a>
                                            </div><!--end col-->
                                            <div class="col-4 p-3">
                                                <a href="#">
                                                    <i class="fas fa-heart text-danger font-20"></i>  
                                                </a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-3">
                                <div class="card  profile-card">
                                    <img src="assets/images/widgets/profile-2.jpg" alt="" class="img-fluid">                                       
                                    <div class="card-body pb-0 profile-card-user">
                                        <div class="text-center">
                                            <img src="assets/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-2">
                                            <h5>Cindy Huey</h5>
                                            <p class="mb-0 font-12 text-muted"><i class="fas fa-briefcase mr-2"></i>Freelance UI/UX Desiner</p>
                                            <a class="btn btn-sm btn-primary text-light mt-3">+ Follow</a>
                                            <a class="btn btn-sm btn-info text-light mt-3">Message</a>
                                        </div>
                                    </div><!--end card-body-->
                                    <div class="card-body pb-0 px-0">
                                        <div class="row text-center border-top m-0">
                                            <div class="col-4 border-right p-3 bg-soft-primary">
                                                <a href="#">
                                                    <i class="fas fa-user-plus text-primary font-20"></i>  
                                                </a>                                                                                                      
                                            </div><!--end col-->
                                            <div class="col-4 border-right p-3 bg-soft-info">
                                                <a href="#">
                                                    <i class="fas fa-comment-alt text-info font-20"></i>  
                                                </a>
                                            </div><!--end col-->
                                            <div class="col-4 p-3 bg-soft-danger">
                                                <a href="#">
                                                    <i class="fas fa-heart text-danger font-20"></i>  
                                                </a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            
                            <div class="col-lg-3">
                                <div class="card  profile-card">
                                    <img src="assets/images/widgets/profile-3.jpg" alt="" class="img-fluid">                                       
                                    <div class="card-body pb-0 profile-card-user">
                                        <div class="text-center">
                                            <img src="assets/images/users/user-9.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-2">
                                            <h5>Andrew Patrick</h5>
                                            <p class="mb-0 font-12 text-muted"><i class="fas fa-briefcase mr-2"></i>Freelance UI/UX Desiner</p>
                                            <a class="btn btn-sm btn-primary text-light mt-3">+ Follow</a>
                                            <a class="btn btn-sm btn-info text-light mt-3">Message</a>
                                        </div>
                                    </div><!--end card-body-->
                                    <div class="card-body pb-0 px-0">
                                        <div class="row text-center border-top m-0">
                                            <div class="col-4 border-right p-3 bg-light">
                                                <a href="#">
                                                    <i class="fas fa-user-plus text-primary font-20"></i>  
                                                </a>                                                                                                      
                                            </div><!--end col-->
                                            <div class="col-4 border-right p-3 bg-light">
                                                <a href="#">
                                                    <i class="fas fa-comment-alt text-info font-20"></i>  
                                                </a>
                                            </div><!--end col-->
                                            <div class="col-4 p-3 bg-light">
                                                <a href="#">
                                                    <i class="fas fa-heart text-danger font-20"></i>  
                                                </a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="card  profile-card">
                                    <img src="assets/images/widgets/profile-4.jpg" alt="" class="img-fluid">                                       
                                    <div class="card-body pb-0 profile-card-user">
                                        <div class="text-center">
                                            <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-2">
                                            <h5>Phillip Smith</h5>
                                            <p class="mb-0 font-12 text-muted"><i class="fas fa-briefcase mr-2"></i>Freelance UI/UX Desiner</p>
                                            <a class="btn btn-sm btn-primary text-light mt-3">+ Follow</a>
                                            <a class="btn btn-sm btn-info text-light mt-3">Message</a>
                                        </div>
                                    </div><!--end col-->
                                    <div class="card-body pb-0 px-0">
                                        <div class="row text-center border-top m-0">
                                            <div class="col-4 border-right p-3 bg-dark">
                                                <a href="#">
                                                    <i class="fas fa-user-plus text-primary font-20"></i>  
                                                </a>                                                                                                      
                                            </div><!--end col-->
                                            <div class="col-4 border-right p-3 bg-dark">
                                                <a href="#">
                                                    <i class="fas fa-comment-alt text-info font-20"></i>  
                                                </a>
                                            </div><!--end col-->
                                            <div class="col-4 p-3 bg-dark">
                                                <a href="#">
                                                    <i class="fas fa-heart text-danger font-20"></i>  
                                                </a>
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

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>