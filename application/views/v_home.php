<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Simpan Pinjam | KPRI</title>
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
        <a href="<?php echo base_url()."index.php/Ctrl_login/editPassword";?>">
          <i class="fa fa-edit"></i> <span>Edit Password</span>
          
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
              <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed lorem sed felis venenatis porttitor. Sed ultricies egestas elit, mattis sollicitudin felis pellentesque a. Integer consectetur id augue quis laoreet. Duis id lorem non est placerat iaculis. Nulla rhoncus lacus eget lacus suscipit blandit. Sed tincidunt arcu vel nisi ultricies, vel euismod urna efficitur. Sed leo augue, gravida ac sapien ut, ornare varius dui. Ut accumsan purus tristique, elementum ipsum vitae, placerat leo. Praesent volutpat rutrum magna, a facilisis sem hendrerit et. Aliquam mollis sapien sapien, non gravida enim bibendum vitae. Etiam vel tortor et risus volutpat vulputate sit amet ut velit. Nunc efficitur pharetra neque eget lacinia.</p>
              <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nunc pellentesque in nisl mollis aliquet. Pellentesque id orci non magna molestie maximus vitae porttitor purus. Fusce ut volutpat mauris, sit amet blandit tortor. Integer consequat lobortis commodo. Vestibulum rutrum nisi quis eros aliquet aliquam. Donec elementum diam eu varius vestibulum. In cursus ex eu orci fringilla pretium. Vestibulum malesuada, lectus at dignissim malesuada, enim purus malesuada massa, quis fermentum lectus augue at metus. Nunc ut hendrerit sapien. Aliquam non elit sed velit ultricies posuere.</p>

              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sed ut nunc bibendum, consequat neque a, dapibus erat. Nulla nec scelerisque tortor. Quisque eget gravida tortor, in eleifend dolor. Proin velit nisl, pellentesque pulvinar vestibulum quis, gravida eget magna. Curabitur sed mi quis odio tristique tristique. Praesent et neque ac nunc aliquam aliquam. In tempor est at erat accumsan, elementum volutpat nibh ultricies. Morbi eu leo metus. Quisque aliquam semper lectus eget feugiat. Proin tempus vestibulum dapibus. Duis quis mollis metus</p>
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
