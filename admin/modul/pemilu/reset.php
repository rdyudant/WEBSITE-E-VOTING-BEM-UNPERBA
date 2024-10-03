<?php
include "../sambungan.php";
// Mulai transaksi
    $koneksi->begin_transaction();

    try {
        // Query untuk menghapus semua data dari tabel tb_datapemilu
        $sql1 = "TRUNCATE TABLE tb_datapemilu";
        if ($koneksi->query($sql1) !== TRUE) {
            throw new Exception("Error saat menghapus data dari tb_datapemilu: " . $koneksi->error);
        }

        // Query untuk mereset nilai jml_suara pada tabel tb_paslon
        $sql2 = "UPDATE tb_paslon SET jml_suara = 0";
        if ($koneksi->query($sql2) !== TRUE) {
            throw new Exception("Error saat mereset nilai jml_suara: " . $koneksi->error);
        }

        // Commit transaksi jika semua query berhasil
        $koneksi->commit();
        // Redirect dengan status success
        header('Location: ?m=pemilu');
    } catch (Exception $e) {
        // Rollback transaksi jika ada error
        $koneksi->rollback();
        // Redirect dengan status error
        header('Location: ?m=pemilu');
    }
?>