<?php include "atas.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrator
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
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
            include_once "../sambungan.php";
            $sql="SELECT count(id_prodi) as jumlah FROM tb_prodi";
            $query=mysqli_query($koneksi,$sql);
            $r=mysqli_fetch_assoc($query);
            echo "<h3>".$r['jumlah']."</h3>";
            ?>
              <p>Program Studi</p>
            </div>
            <div class="icon">
              <i class="ion ri-graduation-cap-line"></i>
            </div>
            <a href="?m=prodi" class="small-box-footer">Info Prodi <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
            <?php
            $sql="SELECT count(nim) as jumlah FROM tb_mhswa WHERE aktif='Y'";
            $query=mysqli_query($koneksi,$sql);
            $r=mysqli_fetch_assoc($query);
            echo "<h3>".$r['jumlah']."</h3>";
            ?>
              <p>Mahasiswa Aktif</p>
            </div>
            <div class="icon">
              <i class="ion ri-user-line"></i>
            </div>
            <a href="?m=mahasiswa" class="small-box-footer">Info Mahasiswa <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <?php
            $sql="SELECT count(id_paslon) as jumlah FROM tb_paslon";
            $query=mysqli_query($koneksi,$sql);
            $r=mysqli_fetch_assoc($query);
            echo "<h3>".$r['jumlah']."</h3>";
            ?>
              <p>Paslon Aktif</p>
            </div>
            <div class="icon">
              <i class="ion ri-group-line"></i>
            </div>
            <a href="?m=paslon" class="small-box-footer">Info Pasangan Calon<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <?php
            $sql="SELECT count(id_admin) as jumlah FROM tb_admin WHERE aktif='Y'";
            $query=mysqli_query($koneksi,$sql);
            $r=mysqli_fetch_assoc($query);
            echo "<h3>".$r['jumlah']."</h3>";
            ?> 
              <p>Admin Aktif</p>
            </div>
            <div class="icon">
              <i class="ion ri-admin-line"></i>
            </div>
            <a href="?m=admin" class="small-box-footer">Info Administrator <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
            <?php
            $sql="SELECT count(id_pemilu) as jumlah FROM tb_datapemilu";
            $query=mysqli_query($koneksi,$sql);
            $r=mysqli_fetch_assoc($query);
            echo "<h3>".$r['jumlah']."</h3>";
            ?> 
              <p>Suara Masuk</p>
            </div>
            <div class="icon">
              <i class="ion ri-mac-line"></i>
            </div>
            <a href="?m=pemilu" class="small-box-footer">Info Data Pemilu <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

      </div>
      <!-- /.row -->

<?php include "bawah.php"; ?>
