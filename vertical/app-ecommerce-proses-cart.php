<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $id = $_POST['produkk'];
        $result = mysqli_query($koneksi, "SELECT * FROM produk WHERE ProdukID=$id");

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if (isset($_SESSION['shop'][$id])) {
                $_SESSION['shop'][$id]['jumlah'] += 1;
            } else {
                $_SESSION['shop'][$id] = array(
                    'jumlah' => 1,
                    'name' => $row['NamaProduk'],
                    'price' => $row['HargaSatuan']
                );
            }
            header("location: app-ecommerce-product.php");
        }
    }
}


        
 

?>
