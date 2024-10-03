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
        <li><a href="?m=awal"><i class="ri-dashboard-line"></i>Beranda</a></li>
        <li><a href="?m=mahasiswa"><i class="ri-user-line"></i> Mahasiswa</a></li>
        <li class="active">Daftar</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Mahasiswa</h3>&nbsp;&nbsp;&nbsp;&nbsp;
			        <a href="?m=mahasiswa&s=tambah" class="btn btn-primary"><i class="ri-user-add-line"></i>&nbsp;Tambah</a>
              <a href="index.php?m=mahasiswa&s=reset" name="reset_btn" class="btn btn-danger" onclick="return confirm('Seluruh data Mahasiswa akan dihapus dan proses tidak dapat dibatalkan, tekan OK untuk melanjutkan.')"><i class="ri-eraser-fill"></i>&nbsp;Hapus Semua</a>
              <div>
                <?php include("import.php") ?>
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="input-group">
                      <span class="input-group-btn">
                        <div class="btn btn-success browse-button">
                          <span class="browse-button-text">
                            <i class="ri-file-excel-2-fill"></i> Pilih</span>
                          <input class="imporXLS" type="file" name="filexls" id="formFile">
                        </div>
                        <button type="button" class="btn btn-danger clear-button" style="display:none;">
                          <span class="ri-delete-bin-2-line"> Hapus</span>
                        </button>
                      </span>
                      <input type="text" class="form-control filename" disabled="disabled" placeholder="Tekan Pilih untuk mengimpor File Excel Data Mahasiswa">
                      <span class="input-group-btn">
                        <button class="btn btn-primary upload-button" type="submit" name="submit">
                          <i class="ri-upload-2-fill"></i> Impor
                        </button>
                      </span>
                    </div>
                  </div>
                </form>
              </div>
            </div>            
            <!-- /.box-header -->

            <div class="box-body">
              <?php
              include "../sambungan.php";
              //$sql="SELECT tb_mhswa.*, tb_prodi.prodi FROM tb_mhswa,tb_prodi WHERE tb_prodi.id_prodi=tb_mhswa.id_prodi ORDER BY nim";
              $sql="SELECT * FROM tb_mhswa ORDER BY nim";
              $query=mysqli_query($koneksi,$sql);
              if(mysqli_num_rows($query)==0){
                echo '<table class="table table-bordered table-hover table-striped">
                  <thead>
                  <tr bgcolor="#ccc">
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Prodi</th>
                    <th>Email</th>
                    <th>Aktif</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>';
                echo "<td colspan='8'>Data Masih Kosong</td>";
              }else{
                echo '<table id="pilkasis1" class="table table-bordered table-hover table-striped">
                  <thead>
                  <tr bgcolor="#ccc">
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Prodi</th>
                    <th>Email</th>
                    <th>Aktif</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>';
                $no=1;
                while($r=mysqli_fetch_assoc($query)){
                  echo "<tr>";
                  echo "<td>$no</td>";
                  echo "<td><a href='?m=mahasiswa&s=detail&nim=".$r['nim']."'>".$r['nim']."</a></td>";
                  echo "<td>".$r['nama']."</td>";
                  echo "<td>".$r['gender']."</td>";
                  echo "<td>".$r['prodi']."</td>";
                  echo "<td>".$r['email']."</td>";
                  echo "<td>".$r['aktif']."</td>";
                  echo '<td><a class="btn btn-sm btn-info" href="index.php?m=mahasiswa&s=edit&nim='.$r['nim'].'"><i class="ri-edit-2-line"></i> Edit</a>&nbsp;&nbsp;<a class="btn btn-sm btn-danger" href="index.php?m=mahasiswa&s=hapus&nim='.$r['nim'].'" onclick="return confirm(\'Data ini akan dihapus, tekan OK untuk melanjutkan.\')"><i class="ri-delete-bin-6-line"></i> Hapus</a></td>';
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
