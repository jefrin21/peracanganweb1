<?php
$user 		= "root";
$server 	= "localhost";
$password 	= "";
$db			= "";
$koneksi 	= mysqli_connect($server, $user, $password, $db);

if($koneksi == false)
{
	echo "Tidak Terkoneksi";
}
?>