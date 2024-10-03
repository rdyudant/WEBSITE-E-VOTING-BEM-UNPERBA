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
        <li><a href="?m=paslon"><i class="ri-group-line"></i> Pasangan Calon</a></li>
        <li class="active">Tambah</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Tambah Paslon</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			 <!--Mulai buat form-->
			 <form action="?m=paslon&s=simpan" method="post" enctype="multipart/form-data">
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
					<tr>
						<td width=250>Nama Pasangan</td>
						<td><input type="text" name="nama" placeholder="Nama 1 & Nama 2" size="72px" maxlength="255px" required /></td>
					</tr>
					<tr>
						<td>Nomor Urut</td>
						<td><input type="text" name="nomor" placeholder="01 / 02 / 03" size="5px" maxlength="2px" /></td>
					</tr>
					<tr>
						<td>Visi</td>
						<td><input type="text" name="visi" placeholder=" " size="72px" maxlength="255px" /></td>
					</tr>
					<tr>
						<td>Misi*</td>
						<td><textarea name="misi" placeholder=" " cols="75px" rows="5">
<ol>
<li>Misi pertama
<li>Misi kedua
<li>Misi ketiga
<li>Misi keempat
<li>Misi terakhir
</ol></textarea>
<small><b><br>*penomoran misi sudah otomatis oleh element 'ol', apabila ingin menambah/menghapus misi
<br>silahkan dilakukan pada baris dengan elemen 'li'.</b></small></td>
					</tr>
					<tr>
						<td>Foto</td>
						<td><input type="file" name="foto" accept="image/*" /></td>
					</tr>
					<tr>
						<td colspan=3>
						<input type="submit" name="simpan" value="Save" class="btn btn-info" />&nbsp;&nbsp;&nbsp;
						<input type="reset" name="reset" value="Reset" class="btn btn-warning" />&nbsp;&nbsp;&nbsp;
						<a href="?m=paslon" class="btn btn-danger">Cancel</a></td>
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
