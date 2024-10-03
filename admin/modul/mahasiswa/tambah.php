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
        <li class="active">Tambah</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Tambah Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			 <!--Mulai buat form-->
			 <form action="?m=mahasiswa&s=simpan" method="post" enctype="multipart/form-data">
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
					<tr>
						<td width=250>NIM*</td>
						<td><input type="number" name="nim" placeholder=" " size="8px" maxlength="10px" required /><small><i> *maksimal 8 angka</i></small></td>
					</tr>
					<tr>
						<td>Password*</td>
						<td><input type="password" name="password" placeholder=" " size="20px" maxlength="50px" /><small><i> *kosongkan apabila <b>Password=Nomor Induk Mahasiswa</i></b></small></td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td><input type="text" name="nama" placeholder=" " size="40px" maxlength="100px" required /></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td><input type="radio" name="gender" id="jkl" value="L" checked/> Laki-laki &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="gender" id="jkp" value="P"  /> Perempuan</td>
					</tr>
					<tr>
						<td>Alamat Email</td>
						<td><input type="email" name="email" placeholder=" " size="40px" maxlength="100px" /></td>
					</tr>
					<tr>
						<td>Program Studi</td>
						<td>
							<select name="prodi" required>
							<?php
							include "../sambungan.php";
							$sql="SELECT prodi FROM tb_prodi";
							$query=mysqli_query($koneksi,$sql);
							while($r=mysqli_fetch_assoc($query)){
								//echo "<option value='".$r['id_prodi']."'>".$r['prodi']."</option>";
								echo "<option>".$r['prodi']."</option>";
							}
							?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Aktifkan</td>
						<td><input type="radio" name="aktif" id="aktifY" value="Y" /> Ya &nbsp;&nbsp;
						<input type="radio" name="aktif" id="aktifT" value="T" checked /> Tidak</td>
					</tr>
					<tr>
						<td>Foto</td>
						<td><input type="file" name="foto" accept="image/*" /></td>
					</tr>
					<tr>
						<td colspan=3>
						<input type="submit" name="simpan" value="Save" class="btn btn-info" />&nbsp;&nbsp;&nbsp;
						<input type="reset" name="reset" value="Reset" class="btn btn-warning" />&nbsp;&nbsp;&nbsp;
						<a href="?m=mahasiswa" class="btn btn-danger"></i>Cancel</a></td>
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
