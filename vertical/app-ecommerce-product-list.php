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
                            <h4 class="page-title mb-2"><i class="mdi mdi-format-list-checkbox mr-2"></i>Product List</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                                    <li class="breadcrumb-item active">Product List</li>
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
        
                                        <h4 class="mt-0 header-title">Product Stock</h4>
                                        <p class="text-muted mb-4 font-13">
                                            Available all products.
                                        </p>
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Pics</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Avai.Color</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/img-2.png" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Adidas Footboll</a> 
                                                        <br>
                                                        <span class="text-muted font-13">Size-05 (Model 2019)</span> 
                                                    </p>
                                                </td>
                                                <td>Sports</td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td><span class="badge badge-soft-warning">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                      </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/1.jpg" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Morden Chair</a> 
                                                        <br>
                                                        <span class="text-muted font-13">Size-Mediam (Model 2019)</span> 
                                                    </p>
                                                </td>
                                                <td>Interior</td>
                                                <td>10</td>
                                                <td>$99</td>
                                                <td><span class="badge badge-soft-pink">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/img-5.png" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Reebok Shoes</a> 
                                                        <br>
                                                        <span class="text-muted font-13">size-08 (Model 2019)</span> 
                                                    </p>
                                                </td>
                                                <td>Footwear</td>
                                                <td>24</td>
                                                <td>$49</td>
                                                <td><span class="badge badge-soft-info">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/img-6.png" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Cosco Vollyboll</a> 
                                                        <br>
                                                        <span class="text-muted font-13">size-04 (Model 2019)</span> 
                                                    </p>
                                                </td>
                                                <td>Sports</td>
                                                <td>8</td>
                                                <td>$49</td>
                                                <td><span class="badge badge-soft-info">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/img-4.png" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Royal Purse</a> 
                                                        <br>
                                                        <span class="text-muted font-13">Pure Lether 100%</span> 
                                                    </p>
                                                </td>
                                                <td>Life Style</td>
                                                <td>52</td>
                                                <td>$89</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/3.jpg" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">New Morden Chair</a> 
                                                        <br>
                                                        <span class="text-muted font-13">size-05 (Model 2019)</span> 
                                                    </p>
                                                </td>
                                                <td>Interior</td>
                                                <td>6</td>
                                                <td>$20</td>
                                                <td><span class="badge badge-soft-warning">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/2.jpg" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Important Chair</a> 
                                                        <br>
                                                        <span class="text-muted font-13">size-05 (Model 2019)</span> 
                                                    </p>
                                                </td>
                                                <td>Interior</td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td><span class="badge badge-soft-warning">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                        </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/img-2.png" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Nivya Footboll</a> 
                                                        <br>
                                                        <span class="text-muted font-13">Size-05 (Model 2019)</span> 
                                                    </p>
                                                </td>
                                                <td>Sports</td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td><span class="badge badge-soft-warning">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                      </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/1.jpg" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Green Morden Chair</a> 
                                                        <br>
                                                        <span class="text-muted font-13">Size-Mediam (Model 2019)</span> 
                                                    </p>
                                                </td>
                                                <td>Interior</td>
                                                <td>10</td>
                                                <td>$99</td>
                                                <td><span class="badge badge-soft-pink">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/img-5.png" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Bata Shoes</a> 
                                                        <br>
                                                        <span class="text-muted font-13">size-08 (Model 2019)</span> 
                                                    </p>
                                                </td>
                                                <td>Footwear</td>
                                                <td>24</td>
                                                <td>$49</td>
                                                <td><span class="badge badge-soft-info">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/img-6.png" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Nike Vollyboll</a> 
                                                        <br>
                                                        <span class="text-muted font-13">size-04 (Model 2019)</span> 
                                                    </p>
                                                </td>
                                                <td>Sports</td>
                                                <td>8</td>
                                                <td>$49</td>
                                                <td><span class="badge badge-soft-info">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/img-4.png" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Lava Purse</a> 
                                                        <br>
                                                        <span class="text-muted font-13">Pure Lether 100%</span> 
                                                    </p>
                                                </td>
                                                <td>Life Style</td>
                                                <td>52</td>
                                                <td>$89</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/3.jpg" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Brown Morden Chair</a> 
                                                        <br>
                                                        <span class="text-muted font-13">size-05 (Model 2019)</span> 
                                                    </p>
                                                </td>
                                                <td>Interior</td>
                                                <td>6</td>
                                                <td>$20</td>
                                                <td><span class="badge badge-soft-warning">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/2.jpg" alt="" height="52">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Best Look Chair</a> 
                                                        <br>
                                                        <span class="text-muted font-13">size-05 (Model 2019)</span> 
                                                    </p>
                                                </td>
                                                <td>Interior</td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td><span class="badge badge-soft-warning">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i></button>
                                                        </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->        
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

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
            $('#datatable').DataTable();
        </script>

    </body>
</html>