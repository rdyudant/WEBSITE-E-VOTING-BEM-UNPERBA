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
        <li><a href="?m=prodi"><i class="ri-graduation-cap-line"></i> Program Studi</a></li>
        <li class="active">Daftar</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Program Studi</h3>&nbsp;&nbsp;&nbsp;&nbsp;
			        <a href="?m=prodi&s=tambah" class="btn btn-primary"><i class="ri-menu-add-line"></i>&nbsp;Tambah</a>
              <a href="index.php?m=prodi&s=reset" name="reset_btn" class="btn btn-danger" onclick="return confirm('Seluruh data Program Studi akan dihapus dan proses tidak dapat dibatalkan, tekan OK untuk melanjutkan.')"><i class="ri-eraser-fill"></i>&nbsp;Hapus Semua</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php
              include "../sambungan.php";
              $sql="SELECT * FROM tb_prodi ORDER BY id_prodi";
              $query=mysqli_query($koneksi,$sql);
              if(mysqli_num_rows($query)==0){
                echo '<table class="table table-bordered table-hover table-striped">
                  <thead>
                  <tr bgcolor="#ccc">
                    <th>No</th>
                    <th>Program Studi</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>';
                echo "<td colspan='3'>Data Masih Kosong</td>";
              }else{
                echo '<table id="pilkasis1" class="table table-bordered table-hover table-striped">
                  <thead>
                  <tr bgcolor="#ccc">
                    <th>No</th>
                    <th>Program Studi</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>';
                $no=1;
                while($r=mysqli_fetch_assoc($query)){
                  echo "<tr>";
                  echo "<td>$no</td>";
                  echo "<td>".$r['prodi']."</a></td>";
                  echo '<td><a class="btn btn-sm btn-danger" href="index.php?m=prodi&s=hapus&id='.$r['id_prodi'].'" onclick="return confirm(\'Data ini akan dihapus, tekan OK untuk melanjutkan.\')"><i class="ri-delete-bin-6-line"></i> Hapus</a></td>';
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
