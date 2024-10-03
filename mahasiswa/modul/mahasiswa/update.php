<?php
if(isset($_POST['simpan'])){
	include_once "../sambungan.php";
	$id		=$_POST['nim'];
	$sandi	=md5($_POST['password']);
	$nama	=$_POST['nama'];
	$jk		=$_POST['gender'];
	$surel	=$_POST['email'];
	$prodi=$_POST['prodi'];
	$aktif	=$_POST['aktif'];
	$lokasi =$_FILES['foto']['tmp_name'];
	$namafile=$_FILES['foto']['name'];
	$tipefile=$_FILES['foto']['type'];
	
	if(empty($_POST['password'])){
		if(empty($lokasi)){
			$sql="UPDATE tb_mhswa SET nama='$nama', gender='$jk', email='$surel', prodi='$prodi', aktif='$aktif' WHERE nim='$id'";
		}else{
			include "../fungsi/upload.php";
			$folder="../gambar/mahasiswa/";
			$ukuran=150;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE tb_mhswa SET nama='$nama', gender='$jk', email='$surel', prodi='$prodi', aktif='$aktif', foto='$namafile' WHERE nim='$id'";
		}
	}else{
		if(empty($lokasi)){
			$sql="UPDATE tb_mhswa SET nama='$nama', gender='$jk', email='$surel', prodi='$prodi', password='$sandi', aktif='$aktif' WHERE nim='$id'";
		}else{
			include "../fungsi/upload.php";
			$folder="../gambar/admin/";
			$ukuran=150;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE tb_mhswa SET nama='$nama', gender='$jk', email='$surel', prodi='$prodi', password='$sandi', aktif='$aktif', foto='$namafile' WHERE nim='$id'";
		}
	}

	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header ('Location:index.php?m=mahasiswa');
	}else{
		include "index.php?m=mahasiswa&s=awal";
		echo '<script language = "JavaScript">';
			echo 'alert ("Data Gagal Diupdate!")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
