<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
?>

    <body class="account-body">

        <!-- Log In page -->
        <div class="row vh-100">
            <div class="col-lg-3  pr-0">
                <div class="card mb-0 shadow-none">
                    <div class="card-body">
                        
                        <div class="px-3">
                            <div class="media">
                                <a href="index.php" class="logo logo-admin"><img src="assets/images/makanterus_logogram.png" height="55" alt="logo" class="my-3"></a>
                                <div class="media-body ml-3 align-self-center">                                                                                                                       
                                    <h4 class="mt-3 ml-1 mb-1">Makan Terus Internal Mode</h4>
                                    <p class="text-muted ml-1 mb-0">Sign in to continue to Makan Terus.</p>
                                </div>
                            </div>                            
                            
                            <form class="form-horizontal my-5" method="POST" action="auth-login-process.php">
    
                                <div class="form-group">
                                    <label for="userid">User ID</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="userID" name="userID" placeholder="Enter ID">
                                    </div>                                    
                                </div>
    
                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <div class="input-group mb-5">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-key font-16"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id="pasword" name="pasword" placeholder="Enter password">
                                    </div>                                
                                </div>
    
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-block waves-effect waves-light text-white" style="background-color:#363e47" name="login" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                </div>                            
                            </form>
                        </div>
                       
                                             
                    </div>
                </div>
            </div>
            <div class="col-lg-9 p-0 d-flex justify-content-center">
                <div class="accountbg d-flex align-items-center"> 
                    <div class="account-title text-white text-center">
                        <img src="assets/images/makanterus_logogramWhite.png" alt="" class="logo-sm mb-3" style="width: 20%; height: auto;">
                        <br>
                        <img src="assets/images/makanterus_logotypeWhite.png" alt="" class="logo-lg" style="width: 50%; height: auto;">
                        <div class="border w-55 mt-5 mx-auto border-white"></div>
                        <h1 class="">INTERNAL MODE</h1>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- End Log In page -->


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