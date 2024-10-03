<?php
//if(isset($_POST['simpan'])){
include "sesi.php";
	include "../sambungan.php";
	$pemilih=$_SESSION['nim'];
	$prodi	=$_SESSION['prodi'];
	$paslon	=$_GET['id'];
	$sql="INSERT INTO tb_datapemilu SET prodi='$prodi', nmr_pemilih='$pemilih', id_paslon='$paslon'";
	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location:index.php');
		$edit="UPDATE tb_paslon SET jml_suara=jml_suara+1 WHERE id_paslon='$paslon'";
		$update=mysqli_query($koneksi,$edit);
		//echo "berhasil";
	}else{
		include "index.php";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan!")';
		echo '</script>';
	}
/*}else{
	echo '<script>window.history.back()</script>';
}*/
?>
