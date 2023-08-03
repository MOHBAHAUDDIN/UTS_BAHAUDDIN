<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'penggajian';

$koneksi = mysqli_connect('localhost', 'root', '', 'penggajian');
if($koneksi){
   // echo "Koneksi Berhasil";
}

mysqli_select_db($koneksi, $db);
?>

