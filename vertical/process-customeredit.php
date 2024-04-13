<?php 
include 'koneksi.php';

if(isset($_POST['ubah']))
{
//tangkap data dari form edit buku

$ambilid 		= $_POST['Pelangganid'];
$ambilnama 		= $_POST['Nama'];
$ambilemail 	= $_POST['Email'];
$ambiltelepon   = $_POST['Telepon'];
$ambilalamat	= $_POST['Alamat'];
$ambiltgllahir	= $_POST['TanggalLahir'];
$ambilgender	= $_POST['Gender'];
$ambilpoints 	= $_POST['Points'];

//mengupdate data pada tabel buku
$query = mysqli_query($koneksi, "UPDATE pelanggan SET PelangganID = '$ambilid', Nama = '$ambilnama', Email = '$ambilemail', Telepon = '$ambiltelepon', Alamat = '$ambilalamat', TanggalLahir = '$ambiltgllahir', Gender = '$ambilgender', Points = '$ambilpoints' WHERE PelangganID = '$ambilid'");

header("location:page-customerlist.php");							
}
?>								 