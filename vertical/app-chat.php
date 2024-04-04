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
                                <button class="btn btn-info px-4 align-self-center report-btn">Creat Report</button>
                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-chat mr-2"></i>Chat</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                                    <li class="breadcrumb-item active">Chat</li>
                                </ol>
                            </div>                                      
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
            </div>
        </div>
        
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
                                <div class="chat-box-left">
                                    <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="general_chat_tab" data-toggle="pill" href="#general_chat" aria-selected="true">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="group_chat_tab" data-toggle="pill" href="#group_chat" aria-selected="false">Groups</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="personal_chat_tab" data-toggle="pill" href="#personal_chat" aria-selected="false">Personal</a>
                                        </li>
                                    </ul>
                                    <div class="chat-search">
                                        <div class="form-group"> 
                                            <div class="input-group">                                                
                                                <input type="text" id="chat-search" name="chat-search" class="form-control" placeholder="Search">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-primary shadow-none"><i class="fas fa-search"></i></button>
                                                </span>
                                            </div>                                                    
                                        </div>
                                    </div><!--end chat-search-->

                                    <div class="tab-content chat-list slimscroll" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="general_chat">
                                            <a href="" class="media new-message">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-success"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div class="d-inline-block">
                                                        <h6>Daniel Madsen</h6>
                                                        <p>Good morning! Congratulations Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>20 Feb</span>
                                                        <span>3</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->    
                                            <a href="" class="media new-message">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-success"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Robert Jefferson</h6>
                                                        <p>Congratulations Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>20 Feb</span>
                                                        <span>1</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Jesse Ross</h6>
                                                        <p>How are you Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>15 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->    
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Mary Schneider</h6>
                                                        <p>Have A Nice day...</p>
                                                    </div>
                                                    <div>
                                                        <span>14 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-success"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>David Herrmann</h6>
                                                        <p>Good morning! How are you?</p>
                                                    </div>
                                                    <div>
                                                        <span>10 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a>  <!--end media-->   
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Mary Hayes</h6>
                                                        <p>How are you Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>1 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Rita Duarte</h6>
                                                        <p>Have A Nice day...</p>
                                                    </div>
                                                    <div>
                                                        <span>30 Jan</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a>   <!--end media-->  
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-8.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Dennis Wilson</h6>
                                                        <p>Good morning! How are you?</p>
                                                    </div>
                                                    <div>
                                                        <span>26 Jan</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->                                            
                                        </div><!--end general chat-->

                                        <div class="tab-pane fade" id="group_chat">                                                
                                            <a href="" class="media new-message">
                                                <div class="media-left">
                                                    <div class="avatar-box thumb-lg align-self-center mr-2">
                                                        <span class="avatar-title bg-primary rounded-circle"><i class="fab fa-quinscape"></i></span>
                                                    </div>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Design Group</h6>
                                                        <p>Good morning! How are you?</p>
                                                    </div>
                                                    <div>
                                                        <span>20 Feb</span>
                                                        <span>1</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a> <!--end media-->
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <div class="avatar-box thumb-lg align-self-center mr-2">
                                                        <span class="avatar-title bg-success rounded-circle"><i class="fab fa-connectdevelop"></i></span>
                                                    </div>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Front end Developers</h6>
                                                        <p>Have A Nice day...</p>
                                                    </div>
                                                    <div>
                                                        <span>15 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a>   <!--end media-->  
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <div class="avatar-box thumb-lg align-self-center mr-2">
                                                        <span class="avatar-title bg-warning rounded-circle"><i class="far fa-gem"></i></span>
                                                    </div>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>UI/UX Designers</h6>
                                                        <p>Congratulations everybody... </p>
                                                    </div>
                                                    <div>
                                                        <span>14 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a><!--end media--> 
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <div class="avatar-box thumb-lg align-self-center mr-2">
                                                        <span class="avatar-title bg-pink rounded-circle"><i class="fab fa-react"></i></span>
                                                    </div>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>React Developers</h6>
                                                        <p>How are you Friends...</p>
                                                    </div>
                                                    <div>
                                                        <span>10 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a><!--end media-->   
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <div class="avatar-box thumb-lg align-self-center mr-2">
                                                        <span class="avatar-title bg-info rounded-circle"><i class="fas fa-globe"></i></span>
                                                    </div>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Marketing Group</h6>
                                                        <p>How are you Friends...</p>
                                                    </div>
                                                    <div>
                                                        <span>10 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a><!--end media-->   
                                        </div><!--end group chat-->

                                        <div class="tab-pane fade" id="personal_chat">
                                            <a href="" class="media new-message">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-success"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div class="d-inline-block">
                                                        <h6>Daniel Madsen</h6>
                                                        <p>Good morning! Congratulations Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>20 Feb</span>
                                                        <span>3</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a><!--end media-->     
                                            <a href="" class="media new-message">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-success"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Robert Jefferson</h6>
                                                        <p>Congratulations Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>20 Feb</span>
                                                        <span>1</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a><!--end media--> 
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Jesse Ross</h6>
                                                        <p>How are you Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>15 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a><!--end media-->     
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Mary Schneider</h6>
                                                        <p>Have A Nice day...</p>
                                                    </div>
                                                    <div>
                                                        <span>14 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a><!--end media--> 
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-success"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>David Herrmann</h6>
                                                        <p>Good morning! How are you?</p>
                                                    </div>
                                                    <div>
                                                        <span>10 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a><!--end media-->     
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Mary Hayes</h6>
                                                        <p>How are you Friend...</p>
                                                    </div>
                                                    <div>
                                                        <span>1 Feb</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a><!--end media--> 
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Rita Duarte</h6>
                                                        <p>Have A Nice day...</p>
                                                    </div>
                                                    <div>
                                                        <span>30 Jan</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a><!--end media-->     
                                            <a href="" class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/users/user-8.jpg" alt="user" class="rounded-circle thumb-lg">
                                                    <span class="round-10 bg-danger"></span>
                                                </div><!-- media-left -->
                                                <div class="media-body">
                                                    <div>
                                                        <h6>Dennis Wilson</h6>
                                                        <p>Good morning! How are you?</p>
                                                    </div>
                                                    <div>
                                                        <span>26 Jan</span>
                                                    </div>
                                                </div><!-- end media-body -->
                                            </a><!--end media-body-->  
                                        </div><!--end personal chat-->
                                    </div><!--end tab-content-->
                                </div><!--end chat-box-left -->

                                <div class="chat-box-right">
                                    <div class="chat-header">
                                        <a href="" class="media">
                                            <div class="media-left">
                                                <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-md">
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div>
                                                    <h6 class="mb-1 mt-0">Mary Schneider</h6>
                                                    <p class="mb-0">Last seen: 2 hours ago</p>
                                                </div>
                                            </div><!-- end media-body -->
                                        </a><!--end media-->   
                                        <div class="chat-features">
                                            <div class="d-none d-sm-inline-block">
                                                <a href=""><i class="fas fa-phone"></i></a>
                                                <a href=""><i class="fas fa-video"></i></a>
                                                <a href=""><i class="fas fa-trash-alt"></i></a>
                                                <a href=""><i class="fas fa-ellipsis-v"></i></a>                                                       
                                            </div>
                                        </div><!-- end chat-features -->
                                    </div><!-- end chat-header -->
                                    <div class="chat-body ">
                                        <div class="chat-detail slimscroll">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-msg">
                                                        <p>Good Morning !</p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                                    </div>
                                                </div><!--end media-body--> 
                                            </div><!--end media-->  
    
                                            <div class="media">                                                        
                                                <div class="media-body reverse">
                                                    <div class="chat-msg">
                                                        <p>Good Morning !</p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                                    </div>                                                            
                                                </div><!--end media-body--> 
                                                <div class="media-img">
                                                    <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                            </div><!--end media-->  
    
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                                <div class="media-body">                                                            
                                                    <div class="chat-msg">
                                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                                    </div>
                                                </div><!--end media-body--> 
                                            </div><!--end media-->  
    
                                            <div class="media">                                                        
                                                <div class="media-body reverse">
                                                    <div class="chat-msg">
                                                        <p>Good Morning !</p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p>It is a long established fact that a reader will be distracted by 
                                                            the readable content of a page when looking at its layout. 
                                                            The point of using Lorem Ipsum is that it has a more-or-less normal 
                                                            distribution of letters, as opposed to using 'Content here.
                                                        </p>
                                                    </div>                                                            
                                                </div><!--end media-body--> 
                                                <div class="media-img">
                                                    <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                            </div><!--end media-->  
    
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-msg">
                                                        <p>Good Morning !</p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p>It is a long established fact that a reader will be distracted by 
                                                            the readable content of a page when looking at its layout. 
                                                            The point of using Lorem Ipsum is that it has a more-or-less normal 
                                                            distribution of letters, as opposed to using 'Content here.
                                                        </p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p>Ok</p>
                                                    </div>
                                                </div><!--end media-body--> 
                                            </div> <!--end media--> 
    
                                            <div class="media">                                                        
                                                <div class="media-body reverse">
                                                    <div class="chat-msg">
                                                        <p>Good Morning !</p>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                                    </div>                                                            
                                                </div><!--end media-body--> 
                                                <div class="media-img">
                                                    <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-md">
                                                </div>
                                            </div> <!--end media--> 
                                        </div>  <!-- end chat-detail -->                                               
                                    </div><!-- end chat-body -->
                                    <div class="chat-footer">
                                        <div class="row">                                                    
                                            <div class="col-12 col-md-9">
                                                <span class="chat-admin"><img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-sm"></span>
                                                <input type="text" class="form-control" placeholder="Type something here...">
                                            </div><!-- col-8 -->
                                            <div class="col-3 text-right">
                                                <div class="d-none d-sm-inline-block chat-features">
                                                    <a href=""><i class="fas fa-camera"></i></a>
                                                    <a href=""><i class="fas fa-paperclip"></i></a>
                                                    <a href=""><i class="fas fa-microphone"></i></a>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end chat-footer -->
                                </div><!--end chat-box-right --> 
                            </div> <!-- end col -->                           
                        </div><!-- end row -->
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