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
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/dataTables.bootstrap.css">
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
              <a href="<?php echo base_url()."index.php/Ctrl_login/logoutA";?>">Logout</a>
            </li>
            
          </ul>
        </li>
        
        
      </ul>
    </li>
    

  </ul>
</div>
</nav>
</header>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">


    <ul class="sidebar-menu" data-widget="tree">

     <li >
      <a href="<?php echo base_url()."index.php/Ctrl_login/berandaP";?>">
       <i class="fa fa-home"></i>
       <span>Beranda</span>

     </a>
   </li>
   <li class="active">
    <a href="<?php echo base_url()."index.php/Ctrl_anggotaP/anggota";?>">
     <i class="fa fa-group"></i>
     <span>Anggota</span>

   </a>
 </li>
     <li>
        <a href="<?php echo base_url()."index.php/Ctrl_simpananP/simpanan";?>">
         <i class="fa fa-bar-chart-o"></i>
          <span>Simpanan</span>
          
        </a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/Ctrl_pinjamanP/";?>">
          <i class="fa fa-table"></i> <span>Pinjaman</span>
          
        </a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/Ctrl_pengajuanP/";?>">
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
      Data Anggota KPRI
    </h1>
    <ol class="breadcrumb">
     <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
     <li  class="active">Data anggota</li>
   </ol>
 </section>
 <section class="content">
  <div class="row">
    <div class="col-md-12">
    <?php if ($this->session->has_userdata('sukses')) { ?>
       <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('sukses'); ?>
        </div>
    <?php } else if ($this->session->has_userdata('error')) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php }  ?>
   

      <div class="box box-danger">
        <div class="box-header with-border">


          <div class="table-responsive">
            <table id="example1" class=" table table-bordered table-hover  dataTable dataAdmin ">
              <thead>
                <tr role="row">
                  <th>No</th>
                  <th>Id Kelompok</th>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Tgl lhr</th>
                  <th>Telepon</th>                  
                  <th>Instansi</th>
                  <th>Update Data</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=0;
                foreach ($data as $d) {
                  $no++?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $d['idInstansi']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['nip']; ?></td>
                    <td><?php echo $d['tanggal_lahir']; ?></td>
                    <td><?php echo $d['telpn']; ?></td>
                    <td><?php echo $d['instansi']; ?></td>
                    <td><a href="<?php echo base_url()."index.php/Ctrl_anggotaP/updateAnggota/".$d['idAnggota'];?>">Update</a></td>
                    <td><a href="<?php echo base_url()."index.php/Ctrl_anggotaP/doNonaktif/".$d['idAnggota'];?>">Non Aktif</a></td>

                  </tr>
                </tr>
                <?php } ?>



              </tbody>

            </table>
            <div class="col-sm-offset-1 col-sm-2">
             <a href="<?php echo base_url()."index.php/Ctrl_anggotaP/addAnggota";?>" class="btn btn-block btn-primary">Tambah Anggota</a>
           </div>
            <div class="col-sm-offset-1 col-sm-2">
             <a href="<?php echo base_url()."index.php/Ctrl_anggotaP/anggotaNa";?>" class="btn btn-warning btn-block ">Anggota Non Aktif</a>
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
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();   //fungsi standart datatable tidak memiliki configurasi fitur sama sekali
  }
</script>
<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/dist/js/jquery.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/vendor/js/bootstrap.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.js"></script>
<script src="<?php echo base_url()?>assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
