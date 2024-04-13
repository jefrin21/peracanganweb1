<?php
$user 		= "root";
$server 	= "localhost";
$password 	= "";
<<<<<<< HEAD
$db			= "makanterus";
=======
$db			= "MakanTerus";
>>>>>>> e30aa720d95aaed99f9911d74d86a076a9ddb96b
$koneksi 	= mysqli_connect($server, $user, $password, $db);

if($koneksi == false)
{
	echo "Tidak Terkoneksi";
}
?>