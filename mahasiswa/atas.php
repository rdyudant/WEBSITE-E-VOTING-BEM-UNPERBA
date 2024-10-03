<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $judul;?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.png">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Ionicons https://code.ionicframework.com/ionicons/2.0.1/ -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- REMIXICONS -->
    <link rel="stylesheet" href="../icons/remixicon.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Extra Style for Paslon Module -->
    <link rel="stylesheet" href="css/extrastyle.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="." class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <i class="logo-mini ri-archive-line"></i>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><i class="ri-archive-line"></i><b> e-Voting App</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle Navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../gambar/mahasiswa/<?php echo $_SESSION['foto']; ?>" class="user-image" alt="<?php echo $_SESSION['nim']; ?>">
                  <span class="hidden-xs"><?php echo $_SESSION['nama']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../gambar/mahasiswa/<?php echo $_SESSION['foto']; ?>" class="img-circle" alt="<?php echo $_SESSION['nim']; ?>">
                    <p>
                      <?php echo $_SESSION['nama']; ?>
                      <small><?php echo $_SESSION['email']; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="?m=mahasiswa&s=profil" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign Out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
            <img src="../gambar/mahasiswa/<?php echo $_SESSION['foto']; ?>" class="img-circle" alt="<?php echo $_SESSION['nim']; ?>">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['nama']; ?></p>
              <a href="?m=mahasiswa&s=profil"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <br>
            <li class="header">Menu Utama</li>
            <li class="<?php if($aktif=='Beranda') echo 'active';?> treeview">
              <a href=".">
                <i class="fa ri-1x ri-dashboard-line"></i> <span>Beranda</span>
              </a>
            </li>
            <li class="<?php if($aktif=='Mahasiswa') echo 'active';?> treeview">
              <a href="?m=mahasiswa&a=profil">
                <i class="fa ri-1x ri-user-line"></i> <span>Profil</span>
              </a>
            </li>
            <li class="<?php if($aktif=='Paslon') echo 'active';?> treeview">
              <a href="?m=paslon">
                <i class="fa ri-1x ri-group-line"></i> <span>Pasangan Calon</span>
              </a>
            </li>
            <li>
              <a href="logout.php">
                <i class="fa ri-1x ri-logout-box-r-line"></i> <span>Sign Out</span> <small class="label pull-right bg-green"></small>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
