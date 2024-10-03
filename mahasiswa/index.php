<?php
session_start();
include_once "sesi.php";
$modul=(isset($_GET['m']))?$_GET['m']:"awal";
$jawal="E-Voting BEM UNPERBA";
switch($modul){
	case 'awal': default: $aktif="Beranda"; $judul="$jawal"; include "awal.php"; break;
	case 'mahasiswa': $aktif="Mahasiswa"; $judul="$jawal"; include "modul/mahasiswa/index.php"; break;
	case 'paslon': $aktif="Paslon"; $judul="$jawal"; include "modul/paslon/index.php"; break;
}

?>
