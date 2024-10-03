<?php
include_once "sesi.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/admin/tampil.php"; break;
	case 'tambah': include "modul/admin/tambah.php"; break;
	case 'simpan': include "modul/admin/simpan.php"; break;
	case 'edit': include "modul/admin/edit.php"; break;
	case 'update': include "modul/admin/update.php"; break;
	case 'hapus': include "modul/admin/hapus.php"; break;
	case 'detail': include "modul/admin/detail.php"; break;
	case 'profil': include "modul/admin/profil.php"; break;
}
?>
