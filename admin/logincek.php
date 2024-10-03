<?php
include_once "../sambungan.php";

$user = $_POST['username'];
$pass = md5($_POST['password']);
$sql = "SELECT * FROM tb_admin WHERE username='$user' AND password='$pass' AND aktif='Y'";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$b=mysqli_fetch_array($login);
if($ketemu>0){
	session_start();
    //if(isset($_COOKIE['cookielogin'])){
    $_SESSION['id_admin'] 		= $b['id_admin'];
	$_SESSION['username'] 		= $b['username'];
	$_SESSION['nama'] 		    = $b['nama'];
	$_SESSION['hak_akses'] 	    = $b['hak_akses'];
	if($b['foto']==""){
		$_SESSION['foto'] 	= "1.jpg";
	}else{
		$_SESSION['foto'] 	= $b['foto'];
	}

    header('location: index.php?m=awal');
}else{
	include "login-adm.php";
	echo '<script language="javascript">';
		echo 'alert ("Ada yang salah cuy :)")';
	echo '</script>';
}
?>
