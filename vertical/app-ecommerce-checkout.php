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

                <!-- barang yang mau dibeli -->
                <div class="page-content">
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body ">
                                        <div class="text-center d-flex justify-content-between">
                                            <div>
                                            <h4 class="header-title mt-0 mb-2 text-center">ORDER SUMMARY</h4>
                                            </div>
                                            <?php 
                                                if(isset($_GET["id"])){
                                                    $qr="SELECT * FROM pelanggan WHERE PelangganID=".$_GET["id"];
                                                    $query = mysqli_query($koneksi,$qr);
                                                    while ($data = mysqli_fetch_array($query)){
                                                        $_SESSION["custName"]=$data["Nama"];
                                                        $_SESSION["custEmail"]=$data["Email"];
                                                        $_SESSION["custPoint"]=$data["Points"];
                                                     }  
                                                   ?>
                                                   <?php if( $_SESSION["custName"] == true){ ?>
                                                       <div>
                                                            <h5 class="text-successs"><?php echo $_SESSION["custName"]; ?></h5>
                                                        </div>
                                                        <div>
                                                            <button class="btn-success px-3 rounded-lg col-auto mx-auto " name="return" onclick="window.location.href='page-customer-promo.php'">Ganti &nbsp; <i class="mdi mdi-autorenew"></i></button>                                        
                                                        </div>

                                                    <?php
                                                    }else{
                                                    ?>
                                                        <div>
                                                            <button class="btn-success px-4 rounded-lg col-auto mx-auto" name="return" onclick="window.location.href='page-customer-promo.php'">ADD CUSTOMER &nbsp;&nbsp; <i class="fas fa-plus"></i></button>                                        
                                                        </div>
                                                    <?php 
                                                     }                                             
                                                    } else{ 
                                                    ?>
                                                        <div>
                                                            <button class="btn-success px-4 rounded-lg col-auto mx-auto" name="return" onclick="window.location.href='page-customer-promo.php'">ADD CUSTOMER &nbsp;&nbsp; <i class="fas fa-plus"></i></button>                                        
                                                        </div>
                                                    <?php } ?>                                                          
                                        </div>
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
                                                <form action="app-ecommerce-invoice-proses.php" method="POST">
                                                <?php
                                                $totalPrice =0;
                                                ?>
                                                <?php
                                                        if (!empty($_SESSION['shop'])) {
                                                            foreach ($_SESSION['shop'] as $id => $product) {

                                                            echo "<tr>";
                                                            echo "<td>
                                                                <img src='assets/images/products/".$product['gambar']."' alt='' height='52'>
                                                                    <p class='d-inline-block align-middle mb-0 product-name'>".$product['name']."</p> 
                                                                </td>";
                                                            echo"<td>
                                                                   ".$product['jumlah']."
                                                                </td>";
                                                            echo"<td>
                                                                    ".($product['price']* $product['jumlah'])."
                                                                </td>";                                                                   
                                                            echo "<tr>";
                                                            }
                                                        }
                                                        // perhitungan total keseluruhan pembelian
                                                        if (!empty($_SESSION['shop'])) {
                                                            foreach ($_SESSION['shop'] as $product) {
                                                                $totalPrice += $product['price'] * $product['jumlah'];     
                                                        }
                                                            echo "<td>";
                                                            echo        "<h6>Total :</h6>";
                                                            echo "</td>";
                                                            echo "<td></td>";
                                                            echo "<td class='font-weight-bold'>".$totalPrice."</td>";
                                                            echo "</tr>";
                                                    }        
                                                ?>  
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- pembayaran -->
                                        <div class="total-payment">
                                            <table class="table mb-0">
                                                <tbody>
                                                    <?php
                                                    echo"<tr>";
                                                    echo"<td class='payment-title'>Subtotal</td>";
                                                    echo"<td>".$totalPrice."</td>";
                                                    echo"</tr>";
                                                    ?>
                                                    <tr>
                                                        <td class="payment-title">Customer Point</td>
                                                        <td>
                                                          
                                                            <?php
                                                            if(isset($_GET['id'])){
                                                            $custpoint = $_SESSION["custPoint"] *100;
                                                            echo $custpoint;
                                                             }else
                                                             echo 0;
                                                             ?>
                                                           
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Get Point</td>
                                                        <td class="font-weight-bold">
                                                             <?php
                                                                if($totalPrice>= 1000000){
                                                                    $getpoint = 100;
                                                                    echo $getpoint;
                                                                }else if($totalPrice>= 900000){
                                                                   $getpoint = 90;
                                                                    echo $getpoint;
                                                                }else if($totalPrice>=800000){
                                                                    $getpoint = 80;
                                                                    echo $getpoint;
                                                                }else if($totalPrice>=700000){
                                                                    $getpoint = 70;
                                                                    echo $getpoint;
                                                                }else if($totalPrice>=600000){
                                                                    $getpoint = 60;
                                                                    echo $getpoint;
                                                                }else if($totalPrice>=500000){
                                                                    $getpoint = 50;
                                                                    echo $getpoint;
                                                                }else if($totalPrice>=400000){
                                                                    $getpoint = 40;
                                                                    echo $getpoint;
                                                                }else if($totalPrice>=300000){
                                                                    $getpoint = 30;
                                                                    echo $getpoint;
                                                                }else if($totalPrice>=200000){
                                                                    $getpoint = 20;
                                                                    echo $getpoint;
                                                                }else if($totalPrice>=100000){
                                                                    $getpoint = 10;
                                                                    echo $getpoint;
                                                                }else{
                                                                   $getpoint = 0;
                                                                    echo $getpoint;
                                                                }

                                                                ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Total</td>
                                                        <td class="font-weight-bold">
                                                             <?php
                                                             if(isset($_GET['id'])){
                                                             $totalbuy= $totalPrice - $_SESSION["custPoint"]; 
                                                             echo $totalbuy;
                                                             }else{
                                                             $totalbuy =$totalPrice;
                                                             echo $totalbuy;
                                                             }
                                                             ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                             <!-- metode pembayaran -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-2">Billing Details</h4>
                                        <div class="billing-nav">
                                            <ul class="nav nav-pills justify-content-center text-center mb-3" id="pills-tab" role="tablist">   
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-paypal-tab" data-toggle="pill" href="#pills-paypal" aria-selected="false"><i class="mdi mdi-cash d-block mx-auto text-success font-20"></i>Cash</a>
                                                </li>     
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-credit-card-tab" data-toggle="pill" href="#pills-credit-card"  aria-selected="true"><i class="mdi mdi-credit-card d-block mx-auto text-danger font-20"></i>Credit-Card</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade " id="pills-credit-card">
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
                                                                </div>
                                                                <button class="btn btn-success px-3" name="creditbut">Pay Now</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade show active" id="pills-paypal">
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="container">      
                                                                        <?php
                                                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                                            $subtotal = $_POST["subtotal"];
                                                                            $cash = $_POST["cash"];
                                                                            $change = $cash - $subtotal;
                                                                            }
                                                                            ?>                                                                                                                                          
                                                                        <form  method="post">                                 
                                                                            <div class="form-group col-lg-7">
                                                                                <label for="subtotal">Total:</label>
                                                                                <input type="number" class="form-control" id="total" name="subtotal" value="<?php echo $totalbuy;?>" readonly>
                                                                                
                                                                            </div>
                                                                            
                                                                            <div class="form-group col-lg-7">
                                                                                <label for="cash">Jumlah Uang Cash:</label>
                                                                             
                                                                                <input type="number" class="form-control" id="cash" name="cash" value="<?php echo$cash;?>"  required>
                                                                                                   
                                                                                <button type="submit" class="btn btn-primary " name="cashbut">Hitung kembalian</button>                                                          
                                                                            </div> 
                                                                                                                                                       
                                                                            <div class="form-group col-lg-7">
                                                                                <label for="change">Kembalian:</label>
                                                                                <input type="number" class="form-control" id="change" value="<?php echo $change?>" readonly>
                                                                            </div>
                                                                        </form>
                                                                             <a href="app-ecommerce-invoice.php"><button type="submit" class="btn btn-primary offset-lg-10" >Continue</button></a>
                                                                       
                                                                    </form>
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