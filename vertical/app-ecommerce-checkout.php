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
                            <h4 class="page-title mb-2"><i class="mdi mdi-cash-usd mr-2"></i>Checkout</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                                    <li class="breadcrumb-item active">Checkout</li>
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
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-2">Order Summary</h4>
                                        <div class="table-responsive shopping-cart">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Quantity</th>                                                        
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/products/img-5.png" alt="" height="52">
                                                            <p class="d-inline-block align-middle mb-0 product-name">Reebok Shoes</p> 
                                                        </td>
                                                        <td>
                                                           2
                                                        </td>
                                                       <td>$198</td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/products/3.jpg" alt="" height="52">
                                                            <p class="d-inline-block align-middle mb-0 product-name">Brown Morden Chair</p> 
                                                        </td>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>$150</td>                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/products/img-4.png" alt="" height="52">
                                                            <p class="d-inline-block align-middle mb-0 product-name">Lava Purse</p> 
                                                        </td>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>$49</td>                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/products/2.jpg" alt="" height="52">
                                                            <p class="d-inline-block align-middle mb-0 product-name">Important Chair</p>
                                                        </td>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>$99</td>
                                                    </tr>  
                                                    <tr>
                                                        <td>
                                                            <h6>Total :</h6>
                                                        </td>
                                                        <td></td>
                                                        <td class="font-weight-bold">$496</td>
                                                    </tr>                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="total-payment">
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="payment-title">Subtotal</td>
                                                        <td>$496.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="payment-title">Shipping</td>
                                                        <td>
                                                            Shipping Charge : $5.00
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="payment-title">Promo Code</td>
                                                        <td>-$10.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Total</td>
                                                        <td class="font-weight-bold">$491.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-2">Delivery Address</h4>
                                        <form class="mb-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>First Name <small class="text-danger font-13">*</small></label>
                                                        <input type="text" class="form-control" id="firstname" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Last Name <small class="text-danger font-13">*</small></label>
                                                        <input type="email" class="form-control" id="lastname" required="">
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">                            
                                                    <div class="form-group">
                                                        <label>Delivery Address <small class="text-danger font-13">*</small></label>
                                                        <input type="text" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">                            
                                                    <div class="form-group">
                                                        <label>Address <small class="text-danger font-13">*</small></label>
                                                        <input type="text" class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>City <small class="text-danger font-13">*</small></label>
                                                        <input type="text" class="form-control" id="city" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label pt-0">State <small class="text-danger font-13">*</small></label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Gujarat</option>
                                                            <option>New york</option>
                                                            <option>California</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label pt-0">Country <small class="text-danger font-13">*</small></label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>India</option>
                                                            <option>USA</option>
                                                            <option>New Zealand</option>                                                            
                                                        </select>
                                                    </div>            
                                                </div>                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">                            
                                                    <div class="form-group">
                                                        <label>Zip code <small class="text-danger font-13">*</small></label>
                                                        <input type="text" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">                            
                                                    <div class="form-group">
                                                        <label>Email Address <small class="text-danger font-13">*</small></label>
                                                        <input type="email" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">                            
                                                    <div class="form-group">
                                                        <label>Mobile No <small class="text-danger font-13">*</small></label>
                                                        <input type="text" class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group mb-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="horizontalCheckbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="horizontalCheckbox">Confirm Shipping Address</label>
                                                        </div>
                                                    </div>              
                                                </div>
                                            </div>                                            
                                        </form>
                                    </div>                                    
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-2">Billing Details</h4>
                                        <div class="billing-nav">
                                            <ul class="nav nav-pills justify-content-center text-center mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-credit-card-tab" data-toggle="pill" href="#pills-credit-card"  aria-selected="true"><i class="mdi mdi-credit-card d-block mx-auto text-danger font-20"></i>Credit-Card</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-paypal-tab" data-toggle="pill" href="#pills-paypal" aria-selected="false"><i class="mdi mdi-paypal d-block mx-auto text-info font-20"></i>Paypal</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-bitcoin-tab" data-toggle="pill" href="#pills-bitcoin" aria-selected="false"><i class="mdi mdi-bitcoin d-block mx-auto text-warning font-20"></i>Bitcoin</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-credit-card">
                                                    <div class="demo-container">
                                                        <div class="card-wrapper mb-4"></div>                                                
                                                        <div class="form-container">
                                                            <form class="bill-form" action="">
                                                                <div class="row">
                                                                    <div class="col-md-6">                            
                                                                        <div class="form-group">
                                                                            <label>Card Number</label>
                                                                            <input placeholder="Card number" class="form-control" type="tel" name="number">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">                            
                                                                        <div class="form-group">
                                                                            <label>Full Name</label>
                                                                            <input placeholder="Full name" class="form-control" type="text" name="name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">                            
                                                                        <div class="form-group">
                                                                            <label>Ex. Date</label>
                                                                            <input placeholder="MM/YY" class="form-control" type="tel" name="expiry">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">                            
                                                                        <div class="form-group">
                                                                            <label>CVV</label>
                                                                            <input placeholder="CVC" class="form-control" type="number" name="cvc">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button class="btn btn-success px-3">Pay Now</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-paypal">
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-6 offset-lg-3">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h4 class="title-text"><i class="mdi mdi-paypal d-block mx-auto text-info font-20"></i>Add Paypal Form</h4>
                                                                    <p class="mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, 
                                                                        but the majority have suffered alteration in some form, by injected humour, 
                                                                        or randomised words.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tab-pane fade" id="pills-bitcoin">
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-6 offset-lg-3">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h4 class="title-text"><i class="mdi mdi-bitcoin d-block mx-auto text-warning font-20"></i>Add Bitcoin Form</h4>
                                                                    <p class="mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, 
                                                                        but the majority have suffered alteration in some form, by injected humour, 
                                                                        or randomised words.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
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

        <script src="assets/plugins/creditcard/card.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
            new Card({
                form: document.querySelector('.bill-form'),
                container: '.card-wrapper'
            });
        </script>
       

    </body>
</html>