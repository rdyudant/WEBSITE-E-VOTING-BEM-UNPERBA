<?php
if(isset($_POST['simpan'])){
	include "../sambungan.php";
	$id		=$_POST['id_paslon'];
	$nama	=$_POST['nama'];
	$nomor	=$_POST['nomor'];
	$visi	=$_POST['visi'];
	$misi	=$_POST['misi'];
	$lokasi =$_FILES['foto']['tmp_name'];
	$namafile=$_FILES['foto']['name'];
	$tipefile=$_FILES['foto']['type'];
	
	if(empty($_POST['password'])){
		if(empty($lokasi)){
			$sql="UPDATE tb_paslon SET nama='$nama', nomor='$nomor', visi='$visi', misi='$misi' WHERE id_paslon='$id'";
		}else{
			include "../fungsi/upload.php";
			$folder="../gambar/paslon/";
			$ukuran=150;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE tb_paslon SET nama='$nama', nomor='$nomor', visi='$visi', misi='$misi', foto='$namafile' WHERE id_paslon='$id'";
		}
	}else{
		if(empty($lokasi)){
			$sql="UPDATE tb_paslon SET nm_paslon='$nama', nmr_paslon='$nomor', visi='$visi', misi='$misi' WHERE id_paslon='$id'";
		}else{
			include "../fungsi/upload.php";
			$folder="../gambar/paslon/";
			$ukuran=150;
			UploadFoto($namafile,$folder,$ukuran);
			$sql="UPDATE tb_paslon SET nama='$nama', nomor='$nomor', visi='$visi', misi='$misi', foto='$namafile' WHERE id_paslon='$id'";
		}
	}
	$simpan=mysqli_query($koneksi,$sql);
	//var_dump($sql);
	if($simpan){
		header('Location:index.php?m=paslon&s=awal');
		//echo "berhasil";
	}else{
		echo "gagal alias tidak berhasil";
		include "index.php?m=paslon&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Diupdate!")';
		echo '</script>';
		//var_dump($sql);
	}
}else{
	echo '<script>window.history.back()</script>';
	//echo "apa nih";
}
?>
