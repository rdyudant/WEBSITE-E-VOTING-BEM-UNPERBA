<?php
include_once "sesi.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/pemilu/tampil.php"; break;
	case 'reset': include "modul/pemilu/reset.php"; break;
	case 'export': include "modul/pemilu/export.php"; break;
}
?>
