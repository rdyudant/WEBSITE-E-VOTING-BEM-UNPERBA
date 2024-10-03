<?php
include "sesi.php";
if(isset($_GET['idp'])){
	include "../sambungan.php";
	$id		=$_GET['idp'];
	$sql   	= "SELECT * FROM tb_admin WHERE id_admin='$id'";
	$hapus 	= mysqli_query($koneksi,$sql);
	$r     	= mysqli_fetch_array($hapus);
	if ($r['foto']!=''){
		$foto=$r['foto'];
		// hapus file gambar yang berhubungan dengan berita tersebut
		unlink("../gambar/admin/$foto");
		$sql1   = "DELETE FROM tb_admin WHERE id_admin='$id'";
	}else{
		$sql1   = "DELETE FROM tb_admin WHERE id_admin='$id'";
	}
		
	$hapus1 = mysqli_query($koneksi,$sql1);
	if($hapus1){
//			echo 'Data Kelas Berhasil di Hapus ';
//			echo '<a href="index.php">Kembali</a>';
		header("Location: ?m=admin");
	}else{
		echo 'Data Admin GAGAL dihapus';
		echo '<a href="index.php">Kembali</a>';
	}
}
?>
