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
        <li><a href="?m=mahasiswa"><i class="ri-user-line"></i> Mahasiswa</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Edit Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php
			$id=$_GET['nim'];
			include "../sambungan.php";
			$sql="SELECT * FROM tb_mhswa WHERE nim='$id'";
			$query=mysqli_query($koneksi,$sql);
			$r=mysqli_fetch_assoc($query);
			?>
			 <!--Mulai buat form-->
			 <form action="?m=mahasiswa&s=update" method="post" enctype="multipart/form-data">
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
					<tr>
						<td width=250>NIM</td>
						<td><input type="number" name="nim" value="<?php echo$r['nim'];?>" readonly /><small><b> (NIM tak bisa diubah)</b></small></td>
					</tr>
					<tr>
						<td>Password*</td>
						<td><input type="password" name="password" placeholder=" " size="20px" maxlength="50px" /><small><i> *kosongkan jika tak diubah</i></small></td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td><input type="text" name="nama" placeholder=" " size="40px" maxlength="100px" value="<?php echo$r['nama'];?>" required /></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td><input type="radio" name="gender" id="jkl" value="L" <?php if($r['gender']=='L') echo " checked";?> /> Laki-laki &nbsp;&nbsp;
						<input type="radio" name="gender" id="jkp" value="P" <?php if($r['gender']=='P') echo " checked";?> /> Perempuan</td>
					</tr>
					<tr>
						<td>Alamat Email</td>
						<td><input type="email" name="email" placeholder=" " size="40px" maxlength="100px" value="<?php echo$r['email'];?>" /></td>
					</tr>
					<tr>
						<td>Program Studi</td>
						<td>
							<select name="prodi">
							<?php
							$sql2="SELECT * FROM tb_prodi ORDER BY prodi";
							$query2=mysqli_query($koneksi,$sql2);
							while($r2=mysqli_fetch_assoc($query2)){
									echo "<option value='".$r2['prodi']."'";
									echo $r2['prodi']==$r['prodi']?"selected":"";
									echo ">".$r2['prodi']."</option>";
									//echo "<option>".$r2['prodi']."</option>";
							}
							?>
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
							if ($r['foto'] != '') {
								echo "<img src=\"../gambar/admin/$r[foto]\" height=150 />";
							} else {
								// Memeriksa jenis kelamin
								$gender = $r['gender'];
								
								// Menentukan gambar default berdasarkan jenis kelamin
								if ($gender == 'L') {
									echo "<img src=\"../gambar/mahasiswa/L.jpg\" height=150 />";
								} elseif ($gender == 'P') {
									echo "<img src=\"../gambar/mahasiswa/P.jpg\" height=150 />";
								} else {
									// Jika jenis kelamin tidak diketahui
									echo "<img src=\"../gambar/mahasiswa/L.jpg\" height=150 />";
								}
							}
						?>
					</tr>
					<tr>
						<td>Ganti Foto*</td>
						<td><input type="file" name="foto" accept="image/*" /><small><i>*kosongkan jika foto tak diganti</i></small></td>
					</tr>
					<tr>
						<td colspan=3>
						<input type="submit" name="simpan" value="Save" class="btn btn-info" />&nbsp;&nbsp;&nbsp;
						<input type="reset" name="reset" value="Reset" class="btn btn-warning" />&nbsp;&nbsp;&nbsp;
						<a href="?m=mahasiswa&s=detail&nim=<?php echo$id;?>" class="btn btn-danger"></i>Cancel</a></td>
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
