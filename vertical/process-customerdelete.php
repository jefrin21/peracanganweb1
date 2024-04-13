<?php
include 'koneksi.php';

$id = $_GET['id'];
 
$query = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE PelangganID = '$id' ");


header('location:page-customerlist.php');


?>