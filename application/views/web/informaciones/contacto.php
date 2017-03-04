<!DOCTYPE html>
<html lang="es">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

    <title>Appnet - Contacto</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="<?php echo base_url()."public/web/" ?>css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()."public/web/" ?>css/font-awesome.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()."public/web/" ?>css/animate.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()."public/web/" ?>css/jquery.bxslider.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()."public/web/" ?>css/style.css" media="screen">
    <link rel="stylesheet" media="(max-width: 768px)" href="<?php echo base_url()."public/web/" ?>css/xs.css" type="text/css">
  </head>
  <body class="contacto">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user" aria-hidden="true"></i> Iniciar Sesión</h4>
          </div>
          <div class="modal-body">
            <form action="">
              <input type="text" class="form-control" value="" placeholder="Usuario" required>
              <input type="password" class="form-control" value="" placeholder="*****" required>
              <button type="submit" class="btn btn-md btn-appnet" name="button">Ingresar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <section id="presentacion">
      <div class="head-dos">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-xs-12"><h1><img src="<?php echo base_url()."public/web/" ?>imagenes/logo-b.svg" alt=""></h1></div>
            <div class="col-md-8 col-xs-12">
              <ul class="nav nav-pills">
                <li role="presentation"><a href="<?php echo base_url()?>"><i class="fa fa-home visible-xs" aria-hidden="true"></i> Inicio</a></li>
                <li role="presentation"><a href="<?php echo base_url()."acerca_appnet" ?>"><i class="fa fa-users visible-xs" aria-hidden="true"></i> Acerca de Appnet</a></li>
                <li role="presentation" class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Servicios <span class="caret"></span>
                  </a>
                <ul class="dropdown-menu">
                    <li role="presentation"><a href="Hardware.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i> Hardware</a></li>
                    <li role="presentation"><a href="software.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i> Software</a></li>
                    <li role="presentation"><a href="asesorias.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i> Asesorias</a></li>
                    <li role="presentation"><a href="paginasweb.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i> Dise�0�9o Web</a></li>
                    <li role="presentation"><a href="disenografico.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i> Dise�0�9o grafico</a></li>
                     <li role="presentation"><a href="hosting.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i> Hosting</a></li>
                    <li role="presentation"><a href="impresiondigital.html"><i class="fa fa-file-code-o visible-xs" aria-hidden="true"></i>Impresion Digital</a></li>
                  </ul>
                <li role="presentation"><a href="<?php echo base_url()."planes" ?>"><i class="fa fa-comments-o visible-xs" aria-hidden="true"></i> Planes</a></li>
                <li role="presentation" class="active"><a href="<?php echo base_url()."contacto" ?>"><i class="fa fa-comments-o visible-xs" aria-hidden="true"></i> Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <article class="presentacion">
        <img class="wow fadeIn" data-wow-delay="0s" data-wow-duration="0.5s" src="<?php echo base_url()."public/web/" ?>imagenes/presentacion.png" alt="">
        <div class="container wow fadeIn"  data-wow-delay="0.5s" data-wow-duration="0.5s">
          <div class="titular">
            <div class="row">
              <div class="col-md-6 columna"><h1>Contacto</h1></div>
              <div class="col-md-5 col-md-offset-1 columna">
                <ol class="breadcrumb">
                  <li><a href="index.html">Inicio</a></li>
                  <li class="active">Contacto</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 columna">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque optio nobis tenetur, eum veniam quod omnis laudantium nemo illum a atque enim rerum numquam laborum architecto blanditiis perspiciatis, aperiam quasi?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque optio nobis tenetur, eum veniam quod omnis laudantium nemo illum a atque enim rerum.</p>
            </div>
            <div class="col-md-5 col-md-offset-1 columna">
              <form action="">
                <input type="text" class="form-control" placeholder="Nombre completo" required>
                <br>
                <input type="text" class="form-control" placeholder="Empresa o Particular" required>
                <br>
                <input type="text" class="form-control" placeholder="Teléfono" required>
                <br>
                <input type="email" class="form-control" placeholder="ejemplo@correo.cl" required>
                <br>
                <input type="text" class="form-control" placeholder="Asunto" required>
                <br>
                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Su mensaje" required></textarea>

                <br>
                <button type="submit" class="btn btn-appnet" name="button">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </article>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6"><a href="#" class="btn btn-md btn-appnet"><i class="fa fa-envelope-o" aria-hidden="true"></i> correo@correo.cl</a><a href="#" class="btn btn-md btn-appnet"><i class="fa fa-phone" aria-hidden="true"></i> (+56 9) 9453 98 45</a></div>
          <div class="col-md-6"><div class="derechos pull-right">Todos los derechos reservados 2016 <i class="fa fa-copyright" aria-hidden="true"></i></div></div>
        </div>
      </div>
    </footer>

    <footer class="visible-xs footer-xs">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-6">
            <div class="row">
              <a href="tel:+56978577553" class="btn btn-block btn-default"><i class="fa fa-phone" aria-hidden="true"></i></a>
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

    <script type="text/javascript" src="<?php echo base_url()."public/web/" ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."public/web/" ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."public/web/" ?>js/wow.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        new WOW().init();
      $(".principal").addClass("no");
      $(".head-dos").addClass("head-fixed");
      });
    </script>
    <script type="text/javascript" src="<?php echo base_url()."public/web/" ?>js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."public/web/" ?>js/jquery.bxslider.js"></script>
    <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
  <script type="text/javascript">
		$(document).ready(function() {
      $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        captions: true
      });
		});
	</script>
  </body>
</html>
