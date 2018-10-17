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
<li   class="active">
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
    Update Data Pinjaman
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    <li>pengajuan</li>
    <li class="active">form update simpanan</li>
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

      <!--awal-->


      <div class="col-md-6 col-sm-6">
        <div class="box box-danger">
          <div class="box-header with-border">
            <div class="warp-isi">
              
              <h4>Pinjaman</h4>
              <h4>Update terakhir angsuran ke - <strong> <?php echo $data[0]['angsuranke']?> </strong> dari <strong> <?php echo $data[0]['lama']?> </strong></h4>
              <h4> inni <?php echo $data[0]['idPinjaman']; ?> </h4>
              <br>  
              <p>Pilihan angsuran yang dilakukan anggota   </p>
              <select id = "ddlPassport" onchange = "ShowHideDiv()">
                <option >-</option>
                <option value="Y">Rutin</option>            
                <option value="T">Tutup Buku/ Telat</option>
              </select>
              <hr />
            </div>            
          </div>
        </div>
      </div>
      <div  id="div1" class="col-sm-6" style="display: none">
        <div class="box box-danger">
          <div class="box-header with-border">
            <div class="warp-isi">
              <h4>Pembayaran Rutin</h4>
              <h5>Angsuran sebesar <?php echo $data[0]['potongan']?></h5>
              <form action="<?php echo base_url()."index.php/Ctrl_pinjamanP/setoranRutin/".$data[0]['idPinjaman']?>" method="POST"  >
              <div class="form-group">
                <label class="control-label">Tanggal pengajuan</label>
                <div>
                  <input type="date" name="tgl" class="form-control"  required>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-round-lg ">Konfirmasi</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div  id="div2" class="col-sm-6" style="display: none">
        <div class="box box-danger">
          <div class="box-header with-border">
            <div class="warp-isi">
              <h4>Pembayaran Tutup Pinjaman atau Telat</h4>
              <h5>Angsuran dengan sisa sebesar <?php 
              $sisa = $data[0]['pinjaman'] - $data[0]['dibayar'];
              echo $sisa ?></h5>
              <form action="<?php echo base_url()."index.php/Ctrl_pinjamanP/setoranManual/".$data[0]['idPinjaman']?>" method="POST"  >
              <div class="form-group">
                <label class="control-label">Tanggal pengajuan</label>
                <div>
                  <input type="date" name="tgl" class="form-control"  required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Jumlah</label>
                <div>
                  <input type="number" name="jumlah" class="form-control"  required>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-round-lg ">Konfirmasi</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        
      </div>

    </div>
  </div>
    <button type="button" class="btn bg-olive margin">
                <span class='fa fa-arrow-circle-left'></span><a href="<?php echo base_url()."index.php/Ctrl_pinjamanP/";?>">  Kembali</a>
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
  <script type="text/javascript">
    function ShowHideDiv() {
      var ddlPassport = document.getElementById("ddlPassport");
      var div1 = document.getElementById("div1");
      var div2 = document.getElementById("div2");
      div1.style.display = ddlPassport.value == "Y" ? "block" : "none";
      div2.style.display = ddlPassport.value == "T" ? "block" : "none";
    }
    function goBack() {
    window.history.back();
    }
  </script>
</body>
</html>
