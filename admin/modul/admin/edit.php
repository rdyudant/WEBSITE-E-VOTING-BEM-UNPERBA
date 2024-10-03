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
        <li class="active">Edit</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Edit Administrator</h3>
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
			 <!--Mulai buat form-->
			 <form action="?m=admin&s=update" method="post" enctype="multipart/form-data">
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
					<input type="hidden" name="id_admin" value="<?php echo$r['id_admin'];?>" />
					<tr>
						<td width=200>Username</td>
						<td><input type="text" name="username" placeholder=" " size="20px" maxlength="25px" value="<?php echo$r['username'];?>" required /></td>
					</tr>
					<tr>
						<td>Password*</td>
						<td><input type="password" name="password" placeholder=" " size="20px" maxlength="32px" /><small><i> *kosongkan jika tak diubah</i></small></td>
					</tr>
					<tr>
						<td>Nama Admin</td>
						<td><input type="text" name="nama" placeholder=" " size="40px" maxlength="50px" value="<?php echo$r['nama'];?>" required /></td>
					</tr>
					<tr>
						<td>Alamat Email</td>
						<td><input type="email" name="email" placeholder=" " size="40px" maxlength="50px" value="<?php echo$r['email'];?>" /></td>
					</tr>
					<tr>
						<td>Hak Akses</td>
						<td>
							<select name="hak_akses">
								<option value="Administrator" <?php if($r['hak_akses']=='Administrator') echo " selected";?>> Administrator</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Aktifkan</td>
						<td><input type="radio" name="aktif" id="aktifY" value="Y" <?php if($r['aktif']=='Y') echo " checked";?> />Ya &nbsp;&nbsp;
						<input type="radio" name="aktif" id="aktifT" value="T" <?php if($r['aktif']=='T') echo " checked";?> />Tidak</td>
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
						</td>
					</tr>
					<tr>
						<td>Ganti Foto*</td>
						<td><input type="file" name="foto" accept="image/*" /><small><i>*kosongkan jika foto tak diganti</i></small></td>
					</tr>
					<tr>
						<td colspan=3>
						<input type="submit" name="simpan" value="Save" class="btn btn-info" />&nbsp;&nbsp;&nbsp;
						<input type="reset" name="reset" value="Reset" class="btn btn-warning" />&nbsp;&nbsp;&nbsp;
						<a href="?m=admin&s=profil&idp=<?php echo$id;?>" class="btn btn-danger">Cancel</a></td>
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
