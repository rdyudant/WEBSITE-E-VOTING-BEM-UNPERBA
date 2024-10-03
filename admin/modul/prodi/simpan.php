<?php
if(isset($_POST['simpan'])){
	include "../sambungan.php";
	$prodi	= $_POST['prodi'];
	$sql	="INSERT INTO tb_prodi SET prodi='$prodi'";
	$simpan	= mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location: ?m=prodi');
	}else{
		include "index.php?m=prodi&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal ditambahkan, Prodi sudah tersedia!")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
