<?php 
include_once "atas.php"; 
include_once "../sambungan.php";
//$sql="SELECT tb_paslon.id_paslon,nama,nomor,foto,count(id_pemilu) as tb_paslon,tb_datapemilu.id_paslon FROM tb_paslon FULL OUTER JOIN tb_datapemilu ON tb_paslon.id_paslon=tb_datapemilu.id_paslon";
//$sql="SELECT tb_paslon.id_paslon as idp,nama,nomor,foto, tb_datapemilu.id_pemilu,count(tb_datapemilu.id_paslon) as tb_paslon,tb_datapemilu.id_paslon FROM tb_paslon LEFT OUTER JOIN tb_datapemilu ON tb_paslon.id_paslon=tb_datapemilu.id_paslon ORDER BY nomor";

$sql="SELECT * FROM tb_paslon ORDER BY nomor";
$query=mysqli_query($koneksi,$sql);

$sqljs="SELECT sum(jml_suara) as jsuara FROM tb_paslon";
$queryjs=mysqli_query($koneksi,$sqljs);
$rjs=mysqli_fetch_array($queryjs);

$nomor=$_SESSION['nim'];
$sqlpilih="SELECT * FROM tb_datapemilu WHERE nmr_pemilih='$nomor'";
$querypilih=mysqli_query($koneksi,$sqlpilih);
$ada=mysqli_num_rows($querypilih);

/*$sjumlah="SELECT count(id_pemilu) as tb_paslon,id_paslon FROM tb_datapemilu GROUP BY id_paslon ORDER BY id_paslon";
$qjumlah=mysqli_query($koneksi,$sjumlah);
$j=mysqli_fetch_assoc($qjumlah);
*/
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mahasiswa
        <small>E-Voting BEM UNPERBA</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="."><i class="ri-dashboard-line"></i> Beranda</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
    <?php
    //var_dump($sql);
    while($r=mysqli_fetch_array($query)){		  
    echo '<div class="col-lg-3 col-xs-6">
      <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">';
          echo "<h3>".$r['nomor']."</h3>";
          echo "<h2>".($r['jml_suara']/$rjs['jsuara']*100)."%</h2>";
          echo $r['jml_suara']." suara<br><b>";
          echo $r['nama']."</b>";
          echo '</div>
          <div class="icon">
            <img src="../gambar/paslon/'.$r['foto'].'" height="100px"/>
          </div>';
          if($ada==0){
            echo '<a href="?m=mahasiswa&s=pilihan&id='.$r['id_paslon'].'" class="small-box-footer">Tentukan Pilihan Anda! <i class="fa fa-arrow-circle-up"></i></a>';
          }else{
            echo '<a href="#" class="small-box-footer">Terima Kasih Sudah Memilih! <i class="fa fa-check"></i></a>';
          }
        echo '</div>
      </div>';
    }
    ?>        
      </div>
      <!-- /.row -->

<?php include "bawah.php"; ?>
