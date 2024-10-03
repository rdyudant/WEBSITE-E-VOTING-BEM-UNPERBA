<?php
include "sesi.php";
if(isset($_POST['simpan'])){
	include "../sambungan.php";
	include "../fungsi/upload.php";
	$username=$_POST['username'];
	$password=md5(trim($_POST['password']));
	$nama	=$_POST['nama'];
	$email	=$_POST['email'];
	$hak_akses=$_POST['hak_akses'];
	$aktif	=$_POST['aktif'];
	$lokasi =$_FILES['foto']['tmp_name'];
	$namafile=$_FILES['foto']['name'];
	$tipefile=$_FILES['foto']['type'];
	
	if(empty($lokasi)){
		$sql="INSERT INTO tb_admin SET username='$username', password='$password', nama='$nama', email='$email', hak_akses='$hak_akses', aktif='$aktif'";
	}else{
		$folder="../gambar/admin/";
		$ukuran=100;
		UploadFoto($namafile,$folder,$ukuran);
		
		$sql="INSERT INTO tb_admin SET username='$username', password='$password', nama='$nama', email='$email', hak_akses='$hak_akses', aktif='$aktif', foto='$namafile'";
	}
	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location:?m=admin&s=awal');
		//echo "berhasil";
	}else{
		var_dump($sql);
		include "index.php?m=admin";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan!")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
