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
        <li class="active">Detail</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php
			$id=$_GET['nim'];
			include "../sambungan.php";
			//$sql="SELECT tb_mhswa.nim, tb_mhswa.nama, tb_mhswa.gender, tb_mhswa.email, tb_mhswa.foto, tb_mhswa.aktif, tb_prodi.prodi FROM tb_mhswa, tb_prodi WHERE tb_prodi.id_prodi=tb_mhswa.id_prodi AND nim='$id'";
			$sql="SELECT * FROM tb_mhswa WHERE nim='$id'";
			$query=mysqli_query($koneksi,$sql);
			$r=mysqli_fetch_assoc($query);
			?>
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
					<tr>
						<td width=250>NIM</td>
						<td><?php echo$r['nim'];?></td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td><?php echo$r['nama'];?></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td><?php echo$r['gender']=="L"?"Laki-laki":"Perempuan";?></td>
					</tr>
					<tr>
						<td>Program Studi</td>
						<td><?php echo$r['prodi'];?></td>
					</tr>
					<tr>
						<td>Alamat Email</td>
						<td><?php echo$r['email'];?></td>
					</tr>
					<tr>
						<td>Aktif</td>
						<td><?php echo $r['aktif'];?></td>
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
						<td colspan=2>
						<a href="?m=mahasiswa&s=edit&nim=<?php echo$id;?>" class="btn btn-info"><i class="ri-edit-2-line"></i> Edit</a>
						<a href="?m=mahasiswa" class="btn btn-danger"><i class="fa fa-times"></i> Close</a></td>
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
