<?php
if(isset($_POST['simpan'])){
	include "../sambungan.php";
	$id			=$_POST['id_admin'];
	$username	=$_POST['username'];
	$password	=md5($_POST['password']);
	$nama		=$_POST['nama'];
	$email		=$_POST['email'];
	$hak_akses	=$_POST['hak_akses'];
	$aktif		=$_POST['aktif'];
	$lokasi 	=$_FILES['foto']['tmp_name'];
	$namafile	=$_FILES['foto']['name'];
	$tipefile	=$_FILES['foto']['type'];
	
	if(empty($_POST['password'])){
		if(empty($lokasi)){
			$sql="UPDATE tb_admin SET username='$username', nama='$nama', email='$email', hak_akses='$hak_akses', aktif='$aktif' WHERE id_admin='$id'";
		}else{
			include "../fungsi/upload.php";
			$folder="../gambar/admin/";
			$ukuran=150;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE tb_admin SET username='$username', nama='$nama', email='$email', hak_akses='$hak_akses', aktif='$aktif', foto='$namafile' WHERE id_admin='$id'";
		}
	}else{
		if(empty($lokasi)){
			$sql="UPDATE tb_admin SET username='$username', password='$password', nama='$nama', email='$email', hak_akses='$hak_akses', aktif='$aktif' WHERE id_admin='$id'";
		}else{
			include "../fungsi/upload.php";
			$folder="../gambar/admin/";
			$ukuran=150;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE tb_admin SET username='$username', password='$password', nama='$nama', email='$email', hak_akses='$hak_akses', aktif='$aktif', foto='$namafile' WHERE id_admin='$id'";
		}
	}
	$simpan=mysqli_query($koneksi,$sql);
	//var_dump($sql);	
	
	if($simpan){
		if($id==$_SESSION['id_admin']){
			$_SESSION['username'] 		= $username;
			$_SESSION['nama'] 			= $nama;
			$_SESSION['hak_akses']	 	= $hak_akses;
			if(!empty($lokasi)){
				$_SESSION['foto'] 	= $namafile;
			}
		}
		header('Location:index.php?m=awal');
	}else{
		include "index.php?m=admin&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Diperbarui!")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
