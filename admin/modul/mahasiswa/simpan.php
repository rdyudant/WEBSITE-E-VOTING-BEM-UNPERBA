<?php
if(isset($_POST['simpan'])){
	include "../sambungan.php";
	include "../fungsi/upload.php";
	$nim	=$_POST['nim'];
	$password=md5($_POST['password']);
	$nama	=$_POST['nama'];
	$email	=$_POST['email'];
	$gender	=$_POST['gender'];
	$prodi	=$_POST['prodi'];
	$aktif	=$_POST['aktif'];
	$lokasi =$_FILES['foto']['tmp_name'];
	$namafile=$_FILES['foto']['name'];
	$tipefile=$_FILES['foto']['type'];

	if(empty($_POST['password'])){
		$password=md5($nim);
	}
	if(empty($lokasi)){
		$sql="INSERT INTO tb_mhswa SET nim='$nim', password='$password', nama='$nama', gender='$gender', email='$email', aktif='$aktif', prodi='$prodi'";
	}else{
		$folder="../gambar/mahasiswa/";
		$ukuran=150;
		UploadFoto($namafile,$folder,$ukuran);
		
		$sql="INSERT INTO tb_mhswa SET nim='$nim', password='$password', nama='$nama', gender='$gender', email='$email', aktif='$aktif', prodi='$prodi', foto='$namafile'";
	}

	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location:index.php?m=mahasiswa&s=awal');
	}else{
		echo '<script language = "JavaScript">';
		echo 'window.location.href = "index.php?m=mahasiswa&s=tambah";';
			echo 'alert ("Nomor Induk sudah terdaftar!")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
