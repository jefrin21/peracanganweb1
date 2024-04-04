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
                            <h4 class="page-title mb-2"><i class="mdi mdi-email-open-outline mr-2"></i>Email Read</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
                                    <li class="breadcrumb-item active">Email Read</li>
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
                                <!-- Left sidebar -->
                                <div class="email-leftbar">
                                    <a href="#custom-modal" class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light" data-animation="fadein" data-plugin="custommodal"
                                        data-overlaySpeed="200" data-overlayColor="#36404a"><i class="fas fa-feather-alt mr-2"></i>Compose
                                    </a>
    
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="mail-list">
                                                <a href="#" class="active pt-0">Inbox <span class="ml-1">(51)</span></a>
                                                <a href="#">Starred</a>
                                                <a href="#">Important</a>
                                                <a href="#">Draft</a>
                                                <a href="#">Sent Mail</a>
                                                <a href="#">Trash</a>
                                            </div>
            
                                            <h5 class="my-4">Labels</h5>
                                            <div class="mail-list">
                                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-right mt-1 mr-1"></span>Theme Support</a>
                                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-right mt-1 mr-1"></span>Freelance</a>
                                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-purple float-right mt-1 mr-1"></span>Social</a>
                                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-pink float-right mt-1 mr-1"></span>Friends</a>
                                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-right mt-1 mr-1"></span>Family</a>
                                            </div>
            
                                            <h5 class="my-4">Chat</h5>
                                            <div class="">
                                                <a href="#" class="media">
                                                    <img class="d-flex mr-3 rounded-circle" src="assets/images/users/user-1.jpg" alt="Generic placeholder image" height="36">
                                                    <div class="media-body chat-user-box">
                                                        <p class="user-title m-0">Scott Median</p>
                                                        <p class="text-muted">Hello</p>
                                                    </div>
                                                </a>
            
                                                <a href="#" class="media">
                                                    <img class="d-flex mr-3 rounded-circle" src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="36">
                                                    <div class="media-body chat-user-box">
                                                        <p class="user-title m-0">Julian Rosa</p>
                                                        <p class="text-muted">What about our next..</p>
                                                    </div>
                                                </a>
            
                                                <a href="#" class="media">
                                                    <img class="d-flex mr-3 rounded-circle" src="assets/images/users/user-3.jpg" alt="Generic placeholder image" height="36">
                                                    <div class="media-body chat-user-box">
                                                        <p class="user-title m-0">David Medina</p>
                                                        <p class="text-muted">Yeah everything is fine</p>
                                                    </div>
                                                </a>
            
                                                <a href="#" class="media">
                                                    <img class="d-flex mr-3 rounded-circle" src="assets/images/users/user-4.jpg" alt="Generic placeholder image" height="36">
                                                    <div class="media-body chat-user-box">
                                                        <p class="user-title m-0">Jay Baker</p>
                                                        <p class="text-muted">Wow that's great</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div>
                                <!-- End Left sidebar -->
    
    
                                <!-- Right Sidebar -->
                                <div class="email-rightbar">
                                    <div class="float-right d-flex justify-content-between">
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-question-circle"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Updates</a>
                                                <a class="dropdown-item" href="#">Social</a>
                                                <a class="dropdown-item" href="#">Team Manage</a>
                                            </div>
                                        </div>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-cog"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Display density</a>
                                                <a class="dropdown-item" href="#">Themes</a>
                                                <a class="dropdown-item" href="#">Help</a>
                                            </div>
                                        </div>
                                    </div><!-- end div -->
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fas fa-inbox"></i></button>
                                            <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fas fa-exclamation-circle"></i></button>
                                            <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fas fa-trash"></i></button>
                                        </div>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-folder"></i><i class="mdi mdi-chevron-down ml-1"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Updates</a>
                                                <a class="dropdown-item" href="#">Social</a>
                                                <a class="dropdown-item" href="#">Team Manage</a>
                                            </div>
                                        </div>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-tag"></i><i class="mdi mdi-chevron-down ml-1"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Updates</a>
                                                <a class="dropdown-item" href="#">Social</a>
                                                <a class="dropdown-item" href="#">Team Manage</a>
                                            </div>
                                        </div>
    
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                More<i class="mdi mdi-chevron-down ml-1"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Mark as Unread</a>
                                                <a class="dropdown-item" href="#">Mark as Important</a>
                                                <a class="dropdown-item" href="#">Add to Tasks</a>
                                                <a class="dropdown-item" href="#">Add Star</a>
                                                <a class="dropdown-item" href="#">Mute</a>
                                            </div>
                                        </div>                                        
                                    </div><!-- end toolbar -->
    
    
                                    <div class="card mt-3">
                                        <div class="card-body">
    
                                            <div class="media mb-3">
                                                <img class="d-flex mr-3 rounded-circle thumb-md" src="assets/images/users/user-5.jpg" alt="Generic placeholder image">
                                                <div class="media-body align-self-center">
                                                    <h4 class="font-14 m-0">Humberto D. Champion</h4>
                                                    <small class="text-muted">support@domain.com</small>
                                                </div>
                                            </div>
    
                                            <h4 class="mt-0">This Week's Top Stories</h4>
    
                                            <p>Dear Lorem Ipsum,</p>
                                            <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate molestie. In at felis ac velit maximus
                                                convallis.</p>
                                            <p>Sed elementum turpis eu lorem interdum, sed porttitor eros commodo. Nam eu venenatis tortor, id lacinia diam. Sed aliquam in dui et porta. Sed bibendum orci non tincidunt ultrices. Vivamus fringilla, mi lacinia dapibus condimentum, ipsum urna lacinia
                                                lacus, vel tincidunt mi nibh sit amet lorem.</p>
                                            <p>Sincerly,</p>
                                            <hr/>
    
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="assets/images/small/img-4.jpg" alt="Card image cap">
                                                        <div class="py-2 text-center">
                                                            <a href="" class="text-muted font-600">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="assets/images/small/img-5.jpg" alt="Card image cap">
                                                        <div class="py-2 text-center">
                                                            <a href="" class="text-muted font-600">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <a href="#custom-modal" class="btn btn-primary waves-effect"  data-animation="fadein" data-plugin="custommodal"
                                            data-overlaySpeed="200" data-overlayColor="#36404a"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
    
                                    </div>
    
    
                                </div> <!-- end Col -->
    
                            </div>
    
                        </div><!-- End row -->
    
                    </div><!-- container -->

                     <!-- Modal -->
                    <div id="custom-modal" class="modal-demo text-left">
                        <button type="button" class="close" onclick="Custombox.modal.close();">
                            <span>&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="custom-modal-title">Compose Mail</h4>
                        <div class="card mb-0 p-3">
                            <form role="form">
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control" placeholder="To">
                                </div><!--end form-group-->
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" placeholder="Cc">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" placeholder="Bcc">
                                        </div>
                                    </div>
                                </div><!--end form-group-->
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div><!--end form-group-->
                                <div class="form-group mb-3">
                                    <div class="summernote">
                                        <h6>Hello Summernote</h6>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p>
                                            End of air-mode area
                                        </p>

                                    </div>
                                </div><!--end form-group-->

                                <div class="btn-toolbar form-group mb-0">
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-success waves-effect waves-light mr-2"><i
                                                class="far fa-save"></i></button>
                                        <button type="button" class="btn btn-success waves-effect waves-light mr-2"><i
                                                class="far fa-trash-alt"></i></button>
                                        <button class="btn btn-info waves-effect waves-light"><span>Send</span> <i
                                                class="far fa-paper-plane ml-3"></i></button>
                                    </div>
                                </div><!--end form-group-->
                            </form><!--end form-->
                        </div><!--end card-->
                    </div><!--end custom-modal-->

                    <?php
                    include 'footer.php';
                    ?>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!--form validation init-->
        <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- Modal-Effect -->
        <script src="assets/plugins/custombox/custombox.min.js"></script>
        <script src="assets/plugins/custombox/custombox.legacy.min.js"></script>


        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 320,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });

            });
            $('[data-plugin="custommodal"]').on('click', function( e ) {
                var modal = new Custombox.modal({
                    content: {
                        target: $(this).attr("href"),
                        effect: $(this).attr("data-animation")
                    }
                });
                modal.open();
            });
        </script>


    </body>
</html>