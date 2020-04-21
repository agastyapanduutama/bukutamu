<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <title>LEMBAGA ILMU PENGETAHUAN INDONESIA</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/plugins/iCheck/square/blue.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
      .bgna{
        /*background-color: #eb6b34 !important;*/
        background-image: url('<?= base_url('assets/gambar/background.jpg') ?>') !important;
        z-index: -10;
        position: relative;      
        height: 250px;
      }
    </style>
  </head>

<body onload="startTime()">
  <div class="bgna" style="color: white" >
    <nav class="navbar navbar-expand-lg container " >
    </nav>
  </div>

<div style="margin-top: -200px">
<body class="hold-transition login-page" >
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="rounded-lg login-box-body shadow-lg" >
    <h2><b>PDDI </b>LIPI</h2>
    <p>Selamat datang silakan masukan username dan password</p>


      <?php 

      echo validation_errors('<div class="alert alert-warning">','</div>');

      if ($this->session->flashdata('warning')) {
        echo '<div class="alert alert-warning">';
        echo $this->session->flashdata('warning');
        echo '</div>';
      }

      if ($this->session->flashdata('success')) {
        echo '`<div class="alert alert-success">';
        echo $this->session->flashdata('success');
        echo '</div>';
      }

      echo form_open(base_url('login')); ?>

      <div class="form-group has-feedback">
        <input type="text"  name="username" class="rounded-lg form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password"  name="password" class="rounded-lg form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
     
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit"  class="rounded-lg btn btn-success btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    <?= form_close(); ?>

  </div>
  <!-- /.login-box-body -->
</div>

<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= base_url()?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url()?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url()?>assets/admin/plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript">
  
</script>

</body>
</div>
</html>
