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

     <li>
        <a href="<?php echo base_url()."index.php/Ctrl_login/beranda";?>">
         <i class="fa fa-home"></i>
          <span>Beranda</span>
          
        </a>
      </li>
     <li class="active">
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

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Riwayat Transaksi Simpanan
    </h1>
    <ol class="breadcrumb">
     <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
     <li>simpanan</li>
     <li  class="active">riwayat simpanan</li>
   </ol>
 </section>
 <section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <div style="margin: 5px 5%"> <h4>Penambahan</h4></div>
          <div class="statusUpdate ">
            <p>Data pada : <?php 
              date_default_timezone_set("Asia/Jakarta");
              echo date("Y-m-d h:i:sa"); ?></p></div>
              <div class="table-responsive">
                <table id="example1" class=" table table-bordered table-hover  dataTable">
                  <thead>
                    <tr role="row">
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Pokok</th>
                      <th>Wajib</th>
                      <th>Gertab</th>
                      <th>THR</th>
                      <th>Manasuka</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=0;
                    foreach ($data as $d) {
                      $no++?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php
                          $tanggal = date("d-m-Y", strtotime($d['tanggal']));
                         echo $tanggal; ?></td>
                        <td><?php echo $d['wajib']; ?></td>
                        <td><?php echo $d['pokok']; ?></td>
                        <td><?php echo $d['gertab']; ?></td>
                        <td><?php echo $d['thr'];?></td>
                        <td><?php echo $d['manasuka']; ?></td>

                      </tr>
                    </tr>
                    <?php } ?>



                  </tbody>

                </table>
              </div>

            </div>

          </div>
        </div>
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <div style="margin: 5px 5%"> <h4>Penarikan</h4></div>
              <div class="statusUpdate ">
                <p>Data pada : <?php 
                  date_default_timezone_set("Asia/Jakarta");
                  echo date("Y-m-d h:i:sa"); ?></p></div>
                  <div class="table-responsive">
                    <table id="example2" class=" table table-bordered table-hover  dataTable">
                      <thead>
                        <tr role="row">
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no=0;
                        foreach ($data1 as $d) {
                          $no++?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php
                          $tanggal = date("d-m-Y", strtotime($d['tanggal']));
                         echo $tanggal; ?></td>
                            <td><?php echo $d['jumlah']; ?></td>

                          </tr>
                        </tr>
                        <?php } ?>



                      </tbody>

                    </table>
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
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false,
      "order": [[ 1, "desc" ]]
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
