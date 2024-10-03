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
        <li class="active">Tambah</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Tambah Program Studi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			 <!--Mulai buat form-->
			 <form action="?m=prodi&s=simpan" method="post" enctype="multipart/form-data">
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
                <tr>
                  <td width=150>Program Studi</td>
                  <td><input type="text" name="prodi" placeholder=" " size="25px" maxlength="50px" required /></td>
                </tr>
                <tr>
                  <td colspan=3>
                  <input type="submit" name="simpan" value="Save" class="btn btn-info" />&nbsp;&nbsp;&nbsp;
                  <input type="reset" name="reset" value="Reset" class="btn btn-warning" />&nbsp;&nbsp;&nbsp;
                  <a href="?m=prodi" class="btn btn-danger">Cancel</a></td>
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
