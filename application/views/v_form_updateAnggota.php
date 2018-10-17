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
<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url()."index.php/Ctrl_login/berandaP";?>" class="logo">
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

     <li >
      <a href="<?php echo base_url()."index.php/petugas/index";?>">
       <i class="fa fa-home"></i>
       <span>Beranda</span>

     </a>
   </li>
   <li class="active">
    <a href="<?php echo base_url()."index.php/petugas/anggota";?>">
     <i class="fa fa-group"></i>
     <span>Anggota</span>

   </a>
 </li>
 <li>
  <a href="<?php echo base_url()."index.php/petugas/simpanan";?>">
   <i class="fa fa-bar-chart-o"></i>
   <span>Simpanan</span>

 </a>
</li>
<li >
  <a href="<?php echo base_url()."index.php/petugas/pinjam/".$this->session->userdata("idUser");?>">
    <i class="fa fa-table"></i> <span>Pinjaman</span>

  </a>
</li>
<li>
  <a href="<?php echo base_url()."index.php/petugas/pengajuan";?>">
    <i class="fa fa-edit"></i> <span>Pengajuan Pinjaman</span>

  </a>
</li>

</ul>
</section>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <section class="content-header">
  <h1>
    Form Pengajuan Pinjaman
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    <li>pengajuan</li>
    <li class="active">form pengajuan</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header with-border">
          <div class="warp-isi">
            <div class="form-group">
              <form class="form-horizontal" method="POST"  action="<?php echo base_url()."index.php/Ctrl_anggotaP/Update/".$data[0]['idAnggota'];?>">
                <div class="form-group">
                  <label class="control-label col-sm-2">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" name="nama" class="form-control" value="<?php echo $data[0]['nama']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">NIP</label>
                  <div class="col-sm-3">
                    <input type="text" name="nip" size="16" class="form-control" value="<?php echo $data[0]['nip']; ?>"required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Tanggal lahir</label>
                  <div class="col-sm-3">
                    <input type="date" name="tgl" class="form-control" value="<?php echo $data[0]['tanggal_lahir']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">No Telepon</label>
                  <div class="col-sm-3">
                    <input type="text" name="tlpn" size="12" class="form-control" value="<?php echo $data[0]['telpn']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Instansi</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="instansi" value="">
                      <?php foreach ($data1 as $d) {
                        if ($d[idInstansi] == $data[0]['idInstansi']) {
                           echo '
                          <option selected value="'.$d['idInstansi'].'">'.$d['instansi'].'</option>
                        ';
                        }else{
                           echo '
                          <option value="'.$d['idInstansi'].'">'.$d['instansi'].'</option>
                        ';
                        }
                        //  echo '
                        //   <option value="'.$d['idInstansi'].'">'.$d['instansi'].'</option>
                        // ';
                       
                      } ?>
                      
                      
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-sm-2">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" name="alamat" class="form-control" value="<?php echo $data[0]['alamat']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Username</label>
                  <div class="col-sm-3">
                    <input type="text" name="Username" class="form-control" value="<?php echo $data[0]['username']; ?>" required>
                  </div>
                </div>
                

                
                <div class="form-group"> 
                  <div class="col-md-offset-10 col-md-2">
                    <button type="submit" class="btn btn-primary btn-round-lg " >Update</button>
                  </div>
                </div>
              </form>
              
              <!-- /.input group -->
            </div>
            <button type="button" class="btn bg-olive margin">
              <span class='fa fa-arrow-circle-left'></span><a href="<?php echo base_url()."index.php/Ctrl_anggotaP/anggota";?>">  Kembali</a>
            </button>            
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
