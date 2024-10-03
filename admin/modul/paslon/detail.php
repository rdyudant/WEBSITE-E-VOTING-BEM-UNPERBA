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
        <li class="active">Detail</li>
      </ol>
    </section>
    <!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Pasangan Calon</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php
			$id=$_GET['idp'];
			include "../sambungan.php";
			$sql="SELECT * FROM tb_paslon WHERE id_paslon='$id'";
			$query=mysqli_query($koneksi,$sql);
			$r=mysqli_fetch_assoc($query);
			?>
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
					<tr>
						<td width=250>Nama Pasangan</td>
						<td><?php echo$r['nama'];?></td>
					</tr>
					<tr>
						<td>Nomor Urut</td>
						<td><?php echo$r['nomor'];?></td>
					</tr>
					<tr>
						<td>Visi</td>
						<td><?php echo$r['visi'];?></td>
					</tr>
					<tr>
						<td>Misi</td>
						<td><?php echo$r['misi'];?></td>
					</tr>
					<tr>
						<td>Foto</td>
						<td>
<?php 
						if ($r['foto']!=''){
						  echo "<img src=\"../gambar/paslon/$r[foto]\" height=150 />";  
						}
						else{
						  echo "<img src=\"../gambar/paslon/1.jpg\">";
						}
?>
					</tr>
					<tr>
						<td colspan=2>
						<a href="?m=paslon&s=edit&idp=<?php echo$id;?>" class="btn btn-info"><i class="fa ri-edit-2-line"></i> Edit</a>
						<a href="?m=paslon" class="btn btn-danger"><i class="fa fa-remove"></i> Close</a></td>
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
