<?php
include_once "sesi.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/paslon/tampil.php"; break;
	case 'tambah': include "modul/paslon/tambah.php"; break;
	case 'simpan': include "modul/paslon/simpan.php"; break;
	case 'edit': include "modul/paslon/edit.php"; break;
	case 'update': include "modul/paslon/update.php"; break;
	case 'hapus': include "modul/paslon/hapus.php"; break;
	case 'detail': include "modul/paslon/detail.php"; break;
}
?>
