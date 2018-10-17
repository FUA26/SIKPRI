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
        <a href="<?php echo base_url()."index.php/petugas";?>" class="logo">
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
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">


    <ul class="sidebar-menu" data-widget="tree">

     <li>
      <a href="<?php echo base_url()."index.php/Ctrl_login/berandaP";?>">
       <i class="fa fa-home"></i>
       <span>Beranda</span>

     </a>
   </li>
   <li>
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
<li class="active">
  <a href="<?php echo base_url()."index.php/Ctrl_pengajuanP/";?>">
    <i class="fa fa-edit"></i> <span>Pengajuan Pinjaman</span>

  </a>
</li>



</ul>
</section>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content --><div class="content-wrapper">
  <section class="content-header">
    <h1>
      Detail Pengajuan Pinjaman KPRI
    </h1>
    <ol class="breadcrumb">
     <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
     <li>Data Pengajuan</li>
     <li  class="active">Detail pengajuan</li>
   </ol>
 </section>
 <section class="content">
  <div class="row">
    <div class="col-md-6 col-sm-12">
      <div class="box box-danger">
        <div class="box-header with-border">
          <div class="table-responsive">
            <div class="warp-isi" >
              <h4>Pengajuan pinjaman</h4>
              <br>
              <table class="table-detail">
                <tr>
                  <td style="width: 100px;"><strong>Nama</strong> </td>
                  <td><?php echo $data[0]['nama']; ?></td>
                </tr>
                <tr>
                  <td><strong> NIP</strong></td>
                  <td><?php echo $data[0]['nip']; ?></td>
                </tr>
                <tr>
                  <td><strong>Tanggal Lahir</strong> </td>
                  <td><?php echo $data[0]['tanggal_lahir']; ?></td>
                </tr>

                <tr>
                  <td><strong> Telepon</strong></td>
                  <td><?php echo $data[0]['telpn']; ?></td>
                </tr>

                <tr>
                  <td><strong>Instansi</strong> </td>
                  <td><?php echo $data[0]['instansi']; ?></td>
                </tr>
                <tr>
                  <td><strong>Gaji</strong> </td>
                  <td><?php echo $data[0]['gaji']; ?></td>
                </tr>

                <tr>
                  <td><strong>Pinjaman</strong> </td>
                  <td><?php echo $data[0]['besar_pinjaman']; ?></td>
                </tr>

                <tr>
                  <td><strong> Lama</strong></td>
                  <td><?php echo $data[0]['lama']; ?></td>
                </tr>

                <tr>
                  <td><strong> Alasan</strong></td>
                  <td><?php echo $data[0]['alasan']; ?></td>
                </tr>

              </table>
            </div>

          </div>
        </div>
      </div>
      <!-- Awal -->

      <!-- Akhir -->

    </div>
    <div class="col-md-6 col-sm-12">
     <div class="col-sm-12">
       <div class="box box-danger">
        <div class="box-header with-border">
          <div class="table-responsive">
            <div class="warp-isi" >
              <h4>Data Simpanan</h4>
              <h5>Total simpanan : <?php echo $simpanan['total']; ?> </h5>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
     <div class="box box-danger">
      <div class="box-header with-border">
        <div class="table-responsive">
          <div class="warp-isi" >
            <h4>Data Pengajuan</h4>
            <?php if (count($pengajuan) > 0){ ?>              
            <table class="table-detail">
              <tr>
                <th style="width: 50px">No</th>
                <th style="width: 100px">Tanggal</th>
                <th style="width: 100px">Jumlah</th>
                <th style="width: 100px">lama</th>
                <th style="width: 100px">Status</th>
              </tr>
              <?php 
              $c=1;
              foreach ($pengajuan as $k) { ?>
              <tr>
              <td><?php echo $c; ?></td>
              <td><?php echo $k['tanggal']; ?></td>
              <td><?php echo $k['besar_pinjaman']; ?></td>
              <td><?php echo $k['lama']; ?></td>
              <td><?php echo $k['status']; ?></td>
              </tr>
              <?php $c++;} ?>

            </table>
            <?php } else { ?>
            Tidak memiliki riwayat pengajuan pinjaman
            <?php }?>

          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Awal -->
<div class="col-sm-12">
     <div class="box box-danger">
      <div class="box-header with-border">
        <div class="table-responsive">
          <div class="warp-isi" >
            <h4>Data Pinjaman Aktif</h4>
            <?php if (count($pinjaman) > 0){ ?> 
            <table>
              <tr>
                <th style="width: 100px">Tanggal</th>
                <th style="width: 100px">Pinjaman</th>
                <th style="width: 100px">Lama</th>
                <th style="width: 100px">Setora ke-</th>
                

              </tr>
              <tr>
                <td><?php echo $pinjaman['tanggal'] ?></td>
                <td><?php echo $pinjaman['pinjaman'] ?></td>
                <td><?php echo $pinjaman['lama'] ?></td>
                <td><?php echo $pinjaman['setoranke'] ?></td>
                
              </tr>

            </table>
            <?php } else { ?>
            Tidak memiliki tanggungan pinjaman
            <?php }?>

          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Akhir -->

</div>
          <button type="button" class="btn bg-olive margin">
                <span class='fa fa-arrow-circle-left'></span><a href="<?php echo base_url()."index.php/Ctrl_pengajuanP/";?>">  Kembali</a>
              </button>

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
