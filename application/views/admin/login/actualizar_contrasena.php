<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminAppnet| Cambiar Contraseña</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->

  <link rel="stylesheet" href="<?php echo base_url()."public/admin" ?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."public/super_admin" ?>/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()."public/super_admin" ?>/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url()."admin"?>"><img src="<?php echo base_url()."public/web/imagenes/logo.svg" ?>" height="100" alt=""></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Cambiar Contraseña</p>

    <form action="" method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" value="<?php echo $email ?>" readonly="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <?php echo form_error('password', '<div class="label label-danger ">', '</div>'); ?>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password2" placeholder="Confirme Contraseña" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <?php echo form_error('password2', '<div class="label label-danger ">', '</div>'); ?>
      </div>
      <?php if ($this->session->flashdata('error')): ?>
          <p class="login-box-msg">  <?php echo $this->session->flashdata('error') ?></p>
      <?php endif; ?>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12 ">
          <button type="submit" class="btn btn-primary btn-block  ">Actualizar contraseña</button>
        </div>
        <br><br>
        </form>

        <!-- /.col -->
      </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."public/super_admin" ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."public/super_admin" ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()."public/super_admin" ?>/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
