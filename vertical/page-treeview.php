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
                            <h4 class="page-title mb-2"><i class="mdi mdi-file-tree mr-2"></i>Treeview</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Treeview</li>
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
                            <div class=" col-sm-6">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Default Tree</h4>
                                        <div id="jstree">
                                            <!-- in this example the tree is populated from inline HTML -->
                                            <ul>
                                                <li class="jstree-open"  data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Root node 1
                                                    <ul>
                                                        <li data-jstree='{"icon":"fa fa-folder text-info font-20"}'>Child node 1</li>
                                                        <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child node 2</li>
                                                        <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child node 3</li>
                                                        <li  data-jstree='{"icon":"fa fa-folder text-warning font-20"}' class="jstree-open">Child node 3
                                                            <ul>
                                                                <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child node 1</li>
                                                                <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child node 2
                                                                    <ul>
                                                                        <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child node 1</li>
                                                                        <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child node 2</li>
                                                                    </ul>
                                                                </li>
                                                                <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child node 3</li>
                                                                <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child node 4</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Root node 2
                                                    <ul>
                                                        <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child</li>
                                                        <li data-jstree='{"icon":"fa fa-folder text-warning font-20", "disabled":true}'>
                                                            Child
                                                        </li>                                                           
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-6">
                                <div class="card">                                        
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Checkable Tree</h4>
                                        <div id="jstree-checkbox">
                                            <!-- in this example the tree is populated from inline HTML -->
                                            <ul>
                                                <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}' class="jstree-open">Root node 1
                                                    <ul>
                                                        <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child node 1</li>
                                                        <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child node 2</li>
                                                        <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}' class="jstree-open">Child node 3
                                                            <ul>
                                                                <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child node 1</li>
                                                                <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Child node 2</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{"icon":"fa fa-folder text-warning font-20"}'>Root node 2</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->              
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

        <script src="assets/plugins/treeview/jstree.min.js"></script>
        <script src="assets/plugins/treeview/file-explore.js"></script>
        <script src="assets/pages/jquery.treeview.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>