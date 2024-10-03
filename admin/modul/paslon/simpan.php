<?php
if(isset($_POST['simpan'])){
	include "../sambungan.php";
	include "../fungsi/upload.php";
	$nama	=$_POST['nama'];
	$nomor	=$_POST['nomor'];
	$visi	=$_POST['visi'];
	$misi	=$_POST['misi'];
	$lokasi =$_FILES['foto']['tmp_name'];
	$namafile=$_FILES['foto']['name'];
	$tipefile=$_FILES['foto']['type'];

	if(empty($lokasi)){
		$sql="INSERT INTO tb_paslon SET nama='$nama', nomor='$nomor', visi='$visi', misi='$misi'";
	}else{
		$folder="../gambar/paslon/";
		$ukuran=150;
		UploadFoto($namafile,$folder,$ukuran);
		
		$sql="INSERT INTO tb_paslon SET nama='$nama', nomor='$nomor', visi='$visi', misi='$misi', foto='$namafile'";
	}
	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location:index.php?m=paslon&s=awal');
		//echo "berhasil";
	}else{
		include "index.php?m=paslon&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan.")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
