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
        <li class="active">Detail</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Administrator</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php
              $id=$_GET['idp'];
              include "../sambungan.php";
              $sql="SELECT * FROM tb_admin WHERE id_admin='$id'";
              $query=mysqli_query($koneksi,$sql);
              $r=mysqli_fetch_assoc($query);
              ?>
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
					<tr>
						<td width=200>Username</td>
						<td><?php echo$r['username'];?></td>
					</tr>
					<tr>
						<td>Nama Admin</td>
						<td><?php echo$r['nama'];?></td>
					</tr>
					<tr>
						<td>Alamat Email</td>
						<td><?php echo$r['email'];?></td>
					</tr>
					<tr>
						<td>Hak Akses</td>
						<td><?php echo $r['hak_akses'];?></td>
					</tr>
					<tr>
						<td>Aktif</td>
						<td><?php echo $r['aktif'];?></td>
					</tr>
					<tr>
						<td>Foto</td>
						<td>
            <?php 
						if ($r['foto']!=''){
						  echo "<img src=\"../gambar/admin/$r[foto]\" height=150 />";  
						}
						else{
						  echo "<img src=\"../gambar/admin/1.jpg\">";
						}
            ?>
					</tr>
					<tr>
						<td colspan=2>
						<a href="?m=admin" class="btn btn-danger"><i class="fa fa-times"></i> Close</a></td>
					</tr>
                </tbody>
              </table>
			 </form>
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
