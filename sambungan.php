<?php
//Koneksi ke DB
$host="localhost";
$username="root";
$password="";
$database="evotingbem";

//Membuat Koneksi
$koneksi=mysqli_connect($host, $username, $password, $database);

//Mengecek Koneksi
if ($koneksi->connect_error) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}
?>