<?php
if(isset($_POST['simpan'])){
	include_once "../sambungan.php";
	$id		=$_POST['nim'];
	$password=md5($_POST['password']);
	$nama	=$_POST['nama'];
	$gender	=$_POST['gender'];
	$email	=$_POST['email'];
	$prodi=$_POST['prodi'];
	$aktif=$_POST['aktif'];
	$lokasi =$_FILES['foto']['tmp_name'];
	$namafile=$_FILES['foto']['name'];
	$tipefile=$_FILES['foto']['type'];
	
	if(empty($_POST['password'])){
		if(empty($lokasi)){
			$sql="UPDATE tb_mhswa SET nama='$nama', gender='$gender', email='$email', prodi='$prodi', aktif='$aktif' WHERE nim='$id'";
		}else{
			include "../fungsi/upload.php";
			$folder="../gambar/mahasiswa/";
			$ukuran=150;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE tb_mhswa SET nama='$nama', gender='$gender', email='$email', prodi='$prodi', aktif='$aktif', foto='$namafile' WHERE nim='$id'";
		}
	}else{
		if(empty($lokasi)){
			$sql="UPDATE tb_mhswa SET nama='$nama', gender='$gender', email='$email', prodi='$prodi', password='$password', aktif='$aktif' WHERE nim='$id'";
		}else{
			include "../fungsi/upload.php";
			$folder="../gambar/admin/";
			$ukuran=150;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE tb_mhswa SET nama='$nama', gender='$gender', email='$email', prodi='$prodi', password='$password', aktif='$aktif', foto='$namafile' WHERE nim='$id'";
		}
	}
	$simpan=mysqli_query($koneksi,$sql);
	//var_dump($sql);
	if($simpan){
		header('Location:index.php?m=mahasiswa');
	}else{
		echo '<script type = "text/javascript">';
		echo 'window.location.href = "index.php?m=mahasiswa&s=update";';
			echo 'alert("Data Gagal Diupdate! '.$error_message.'")';
		echo '</script>';
		//var_dump($sql);
	}
}else{
	echo '<script>window.history.back()</script>';
	//echo "apa nih";
}
?>
