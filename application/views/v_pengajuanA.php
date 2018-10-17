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
<li class="active">
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
 <section class="content-header">
  <h1>
    Pengajuan Pinjaman
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    <li class="active">pengajuan</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-sm-12">
      <?php if ($this->session->has_userdata('sukses')) { ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('sukses'); ?>
      </div>
      <?php } else if ($this->session->has_userdata('error')) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $this->session->flashdata('error'); ?>
      </div>
      <?php }  ?>

      <?php 
      switch ($status) {
        case '1': ?>
        <div class="alert alert-info">
          <strong>Permohonan diproses</strong> Permohonan pinjaman anda sedang dalam proses.
          <?php 
          break;
          case '2': ?>
          <div class="alert alert-success">
            <strong>Permohonan diterima</strong> Selamat permohonan pinjaman anda diterima mohon segera lengkapi persyaratan. 
          </div>
          <?php 
          break;
          case '3': ?>

          <div class="alert alert-danger">
            <strong>Permohonan ditolak</strong> Mohon maaf permohonan pinjaman anda tidak disetujui.
          </div>
          <?php 
          break;
          default: ?>

          <div class="alert alert-warning">
            Anda tidak memiliki permohonan pinjaman
          </div>
          <?php 
          break;
        }
        ?>

      </div>
      <div class="col-md-8 col-sm-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <div class="warp-isi">
              <div> <h4><strong> Minimal dan Maksimal Pinjaman</strong></h4></div>
              <table>
                <tr style="margin:20px 0px;">
                  <td>Minimal</td>
                  <td>:</td>
                  <td style="text-align: right;">1.000.000</td>
                </tr>
                <tr style="margin: 10px 0px;">
                  <td style="width: 100px;">Maksimal</td>
                  <td style="width: 20px;">:</td>
                  <td style="text-align: right;"><?php 
                  echo number_format( $max, 0 , '' , '.' );
                  ?></td>
                </tr>
              </table>
              <br>
              <p style="text-align: justify;">Nilai <strong><i> minimal</i></strong> adalah besaran pinjaman yang dilayani oleh unit simpan pinjam. Sedangkan nilai <strong><i> maksimal</i></strong> merupakan besaran paling tinggi yang dapat dilayai berdasarkan peraturan khusu yang telah disepakati yaitu sebesar 10 kali dari simpanan anggota.</p>
            </div>
          </div>            
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="box box-success">
          <div class="box-header with-border">

           <div class="warp-isi">
            <div> <h4><strong> Estimasi Pinjaman</strong></h4></div>
            <table>
              <tr>
                <td style="width: 120px; margin-bottom: 20px;"> <p>Besar Pinjaman</p></td>
                <td><input name="isi" id="pinjaman" type="number" min="1000000" max="<?php 
                  echo $max;
                  ?>" step="100000" ></td>
                </tr>
                <tr class="tb-tr">
                  <td><p>Lama (bulan)</p></td>
                  <td><input name="isi" id="lama" type="number" min="1" max="60" step="1" "></td>
                  <td><a class="btn btn-block btn-default margin" onclick="hitungEstimasi()"> Hitung</a></td>
                </tr>
                <tr>
                  <td><p>Cicilan Bulanan</p></td>
                  <td><p  id="hasil"></p></td>
                </tr>
              </table>
            </div>
        </div>            
      </div>
    </div>
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <div class="col-md-6">
            <div class="warp-isi">
             <div> <h4><strong>Pengajuan Pinjaman </strong>
             </h4></div>
             <div>
              <p>Berikut ini merupakan peraturan dalam pengajuan pinjaman :</p>
              <ol>
                <li>Setidaknya menjadi anggota 3 (tiga) bulan menjadi anggota</li>
                <li>Besar pinjaman maksimal 10 kali jumlah simpanan</li>
                <li>Masa angsuran maksimal 60 kali</li>
                <li>Batas pengajuan maksimal tanggal 15 pada tiap bulannya</li>
                <li>Keputusan peinjaman berdasarkan rapat pengurus</li>
                <li>Hasil pengajuan dapat dilihat pada tanggal 20 tiap bulannya</li>
              </ol>
            </div>
            <p class="peringatan"><strong>
              <?php 
              if ($min != 1) {
                echo "Anda belum memenuhi syarat 3 bulan menjadi anggota";
              } else{
                echo " ";
              }
              ?>

            </strong></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="warp-isi"> 
            <div> <h4><strong>Alur Pengajuan </strong>
            </h4></div>
            <div>
              <p>Berikut ini merupakan alur dalam pengajuan pinjaman :</p>
              <ol>
                <li>Anggota dapat melihat estimasi pinjaman yang akan diajukan</li>
                <li>Mengisi formulir online</li>
                <li>Menunggu hasil pengajuan</li>
                <li>Mencetak formulir pengajuan dan diisi sesuai dengan pengajuan yang disetujui</li>
                <li>Meminta tanda tanggan ketua kelompok</li>
                <li>Mendatangi kantor KPRI untuk verifikasi dan proses pencairan</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="col-sm-12 warp-isi">
          <?php if ($status ==0 ) { ?>
          <a class="btn btn-primary" href="<?php echo base_url()."index.php/Ctrl_pengajuanA/form/".$max;?>" style="height:30px; font-size:12px" data-toggle="modal" data-target="#peringatan"><span class="fa fa-pencil-square-o"></span> Isi Formulir Online  </a>
          <?php } ?>
          

          <a class="btn btn-danger" href="<?php echo base_url()."index.php/Ctrl_pengajuanA/download";?>" style="height:30px; font-size:12px" data-toggle="modal" data-target="#peringatan"><span class="fa fa-download"></span> Download Formulir  </a>
          <?php if ($status >=1) { ?>
          <a class="btn btn-warning" href="<?php echo base_url()."index.php/Ctrl_pengajuanA/detailPengajuan/".$idPengajuan;?>" onclick="myFunction() style="height:30px; font-size:12px" data-toggle="modal" data-target="#peringatan"><span  class="fa fa-info-circle"></span> Detail Pengajuan</a>
          <?php }
          ?>
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
  
  <script>
  function  hitungEstimasi(){
    var pinjaman = document.getElementById('pinjaman').value;
    var lama = document.getElementById('lama').value;
    var bunga = 0;
    if (lama <= 5) {
      bunga = 0.5;
    } else if (lama <=10) {
      bunga = 0.75;
    } else if (lama <= 20) {
      bunga = 1;
    } else if (lama <= 30) {
      bunga = 1.25;
    } else{
      bunga = 1.5;
    }
    var aa = 0;
    var bb = pinjaman*(bunga/100);
    var cc = parseInt(pinjaman/lama) + parseInt(bb);

    aa = Math.ceil(cc);
    if (pinjaman >0) {
      document.getElementById('hasil').innerHTML = aa.format(0, 3, '.', ',') +"<br> bunga sebesar "+bunga;
    } else{
      document.getElementById('hasil').innerHTML = "Input tidak valid! ";
    }
    
  }
  Number.prototype.format = function(n, x, s, c) {
    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
        num = this.toFixed(Math.max(0, ~~n));

    return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
  };
  
</script>

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/dist/js/jquery.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/vendor/js/bootstrap.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.js"></script>


</body>
</html>
