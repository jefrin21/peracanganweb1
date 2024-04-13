<?php
include 'koneksi.php';

if(isset($_POST['tambah']))
{
//tangkap data dari form
$ambilid 	    = $_POST['Pelangganid'];
$ambilnama  	= $_POST['Nama'];
$ambilemail 	= $_POST['Email'];
$ambiltelepon	= $_POST['Telepon'];
$ambilalamat 	= $_POST['Alamat'];
$ambiltgllahir	= $_POST['TanggalLahir'];
$ambilgender	= $_POST['Gender'];
$ambilpoints     = $_POST['Points'];

//simpan data ke database
$query = mysqli_query($koneksi,"INSERT INTO pelanggan (PelangganID, Nama, Email, Telepon, Alamat, TanggalLahir, Gender, Points)			
							    VALUES('$ambilid', '$ambilnama','$ambilemail', '$ambiltelepon','$ambilalamat', '$ambiltgllahir','$ambilgender', '$ambilpoints')");

header("location: page-customerlist.php");

}
?>