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
        <li><a href="?=awal"><i class="ri-dashboard-line"></i> Beranda</a></li>
        <li><a href="?m=admin"><i class="ri-admin-line"></i> Administrator</a></li>
        <li class="active">Tambah</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Tambah Administrator</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			 <!--Mulai buat form-->
			 <form action="?m=admin&s=simpan" method="post" enctype="multipart/form-data">
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
					<tr>
						<td width=200>Username</td>
						<td><input type="text" name="username" placeholder=" " size="20px" maxlength="25px" required /></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" placeholder=" " size="20px" maxlength="25px" required /></td>
					</tr>
					<tr>
						<td>Nama Admin</td>
						<td><input type="text" name="nama" placeholder="Admin (Nama)" size="40px" maxlength="50px" required /></td>
					</tr>
					<tr>
						<td>Alamat Email</td>
						<td><input type="email" name="email" placeholder=" " size="40px" maxlength="50px" /></td>
					</tr>
					<tr>
						<td>Hak Akses</td>
						<td>
							<select name="hak_akses" required>
								<option value="Administrator"> Administrator</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Aktifkan</td>
						<td><input type="radio" name="aktif" id="aktifY" value="Y" />Ya &nbsp;&nbsp;
						<input type="radio" name="aktif" id="aktifT" value="T" checked />Tidak</td>
					</tr>
					<tr>
						<td>Foto</td>
						<td><input type="file" name="foto" accept="image/*" /></td>
					</tr>
					<tr>
						<td colspan=3>
						<input type="submit" name="simpan" value="Save" class="btn btn-info" />&nbsp;&nbsp;&nbsp;
						<input type="reset" name="reset" value="Reset" class="btn btn-warning" />&nbsp;&nbsp;&nbsp;
						<a href="?m=admin" class="btn btn-danger">Cancel</a></td>
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
