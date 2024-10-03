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
        <li><a href="?m=awal"><i class="ri-dashboard-line"></i> Beranda</a></li>
        <li class="active">Data Pemilu</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pemilihan Umum</h3>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="index.php?m=pemilu&s=reset" name="reset_btn" class="btn btn-danger" onclick="return confirm('PERINGATAN : SELURUH DATA PEMILU AKAN DIHAPUS dan proses tidak dapat dibatalkan, tekan OK untuk melanjutkan.')"><i class="ri-eraser-fill"></i>&nbsp;Hapus Semua</a>
              <a href="index.php?m=pemilu&s=export" name="export_btn" class="btn btn-primary"><i class="ri-download-2-fill"></i>&nbsp;Ekspor Data Pemilu</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">              
              <?php
              include "../sambungan.php";
              $sql="SELECT * FROM tb_datapemilu ORDER BY id_pemilu";
              $query=mysqli_query($koneksi,$sql);
              if(mysqli_num_rows($query)==0){
                echo '<table class="table table-bordered table-hover table-striped">
                <thead>
                <tr bgcolor="#ccc">
                  <th>No</th>
                  <th>Nomor Induk</th>
                  <th>Program Studi</th>
                  <th>Status</th>
                  <th>Waktu Memilih</th>
                </tr>
                </thead>
                <tbody>';
                echo "<td colspan='5'>Data Masih Kosong</td>";
              }else{
                echo '<table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr bgcolor="#ccc">
                  <th>No</th>
                  <th>Nomor Induk</th>
                  <th>Program Studi</th>
                  <th>Status</th>
                  <th>Waktu Memilih</th>
                </tr>
                </thead>
                <tbody>';  
                $no=1;
                while($r=mysqli_fetch_assoc($query)){
                  echo "<tr>";
                  echo "<td>$no</td>";
                  echo "<td>".$r['nmr_pemilih']."</td>";
                  echo "<td>".$r['prodi']."</td>";
                  echo '<td><p>Sudah Memilih</p></td>';
                  echo "<td>".$r['waktu']."</td>";
                  echo "</tr>";
                  $no++;
                }
              }
              ?>
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
