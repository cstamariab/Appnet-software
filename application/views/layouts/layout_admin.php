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
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="<?php echo base_url()."super_admin/" ?>" class="logo">
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
                <i class="fa fa-angle-down"></i>
                <span class="hidden-xs">
                  <?php if ($this->session->userdata('id_admin') != ""): ?>
                    <?php echo $this->session->userdata('username'); ?>
                  <?php endif; ?></span>
                </a>
                <ul class="dropdown-menu" style="max-width:30px;">
                  <!-- User image -->

                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer" style="width:100%">
                    <div class="pull-right">
                      <a href="<?php echo base_url().'super_admin/login/logout' ?>" class="btn btn-flat btn-danger">Cerrar Sesion</a>
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


          <!-- sidebar menu: : style can be found in sidebar.less -->
          <?php  $uri_segment = $this->uri->segment(2)."/".$this->uri->segment(3);
          $uri = $this->uri->segment(2);?>
          <ul class="sidebar-menu">
            <li class="header text-center">Menu</li>
            <li class="<?php if($uri =='empresa'){echo 'active';}?> treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Empresas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if($uri_segment =='empresa/nueva'){echo 'active';}?>"><a href="<?php echo base_url()."super_admin/empresa/nueva" ?>"   ><i class="fa fa-circle-o"></i>Crear Empresa</a></li>
                <li class="<?php if($uri_segment =='empresa/listado'){echo 'active';}?>"><a href="<?php echo base_url()."super_admin/empresa/listado" ?>" ><i class="fa fa-circle-o"></i>Listado</a></li>
              </ul>
            </li>
            <li class="<?php if($uri =='sucursal'){echo 'active';}?> treeview">
              <a href="#">
                <i class="fa fa-home"></i>
                <span>Sucursales</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if($uri_segment =='sucursal/nueva'){echo 'active';}?>"><a href="<?php echo base_url()."super_admin/sucursal/nueva" ?>"><i class="fa fa-circle-o"></i>Crear Sucursal</a></li>
                <li class="<?php if($uri_segment =='sucursal/listado'){echo 'active';}?>"><a href="<?php echo base_url()."super_admin/sucursal/listado" ?>"><i class="fa fa-circle-o"></i>Listado</a></li>
              </ul>
            </li>
            <li class="<?php if($uri =='usuarios'){echo 'active';}?> treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Usuarios</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if($uri_segment =='usuarios/nuevo'){echo 'active';}?>"><a href="<?php echo base_url()."super_admin/usuarios/nuevo" ?>"><i class="fa fa-circle-o"></i>Crear Usuario</a></li>
                <li class="<?php if($uri_segment =='usuarios/listado'){echo 'active';}?>"><a href="<?php echo base_url()."super_admin/usuarios/listado" ?>"><i class="fa fa-circle-o"></i>Listado</a></li>
              </ul>
            </li>
            <li class="<?php if($uri =='planes'){echo 'active';}?> treeview">
              <a href="#">
                <i class="fa fa-clone"></i>
                <span>Planes</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if($uri_segment =='planes/nuevo'){echo 'active';}?>"><a href="<?php echo base_url()."super_admin/planes/nuevo" ?>"><i class="fa fa-circle-o"></i>Crear Plan</a></li>
                <li class="<?php if($uri_segment =='planes/listado'){echo 'active';}?>"><a href="<?php echo base_url()."super_admin/planes/listado" ?>"><i class="fa fa-circle-o"></i>Listado</a></li>
              </ul>
            </li>
            <li class="<?php if($uri =='administrador'){echo 'active';}?> treeview">
              <a href="#">
                <i class="fa fa-lock"></i>
                <span>Administradores</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if($uri_segment =='administrador/nuevo'){echo 'active';}?>"><a href="<?php echo base_url()."super_admin/administrador/nuevo" ?>"><i class="fa fa-circle-o"></i>Crear Admininistrador</a></li>
                <li class="<?php if($uri_segment =='administrador/listado'){echo 'active';}?>"><a href="<?php echo base_url()."super_admin/administrador/listado" ?>"><i class="fa fa-circle-o"></i>Listado</a></li>
              </ul>
            </li>
            <li class="<?php if($uri =='fonts'){echo 'active';}?> treeview">
              <a href="#">
                <i class="fa fa-font"></i>
                <span>Fonts</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if($uri_segment =='fonts/nuevo'){echo 'active';}?>"><a href="<?php echo base_url()."super_admin/fonts/nuevo" ?>"><i class="fa fa-circle-o"></i>Crear Font</a></li>
                <li class="<?php if($uri_segment =='fonts/listado'){echo 'active';}?>"><a href="<?php echo base_url()."super_admin/fonts/listado" ?>"><i class="fa fa-circle-o"></i>Listado</a></li>
              </ul>
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

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.1
        </div>
        <strong>Copyright &copy; 2015-2017 Christian Santa Maria B.</strong> All rights
        reserved.
      </footer>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url()."public/super_admin/" ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url()."public/super_admin/" ?>bootstrap/js/bootstrap.min.js"></script>
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
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()."public/super_admin/" ?>jquery.rut.js"></script>
    <script src="<?php echo base_url()."public/super_admin/" ?>pace.js"></script>
    <script src="<?php echo base_url()."public/super_admin/" ?>bootstrap-notify.js"></script>

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
      $("input#rut").rut({
        formatOn: 'keyup',
        minimumLength: 8, // validar largo mínimo; default: 2
        validateOn: 'change' // si no se quiere validar, pasar null
      });
      $("input#rut").rut().on('rutInvalido', function(e) {
        alert("El rut " + $(this).val() + " es inválido");
      });

    });
    </script>
  </body>
  </html>
