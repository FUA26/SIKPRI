<!DOCTYPE html>
<html >

<head>

    <link rel="icon"  type="image/png" href="<?php echo base_url()?>assets/images/logo.png">
    <title>SB Admin 2 - Bootstrap Admin Theme</title>
   
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
   

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/style.css?v=1.0">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body id="login-page">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading  login-judul">
                        <h4>Sistem Informasi Simpan Pinjam</h4>
                        <h5>KPRI GURU Sumbermanjing Wetan</h5>
                    </div>
                    <div class="panel-body">
                       <form action="<?php echo base_url()."index.php/Ctrl_login/login";?>" method="post" onsubmit="return Validate()" name="vform">
                            <div class="form-group mb-lg">
                                <label>Username</label>
                                <div class="input-group input-group-icon">
                                    <input name="username" type="text" class="form-control input-lg" id="username" required autofocus>
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-user"></i>
                                        </span>
                                 
                                    </span>
                                </div>
                                
                            </div>

                            <div class="form-group mb-lg">
                                <div class="clearfix">
                                    <label class="pull-left">Password</label>
                                    
                                </div>
                                <div class="input-group input-group-icon">
                                    <input name="password" type="password" class="form-control input-lg" id="password" required>
                                    <span class="input-group-addon"> 
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>

                                    </span>
                                    
                                </div>
                                
                            </div>
                            <div class="peringatan"> 
                            <?php 
                            echo $this->session->flashdata("error");
                            ?>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                <input type="submit" name="bntSubmit" value="Login" class="btn btn-primary btn-round-lg btn-lg btn-login">  
                                </div>
                                
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
