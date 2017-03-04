<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Appnet - Bienvenido</title>

    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."public/web/" ?>css/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."public/web/" ?>css/font-awesome.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."public/web/" ?>css/animate.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."public/web/" ?>css/jquery.bxslider.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."public/web/" ?>css/style.css" media="screen">
    <link rel="stylesheet" media="(max-width: 768px)" href="<?php echo base_url()."public/web/" ?>css/xs.css" type="text/css">
  </head>
  <body>
    <header class="principal wow">
      <div class="container-fluid">
        <h1 class="text-center"><a href="<?php echo base_url()?>" class="wow fadeInDown" data-wow-delay="0s" data-wow-duration="0.3s"><img src="<?php echo base_url()."public/web/" ?>imagenes/logo.svg" alt=""></a></h1>
      </div>
    </header>

    <section id="home" class="wow fadeIn" data-wow-delay="0s" data-wow-duration="0.5s">
      <div id="carousel" class="carousel slide hidden-xs carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-caption">
            <div class="container">
              <div class="col-sm-6">
                <img class="pantalla wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.5s" src="<?php echo base_url()."public/web/" ?>imagenes/pantalla.svg" alt="">
              </div>
              <div class="col-sm-5">
                <div class="wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="0.7s">
                  <h2>App TV</h2>
                  <p>Gestione publicaciones en las pantallas de su local o stand con un software administrable e intuitivo.</p>
                  <a href="#" class="btn btn-lg btn-appnet" data-toggle="modal" data-target="#myModal">Iniciar Sesión <i class="fa fa-user" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
          <a id="seguir" href="#presentacion" class="scroll wow flash" data-wow-delay="2.5s" data-wow-duration="1s"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
          <div class="item active">
            <img class="imgslide" src="<?php echo base_url()."public/web/" ?>slide/slide.png" alt="...">
          </div>
          <div class="item">
            <img class="imgslide" src="<?php echo base_url()."public/web/" ?>slide/slide.png" alt="...">
          </div>
          <div class="item">
            <img class="imgslide" src="<?php echo base_url()."public/web/" ?>slide/slide.png" alt="...">
          </div>
        </div>
      </div>
    </section>
    <section id="presentacion">
      <div class="head-dos">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-xs-12"><h1><img src="<?php echo base_url()."public/web/" ?>imagenes/logo-b.svg" alt=""></h1></div>
            <div class="col-md-8 col-xs-12">
              <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="<?php echo base_url()."" ?>/#home" class="scroll"><i class="fa fa-home visible-xs" aria-hidden="true"></i> Inicio</a></li>
                <li role="presentation"><a href="<?php echo base_url()."acerca_appnet" ?>"><i class="fa fa-users visible-xs" aria-hidden="true"></i> Acerca de Appnet</a></li>
                <li role="presentation" class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Servicios <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li role="presentation"><a href="Hardware.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i> Hardware</a></li>
                    <li role="presentation"><a href="software.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i> Software</a></li>
                    <li role="presentation"><a href="asesorias.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i> Asesorias</a></li>
                    <li role="presentation"><a href="paginasweb.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i> Diseño Web</a></li>
                    <li role="presentation"><a href="disenografico.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i> Diseño grafico</a></li>
                     <li role="presentation"><a href="hosting.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i> Hosting</a></li>
                    <li role="presentation"><a href="impresiondigital.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i>Impresion Digital</a></li>
                  </ul>
                </li>
                <li role="presentation"><a href="<?php echo base_url()."planes" ?>"><i class="fa fa-comments-o visible-xs" aria-hidden="true"></i> Planes</a></li>
                <li role="presentation"><a href="<?php echo base_url()."contacto" ?>"><i class="fa fa-comments-o visible-xs" aria-hidden="true"></i> Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <article class="presentacion">
        <div class="sub-banner">
          <img class="img-presentacion" src="<?php echo base_url()."public/web/" ?>imagenes/presentacion.svg" alt="">
        </div>
        <div class="container wow fadeInUp"  data-wow-delay="0.8s" data-wow-duration="0.5s">
          <div class="row">
            <div class="col-md-6 columna">
              <h1>Bienvenidos</h1>
              <p>Appnet Limitada esta dichosa de presentar a nuestros clientes todos nuestros productos, servicios y nuestro equipo de trabajo.</p>
              <h4>Nuestra empresa busca implementar tecnología digital marketing en pantallas</h4>
              <p>Nuestra empresa tiene características que unidas entregan un servicio integral las cuales son: venta de pantallas publicitarias, área de diseño grafico, área de diseño web, área desarrollo de software, software de administración de contenidos, asesorías en marketing y desarrollo de proyectos.</p>
              <a href="#caracteristicas" class="btn btn-md btn-appnet scroll">Ver Características</a>
            </div>
            <div class="col-md-5 col-md-offset-1 columna">
              <h3>Arriendo de equipos</h3>
              <p>Ofrecemos el arriendo de  tótem publicitarios para cualquier ocasión, matrimonio,  evento, expo, empresas, promociones, etc.</p>
              <hr>
              <h3>Venta de equipos</h3>
              <p>Como fabricantes podemos vender estos productos sin problema a un valor para mayoristas, para distribuidores, uso personal de empresas o emprendedores de negocio.</p>
              <hr>
              <h3>Desarrollo de proyectos </h3>
              <p>Contamos con un equipo de desarrollo informático, diseñadores gráficos y personal capacitado para enfrentar cualquier idea o proyecto.</p>
            </div>
          </div>
          <a id="seguir" href="#caracteristicas" class="normal scroll wow flash" data-wow-delay="2.5s" data-wow-duration="1s"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
        </div>
      </article>
    </section>
    <section id="caracteristicas" class="wow animated fadeInLeft" data-wow-delay="1s" data-wow-duration="0.5s">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div id="bx-pager">
              <a data-slide-index="0" href=""><img src="<?php echo base_url()."public/web/slide/" ?>senalizacion-digital.jpg" /></a>
              <a data-slide-index="1" href=""><img src="<?php echo base_url()."public/web/slide/" ?>slider3.jpg" /></a>
              <a data-slide-index="2" href=""><img src="<?php echo base_url()."public/web/slide/" ?>slider.jpg" /></a>
            </div>
          </div>
          <div class="col-md-9">
            <ul class="bxslider">
              <li><img src="<?php echo base_url()."public/web/slide/" ?>senalizacion-digital.jpg" title="." /></li>
              <li><img src="<?php echo base_url()."public/web/slide/" ?>slider3.jpg" title="." /></li>
              <li><img src="<?php echo base_url()."public/web/slide/" ?>slider.jpg" title="." /></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <article class="accion-planes">
      <h3><a href="<?php echo base_url()."planes" ?>">Ver Planes</a></h3>
    </article>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6"><a href="#" class="btn btn-md btn-appnet"><i class="fa fa-envelope-o" aria-hidden="true"></i> ventas@appnet.cl</a><a href="#" class="btn btn-md btn-appnet"><i class="fa fa-phone" aria-hidden="true"></i> (+56 9) 4414 8833</a></div>
          <div class="col-md-6"><div class="derechos pull-right">Todos los derechos reservados 2016 <i class="fa fa-copyright" aria-hidden="true"></i></div></div>
        </div>
      </div>
    </footer>

    <footer class="visible-xs footer-xs">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-6">
            <div class="row">
              <a href="tel:+56944148833" class="btn btn-block btn-default"><i class="fa fa-phone" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="row">
              <a href="#" class="btn btn-block btn-default"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user" aria-hidden="true"></i> Iniciar Sesión App TV</h4>
          </div>
          <div class="modal-body">
            <form action="../app/sing_in.php" method='POST'>
              <input type="text" class="form-control" name="user" value="" placeholder="Usuario" required>
              <input type="password" class="form-control" name='pass'value="" placeholder="*****" required>
              <button type="submit" class="btn btn-md btn-appnet" name="button">Ingresar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url()."public/web/" ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."public/web/" ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."public/web/" ?>js/wow.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        new WOW().init();
      $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll > 700) {
          $(".head-dos").addClass("head-fixed");
      }
      });
      $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll<500) {
          $(".principal").removeClass("no");
      }
      });
      $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll < 650) {
        $(".head-dos").removeClass("head-fixed");
      }
      });
      });
    </script>
    <script type="text/javascript" src="<?php echo base_url()."public/web/" ?>js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."public/web/" ?>js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."public/web/" ?>js/parallax.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},2000);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.carousel').carousel({
        pause: false,
      })
      $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        captions: true
      });
    });
  </script>
  </body>
</html>
