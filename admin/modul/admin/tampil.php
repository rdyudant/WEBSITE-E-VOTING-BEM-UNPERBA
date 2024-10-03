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
        <li><a href="?m=admin"><i class="ri-admin-line"></i> Administrator</a></li>
        <li class="active">Daftar</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Administrator</h3>&nbsp;&nbsp;&nbsp;&nbsp;
			        <a href="?m=admin&s=tambah" class="btn btn-primary"><i class="ri-user-add-line"></i>&nbsp;Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php
              include "../sambungan.php";
              $sql="SELECT * FROM tb_admin ORDER BY id_admin";
              $query=mysqli_query($koneksi,$sql);
              if(mysqli_num_rows($query)==0){
                echo '<table class="table table-bordered table-hover table-striped">
                <thead>
                <tr bgcolor="#ccc">
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama Admin</th>
                  <th>Email</th>
                  <th>Hak Akses</th>
                  <th>Aktif</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>';
                echo "<td colspan='7'>Data Masih Kosong</td>";
              }else{
                echo '<table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr bgcolor="#ccc">
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama Admin</th>
                  <th>Email</th>
                  <th>Hak Akses</th>
                  <th>Aktif</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>';
                $no=1;
                while($r=mysqli_fetch_assoc($query)){
                  echo "<tr>";
                  echo "<td>$no</td>";
                  echo "<td><a href='?m=admin&s=detail&idp=".$r['id_admin']."'>".$r['username']."</a></td>";
                  echo "<td>".$r['nama']."</td>";
                  echo "<td>".$r['email']."</td>";
                  echo "<td>".$r['hak_akses']."</td>";
                  echo "<td>".$r['aktif']."</td>";
                  echo '<td><a class="btn btn-sm btn-danger" href="index.php?m=admin&s=hapus&idp='.$r['id_admin'].'" onclick="return confirm(\'Data ini akan dihapus, tekan OK untuk melanjutkan.\')"><i class="ri-delete-bin-6-line"></i> Hapus</a></td>';
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
