<?php
include 'koneksi.php';
session_start();

if (isset($_POST['login']))
{
    $ambiluserID = $_POST ['userID'];
    $ambilpasword = $_POST ['pasword'];

    $query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE KaryawanID='$ambiluserID' AND Pasword='$ambilpasword'");
    $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
    $count = mysqli_num_rows($query);
    if ($count == 1){
        $_SESSION ['userID'] = $ambiluserID;
        header("Location: index.php");
    }

    else {
        $error = "ID atau Password salah, silakan coba lagi.";
        echo "<script>
                alert('$error');
                window.location.href = 'auth-login.php';
              </script>";
    }
}

?>