<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AppNet  <?php echo $title_for_layout ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()."public/super_admin/" ?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."public/super_admin/" ?>bootstrap/css/flash.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()."public/super_admin/" ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."public/super_admin/" ?>dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo base_url()."public/super_admin/" ?>plugins/datatables/dataTables.bootstrap.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."public/super_admin/" ?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."public/super_admin/" ?>dist/css/main.css">
  <link rel="stylesheet" href="//frontend.reklamor.com/fancybox/jquery.fancybox.css" media="screen">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."public/super_admin/" ?>plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url()."public/super_admin/" ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url()."public/super_admin/" ?>bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url()."public/super_admin/" ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91980341-1', 'auto');
  ga('send', 'pageview');

  </script>
  <style media="screen">
  .loading{
    background-color:rgba(255, 255, 255, 0.8);
    position: fixed;
    top: 0 !important;
    bottom:0 !important;
    left: 0 !important;
    right: 0 !important;
    width: 100%;
    height: 100vh;
    z-index: 99999999999999999999;
    display: none !important;
  }
  .loading img{ width: 44px}
  .center-content{
    display: -moz-flex!important;
    display: -webkit-flex!important;
    display: -ms-flex!important;
    display: flex!important;
    -moz-align-items: center;
    -webkit-align-items: center;
    -ms-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
  }
  </style>
  <script type="text/javascript">
  function loading() {
    $('#loading').addClass('center-content');
    $('#loading').show();

  }
  </script>
</head>
<body class="hold-transition <?php echo $this->session->userdata('color_panel'); ?> sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="<?php echo base_url()."admin/" ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>PP</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="<?php echo base_url()."public/web/imagenes/logo.svg" ?>" width="120" height="50" alt=""></span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url()."public/admin/img_user/".$this->session->userdata('img_user'); ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><strong><?php echo $this->session->userdata('username'); ?></strong></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url()."public/admin/img_user/".$this->session->userdata('img_user'); ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $this->session->userdata('username'); ?>
                    <small>Miembro desde <?php echo $this->session->userdata('fecha_creacion'); ?></small>
                  </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?= base_url()."admin"?>" class="btn btn-success btn-flat">Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url()."admin/login/logout"?>" class="btn btn-danger btn-flat">Salir</a>
                  </div>
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
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url()."public/admin/img_user/".$this->session->userdata('img_user'); ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $this->session->userdata('username') ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php  $uri_segment = $this->uri->segment(2)."/".$this->uri->segment(3);
        $uri = $this->uri->segment(2);?>

        <ul class="sidebar-menu">
          <li class="header text-center">Menu</li>
          <li class="<?php if($uri ==''){echo 'active';}?> treeview">
            <a href="<?php echo base_url()."admin"?>">
              <i class="fa fa-home"></i>
              <span>Inicio</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          </li>
          <li class="<?php if($uri =='config'){echo 'active';}?> treeview">
            <a href="<?php echo base_url()."admin/config" ?>">
              <i class="fa fa-home"></i>
              <span>Config Sucursales</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          </li>


        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content">

        <?php if ($this->session->flashdata('error')): ?>
          <?php echo $this->session->flashdata('error'); ?>
        <?php endif; ?>
        <?php if ($this->session->flashdata('success')): ?>
          <?php echo $this->session->flashdata('success'); ?>
        <?php endif; ?>
        <?php echo $content_for_layout; ?>

      </section>

    </div>
    <!-- /.content-wrapper -->


  </div>
  <!-- ./wrapper -->

  <div class="loading" id="loading">
    <img  src="https://www.electroventas.cl/public/web/svg/spin.svg" alt="">
  </div>

  <!-- FastClick -->
  <script src="<?php echo base_url()."public/super_admin/" ?>plugins/fastclick/fastclick.js"></script>
  <script src="<?php echo base_url()."public/super_admin/" ?>plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url()."public/super_admin/" ?>plugins/datatables/dataTables.bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="<?php echo base_url()."public/super_admin/" ?>plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url()."public/super_admin/" ?>dist/js/app.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url()."public/super_admin/" ?>plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url()."public/super_admin/" ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url()."public/super_admin/" ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="<?php echo base_url()."public/super_admin/" ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="<?php echo base_url()."public/super_admin/" ?>plugins/chartjs/Chart.min.js"></script>
  <!-- bootstrap color picker -->
  <script src="<?php echo base_url()."public/super_admin/" ?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url()."public/super_admin/" ?>jquery.rut.js"></script>
  <script src="<?php echo base_url()."public/super_admin/" ?>pace.js"></script>
  <script src="<?php echo base_url()."public/super_admin/" ?>bootstrap-notify.js"></script>
  <script src="<?php echo base_url()."public/super_admin/" ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

  <script>

  $(function () {

    paceOptions = {
      // Disable the 'elements' source
      elements: false,

      // Only show the progress on regular and ajax-y page navigation,
      // not every request
      restartOnRequestAfter: false
    }
    $("#example1").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
    $(".my-colorpicker2").colorpicker();
    $("input#rut").rut({
      formatOn: 'keyup',
      minimumLength: 8, // validar largo mínimo; default: 2
      validateOn: 'change' // si no se quiere validar, pasar null
    });
    $("input#rut").rut().on('rutInvalido', function(e) {
      alert("El rut " + $(this).val() + " es inválido");
    });
    $(".textarea").wysihtml5({
      "font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
      "emphasis": true, //Italics, bold, etc. Default true
      "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
      "html": false, //Button which allows you to edit the generated HTML. Default false
      "link": false, //Button to insert a link. Default true
      "image": false, //Button to insert an image. Default true,
      "color": false //Button to change color of font
    });
  });
  </script>
</body>
</html>
