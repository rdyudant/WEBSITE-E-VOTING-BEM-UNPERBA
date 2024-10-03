<?php include "atas.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mahasiswa
        <small>E-Voting BEM UNPERBA</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?m=awal"><i class="ri-dashboard-line"></i> Beranda</a></li>
        <li><a href="?m=paslon"><i class="ri-group-line"></i> Pasangan Calon</a></li>
        <li class="active">Informasi</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi Pasangan Calon</h3>
            </div>
            <!-- /.box-header -->
            <div class="paslon__container">
                <div class="paslon__group">
                <?php
                include_once "../sambungan.php";
                $sqljs="SELECT sum(jml_suara) as jsuara FROM tb_paslon";
                $queryjs=mysqli_query($koneksi,$sqljs);
                $rjs=mysqli_fetch_array($queryjs);

                $sql="SELECT * FROM tb_paslon ORDER BY nomor";
                $query=mysqli_query($koneksi,$sql);
                while($r=mysqli_fetch_array($query)){
                echo '<div class="paslon__profile">';
                echo '<center>';
                echo "<h3>Nomor ".$r['nomor']."</h3>";
                echo "<h4>".$r['nama']."</h4>";
                echo '<br><img src="../gambar/paslon/'.$r['foto'].'" class="img-circle" id="img-about'.$r['nomor'].'">';
                echo '</center>';
                echo '<br><b>VISI:</b>';
                echo '<h5>'.$r['visi'].'</h5>';
                echo '<b>MISI:</b>';
                echo "<h5>".$r['misi']."</h5>";
                echo '</div>';
                }
                ?>
                </div>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<?php include "bawah.php"; ?>
