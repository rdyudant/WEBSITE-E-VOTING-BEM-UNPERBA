<?php
include_once "../sambungan.php";

$nim = $_POST['nim'];
$pass = md5($_POST['password']);
$sql = "SELECT * FROM tb_mhswa WHERE nim='$nim' AND password='$pass' AND aktif='Y'";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$b=mysqli_fetch_array($login);
if($ketemu>0){
	session_start();
	$_SESSION['nim'] 		= $b['nim'];
	$_SESSION['nama']		= $b['nama'];
	$_SESSION['email'] 		= $b['email'];
	if ($b['foto'] == "") {
		// Memeriksa jenis kelamin
		$gender = $b['gender'];
	
		// Mengatur nilai sesi berdasarkan jenis kelamin
		if ($gender == 'L') {
			$_SESSION['foto'] = "L.jpg";
		} elseif ($gender == 'P') {
			$_SESSION['foto'] = "P.jpg";
		} else {
			// Jika jenis kelamin tidak diketahui, gunakan foto default umum
			$_SESSION['foto'] = "L.jpg";
		}
	} else {
		$_SESSION['foto'] = $b['foto'];
	}
	//$idprodi=$b['id_prodi'];
	//$sql2 = "SELECT * FROM tb_prodi WHERE id_prodi='$idprodi'";
	//$aksi=mysqli_query($koneksi,$sql2);
	//$c=mysqli_fetch_array($aksi);
	$_SESSION['prodi'] 	= $b['prodi'];

	header ('Location:index.php?m=awal');
}else{
	include "login-mhs.php";
	echo '<script language = "JavaScript">';
		echo 'alert ("Username / Password ada yang salah, atau akun anda belum Aktif")';
	echo '</script>';
}
?>
