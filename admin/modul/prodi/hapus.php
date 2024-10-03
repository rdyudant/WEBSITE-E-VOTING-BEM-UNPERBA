<?php
if(isset($_GET['id'])){
	include "../sambungan.php";
	$id		= $_GET['id'];
	$sql   	= "DELETE FROM tb_prodi WHERE id_prodi='$id'";
	$hapus 	= mysqli_query($koneksi,$sql);
	if($hapus){
		header("Location: ?m=prodi");
	}else{
		include "index.php?m=prodi&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Dihapus!")';
		echo '</script>';
	}
}
?>
