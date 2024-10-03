<?php
session_start();
include_once "sesi.php";
$modul=(isset($_GET['m']))?$_GET['m']:"awal";
$jawal="E-Voting BEM UNPERBA";
switch($modul){
	case 'awal': default: $aktif="Beranda"; $judul="Administrator || $jawal"; include "awal.php"; break;
	case 'admin': $aktif="Admin"; $judul="Modul Admin $jawal"; include "modul/admin/index.php"; break;
	case 'prodi': $aktif="Prodi"; $judul="Modul Prodi $jawal"; include "modul/prodi/index.php"; break;
	case 'mahasiswa': $aktif="Mahasiswa"; $judul="Modul Mahasiswa $jawal"; include "modul/mahasiswa/index.php"; break;
	case 'paslon': $aktif="Paslon"; $judul="Modul Paslon $jawal"; include "modul/paslon/index.php"; break;
	case 'pemilu': $aktif="Pemilu"; $judul="Modul Pemilu $jawal"; include "modul/pemilu/index.php"; break;
}

?>
