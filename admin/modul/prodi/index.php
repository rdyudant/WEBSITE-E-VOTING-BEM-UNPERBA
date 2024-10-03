<?php
include_once "sesi.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/prodi/tampil.php"; break;
	case 'tambah': include "modul/prodi/tambah.php"; break;
	case 'simpan': include "modul/prodi/simpan.php"; break;
	case 'hapus': include "modul/prodi/hapus.php"; break;
	case 'reset': include "modul/prodi/reset.php"; break;
}
?>
