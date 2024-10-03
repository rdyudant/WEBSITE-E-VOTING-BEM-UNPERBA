<?php
if(isset($_GET['nim'])){
	include "../sambungan.php";
	$id		=$_GET['nim'];
	$sql   	= "SELECT * FROM tb_mhswa WHERE nim='$id'";
	$hapus 	= mysqli_query($koneksi,$sql);
	$r     	= mysqli_fetch_array($hapus);
	if ($r['foto']!=''){
		$foto=$r['foto'];
		// hapus file gambar yang berhubungan dengan berita tersebut
		unlink("../gambar/mahasiswa/$foto");
		$sql   = "DELETE FROM tb_mhswa WHERE nim='$id'";
	}else{
		$sql   = "DELETE FROM tb_mhswa WHERE nim='$id'";
	}

	$hapus = mysqli_query($koneksi,$sql);
	if($hapus){
		header("Location: ?m=mahasiswa");
		echo 'Data Mahasiswa Berhasil Dihapus!';
	}else{
		include "?m=mahasiswa";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal dihapus.")';
		echo '</script>';
	}
}
?>
