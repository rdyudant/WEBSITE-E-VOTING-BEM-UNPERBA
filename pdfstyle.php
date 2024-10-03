<?php
include_once "sambungan.php";
$sql = "SELECT * FROM tb_datapemilu ORDER BY id_pemilu";
$query = mysqli_query($koneksi,$sql);
$sql1 = "SELECT COUNT(*) AS pemilihaktif FROM tb_mhswa";
$query1 = mysqli_query($koneksi,$sql1);
$sql2 = "SELECT COUNT(*) AS suaramasuk FROM tb_datapemilu";
$query2 = mysqli_query($koneksi,$sql2);
$sql3 = "SELECT (SELECT COUNT(*) FROM tb_mhswa) - (SELECT COUNT(*) FROM tb_datapemilu) AS belumpilih";
$query3 = mysqli_query($koneksi,$sql3);
?>

<style>
    th {
        background-color: #dedede;
        color: #333333;
        font-weight: bold;
        text-align: center;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    h2, td {
        text-align: center;
    }
</style>

<h2>Laporan Data Pemilu</h2>
<table border="1">
    <thead>
        <tr>
            <th style="width: 10%;">No</th>
            <th style="width: 25%;">Nomor Induk Mahasiswa</th>
            <th style="width: 25%;">Program Studi</th>
            <th style="width: 20%;">Status</th>
            <th style="width: 20%;">Waktu Memilih</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        while($r = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td style="width: 10%;"><?php echo $i++ ?></td>
                <td style="width: 25%;"><?php echo $r['nmr_pemilih'] ?></td>
                <td style="width: 25%;"><?php echo $r['prodi'] ?></td>
                <td style="width: 20%;"><?php echo '<p>Sudah Memilih</p>' ?></td>
                <td style="width: 20%;"><?php echo $r['waktu'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<br>
<table border="2">
    <thead>
        <tr>
            <th style="width: 33%; background-color: yellow;">Jumlah Mahasiswa Aktif</th>
            <th style="width: 34%; background-color: greenyellow;">Jumlah Suara Masuk</th>
            <th style="width: 33%; background-color: pink;">Jumlah Belum Memilih</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $r1 = mysqli_fetch_assoc($query1);
        $r2 = mysqli_fetch_assoc($query2);
        $r3 = mysqli_fetch_assoc($query3);
        ?>
            <tr>
                <td style="width: 33%;"><?php echo $r1['pemilihaktif'] ?></td>
                <td style="width: 34%;"><?php echo $r2['suaramasuk'] ?></td>
                <td style="width: 33%;"><?php echo $r3['belumpilih'] ?></td>
            </tr>
    </tbody>
</table>
