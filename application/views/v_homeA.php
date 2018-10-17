<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Simpan Pinjam | KPRI</title>
  <link rel="shortcut icon" href="<?php echo base_url()?>assets/image/logo.png">
 <link rel="shortcut icon" href="<?php echo base_url()?>assets/image/logo.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/style.css?v=1.0">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/_all-skins.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url()."index.php/Ctrl_login/beranda";?>" class="logo">
        <span class="logo-lg"><b>KPRI</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="nama"><p><?php echo strtoupper( $this->session->userdata("nama"));?></p></li>
            <li class="dropdown tasks-menu">
              <a href="<?php echo base_url()."index.php/Ctrl_login/logout";?>">Logout</a>
            </li>
            
          </ul>
        </li>
        
        
      </ul>
    </li>
    

  </ul>
</div>
</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">


    <ul class="sidebar-menu" data-widget="tree">

     <li class="active">
        <a href="<?php echo base_url()."index.php/Ctrl_login/beranda";?>">
         <i class="fa fa-home"></i>
          <span>Beranda</span>
          
        </a>
      </li>
     <li>
        <a href="<?php echo base_url()."index.php/Ctrl_simpananA/simpanan";?>">
         <i class="fa fa-bar-chart-o"></i>
          <span>Simpanan</span>
          
        </a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/Ctrl_pinjamanA/pinjaman"?>">
          <i class="fa fa-table"></i> <span>Pinjaman</span>
          
        </a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/Ctrl_pengajuanA/pengajuan";?>">
          <i class="fa fa-edit"></i> <span>Pengajuan Pinjaman</span>
          
        </a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/Ctrl_anggotaA/";?>">
          <i class="fa fa-key"></i> <span>Edit Password</span>

        </a>
      </li>


    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <div class="home">
              <h1>SISTEM INFORMASI SIMPAN PINJAM </h1>
              <h2>KPRI "GURU" KECAMATAN SUMBERMANJING WETAN</h2>
              <br>  
              <h2>SELAMAT DATANG, <?php echo strtoupper( $this->session->userdata("nama"));?></h2>
              <br>
              <br>  <br>  
              <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unit Simpan Pinjam pada KPRI "GURU" Kecamatan Sumbermanjing memberikan jasa simpan atau tabung dan jasa pinjam atau hutang. Saat ini sudah lebih dari 400 orang yang telah menjadi anggota tetap dari unit simpan pinjam. Unit Simpan Pinjam memberikan jasa simpanan, simpan itu sendir terdiri dari 5 jenis yaitu pokok,wajib,gerakan menabung, tabungan hari raya dan manasuka. Simpanan pokok merupakan simpan yang dilakukan sebagai syarat untuk bergabung menjadi anggota yang dibayarkan 1 kali saja. Simpanan wajib adalah simpana yang wajib dibayarkan tiap bulannya dan nilainya sesuai dengan peraturan khusus yang disepati. Tahungan hari raya merupakan tabungan untuk hari raya keagamaan sehingga dapat diambil ketika hari raya masing masing agama. sedangakna manasuka adalah simpanan yang diberikan secara suka rela oleh anggota.</p>
              <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saat ini Unit Simpan Pinjam memiliki sistem informasi yang dapat diakses kapanpun dan dimanapun. Dengan adanya sistem ini diharapkan dapat mempermudah anggot untuk melakukan aktifitas pada unit simpan pinjam. Anggota dapat melakukan melihat informasi simpanan, informasi pinjaman dan pengajuan pinjaman.</p>

             
              <br>
             
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/dist/js/jquery.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/vendor/js/bootstrap.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.js"></script>

</body>
</html>
