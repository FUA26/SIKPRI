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
 <li class="active">
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
    Update Data Simpanan - <?php echo $data[0]['nama']?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    <li>Simpanan</li>
    <li class="active">update simpanan</li>
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


      <div class="col-md-6 col-sm-12">
        <div class="box box-danger">
          <div class="box-header with-border">
            <div class="warp-isi">
              <div> <h4>Setoran</h4>
               <p>Masukkan data berdasarkan jenis setoran yang dilakukan oleh anggota</p></div>
               <br>
               <div class="form-group">
                


                  <div class="form-group">
                    <label class="control-label col-sm-4">Pilihan Jenis Setoran :</label>
                    <div class="col-sm-6">
                      <select id = "pilihanSmp" class="form-control" onchange = "ShowHideDiv()">
                        <option >-</option>
                        <option value="1">Wajib</option>            
                        <option value="2">Gertab</option>
                        <option value="3">THR</option>
                        <option value="4">Manasuka</option>
                        <option value="5">Sisa Hasil Usaha</option>
                      </select>      

                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div id="div1" class="form-group" style="display: none;">
                    <div class="col-sm-9">
                      <p>Simpanan wajib sebesar Rp. 150.000,00</p>
                    </div>                    
                    <div class="col-sm-3">
                      <a href="<?php echo base_url()."index.php/Ctrl_simpananP/addWajib/".$data[0]['idAnggota'];?>" class="btn btn-warning btn-block ">Simpan</a>
                    </div>
                  </div>
                  <div id="div2" class="form-group" style="display: none;">
                    <div class="col-sm-9">
                      <p>Simpanan gerakan menabung sebesar Rp. 30.000,00</p>
                    </div>                    
                    <div class="col-sm-3">
                      <a href="<?php echo base_url()."index.php/Ctrl_simpananP/addGertab/".$data[0]['idAnggota'];?>" class="btn btn-warning btn-block ">Simpan</a>
                    </div>
                  </div>
                  <div id="div3" class="form-group" style="display: none;">
                    <div class="col-sm-9">
                      <p>Simpanan Tabungan Hari Raya sebesar Rp. 200.000,00</p>
                    </div>                    
                    <div class="col-sm-3">
                      <a href="<?php echo base_url()."index.php/Ctrl_simpananP/addThr/".$data[0]['idAnggota'];?>" class="btn btn-warning btn-block ">Simpan</a>
                    </div>
                  </div>
                  <div id="div4" class="form-group" style="display: none;">
                    <form class="form-horizontal" method="POST"  action="<?php echo base_url()."index.php/Ctrl_simpananP/addManasuka/".$data[0]['idAnggota'];?>">
                    <label class="control-label col-sm-5">Manasuka</label>
                    <div class="col-sm-4">
                      <input type="number" name="manasuka" size="12" min="0" class="form-control" >                      
                    </div>
                    <div class="col-sm-3">
                      <button type="submit" class="btn btn-warning btn-block" >Simpan</button>
                    </div>
                    </form>
                  </div> 
                  <div id="div5" class="form-group" style="display: none;">
                    <form class="form-horizontal" method="POST"  action="<?php echo base_url()."index.php/Ctrl_simpananP/addSHU/".$data[0]['idAnggota'];?>">
                    <label class="control-label col-sm-3">Sisa Hasil Usaha</label>
                    <div class="col-sm-5">
                      <input type="number" name="manasuka" size="12" min="0" class="form-control" >                      
                    </div>
                    <div class="col-sm-3">
                      <button type="submit" class="btn btn-warning btn-block" >Simpan</button>
                    </div>
                    </form>
                  </div> 
                  </div>
                  
                  <!-- <div class="form-group">
                    <div class="col-md-offset-10 col-md-2">
                      <button type="submit" class="btn btn-primary btn-round-lg " >Simpan</button>
                    </div>
                  </div> -->
                
                <!-- /.input group -->
              </div>
            </div>




          </div>            
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="box box-danger">
          <div class="box-header with-border">

           <div class="warp-isi">

             <div> <h4>Penarikan</h4>
               <p>Masukkan besaran penarikan yang dilakukan oleh anggota</p></div>
               <br>
               <div class="form-group">
                <form class="form-horizontal" method="POST"  action="<?php echo base_url()."index.php/Ctrl_simpananP/addTarik/".$data[0]['idAnggota'];?>">
                  <div class="form-group">
                    <label class="control-label col-sm-3">Jumlah</label>
                    <div class="col-sm-6">
                      <input type="number" name="jumlah" class="form-control" min="100000" required>
                    </div>
                  </div>

                  <div class="form-group"> 
                    <div class="col-md-offset-10 col-md-2">
                      <button type="submit" class="btn btn-primary btn-round-lg " >Simpan</button>
                    </div>
                  </div>
                </form>
                <!-- /.input group -->
              </div>
            </div>

          </div>            
        </div>
      </div>
        <button type="button" class="btn bg-olive margin">
          <span class='fa fa-arrow-circle-left'></span><a href="<?php echo base_url()."index.php/Ctrl_simpananP/simpanan";?>">  Kembali</a>
        </button>            
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
  <script type="text/javascript">
   function ShowHideDiv() {
    var pilihanSmp = document.getElementById("pilihanSmp");
    var div1 = document.getElementById("div1");
    var div2 = document.getElementById("div2");
    var div3 = document.getElementById("div3");
    var div4 = document.getElementById("div4");
    var div5 = document.getElementById("div5");
    div1.style.display = pilihanSmp.value == "1" ? "block" : "none";
    div2.style.display = pilihanSmp.value == "2" ? "block" : "none";
    div3.style.display = pilihanSmp.value == "3" ? "block" : "none";
    div4.style.display = pilihanSmp.value == "4" ? "block" : "none";
    div5.style.display = pilihanSmp.value == "5" ? "block" : "none";
  }
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
