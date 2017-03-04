<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title><?php echo $sucursal->sucursal ?></title>

  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_2/" ?>css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_2/" ?>css/font-awesome.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_2/" ?>css/style.css" media="screen">

  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_2/" ?>css/animate.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_2/" ?>css/slick.css" media="screen">
  <!-- aqui cargamos las tipografias desde Google -->
  <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
  <style>
  h1{ max-width: 700px; text-align: center;}
  /*Asignamos con css las tipografias colores y tamaños correspondientes a los textos*/
  h1{font-family: 'Exo 2', sans-serif; font-size: 60px; color:#fff}
  .price{ font-size: 46px; color: #f90; }

  <?php $i=0; foreach ($slides as $slide):  ?>
    .<?php echo "titulo_props".$i ?>{
      <?php echo "color: ".$slide->color_titulo.";"; ?>
      font-size: <?php echo $slide->size_titulo; ?>px;
    }
    .<?php echo "precio_props".$i ?>{
      <?php echo "color: ".$slide->color_precio.";"; ?>
      font-size: <?php echo $slide->size_precio; ?>px;
    }
  <?php $i++; endforeach; ?>

  <?php if ($conf->img_fondo == ""): ?>
  <?php $img_fondo = base_url()."public/templates/imagenes/case-b.jpg"; ?>
  <?php else: ?>
  <?php $img_fondo = base_url()."public/sucursales/".$sucursal->ruta."/".$conf->img_fondo; ?>
  <?php endif; ?>
  .fullscreen{ width: 20px; height: 20px; background-image: url('<?php echo base_url()."public/templates/" ?>imagenes/fullscreen.svg'); background-size: 100% auto; position:absolute; bottom: 8px; right: 8px; z-index: 99999900000000000000000000000000000000009; cursor: pointer;}
  .crazy-box{ background-image: url('<?php echo base_url()."public/templates" ?>/imagenes/crazy-box.svg'); padding: 10%; margin-top: -10px; background-repeat: no-repeat; background-position: center; z-index: 9999999!important}
  .template-2 .background-img{
    background-image:
    url('<?php echo $img_fondo ?>');
    background-size: 100%
    auto; height:calc(100vh - 33.3vw)
  }
  .nuevo{position: relative;}
  .nuevo:after{ content:''; position: absolute; top: 10px; right: 10px; width: 18%; height: 18%; background-image: url('<?php echo base_url()."public/templates/" ?>imagenes/nuevo.svg'); background-size: 100% auto; background-repeat: no-repeat;  z-index: 999999999999999999999}
  .title-header{
    <?php echo "color: ".$conf->color_titulo.";"; ?>
    font-size: <?php echo $conf->size_titulo; ?>px;
  }
  </style>
</head>
<body>
  <section class="template-2">
    <div class="background-img center-content">
      <div>
        <?php if ($conf->activa_logo == 1): ?>
          <?php if ($conf->logo != ""): ?>
            <img class="logo logo-center" src="<?php echo base_url()."public/sucursales/".$sucursal->ruta."/".$conf->logo ?>" alt="">
          <?php else: ?>
            <img class="logo logo-center" src="<?php echo base_url()."public/templates/" ?>imagenes/logo-case.png" alt="">
          <?php endif; ?>
        <?php endif; ?>
        <h1 class="title-header"><?php echo $conf->titulo ?></h1>
      </div>
    </div>



    <div class="multiple-items">
      <?php if(!$slides): ?>
        <li class="">
          <img src="<?php echo base_url()."public/templates/" ?>imagenes/case-0.jpg" alt="" width="100%">
          <div class="crazy-box crazy-carrusel">
            <h1 class="price">$5.990</h1>
          </div>
        </li>
        <li class="nuevo">
          <img src="<?php echo base_url()."public/templates/" ?>imagenes/case-1.jpg" alt="" width="100%">
          <div class="crazy-box crazy-carrusel">
            <h1 class="price">$5.990</h1>
          </div>
        </li>
        <li>
          <img src="<?php echo base_url()."public/templates/" ?>imagenes/case-2.jpg" alt="" width="100%">
          <div class="crazy-box crazy-carrusel">
            <h1 class="price">$5.990</h1>
          </div>
        </li>
        <li><img src="<?php echo base_url()."public/templates/" ?>imagenes/case-3.jpg" alt="" width="100%">
          <div class="crazy-box crazy-carrusel">
            <h1 class="price">$5.990</h1>
          </div>
        </li>
        <li class="nuevo">
          <img src="<?php echo base_url()."public/templates/" ?>imagenes/case-5.jpg" alt="" width="100%">
          <div class="crazy-box crazy-carrusel">
            <h1 class="price">$5.990</h1>
          </div>
        </li>
        <li>
          <img src="<?php echo base_url()."public/templates/" ?>imagenes/case-1.jpg" alt="" width="100%">
          <div class="crazy-box crazy-carrusel">
            <h1 class="price">$5.990</h1>
          </div>
        </li>
        <li>
          <img src="<?php echo base_url()."public/templates/" ?>imagenes/case-2.jpg" alt="" width="100%">
          <div class="crazy-box crazy-carrusel">
            <h1 class="price">$5.990</h1>
          </div>
        </li>
        <li class="nuevo">
          <img src="<?php echo base_url()."public/templates/" ?>imagenes/case-0.jpg" alt="" width="100%">
          <div class="crazy-box crazy-carrusel">
            <h1 class="price">$5.990</h1>
          </div>
        </li>
        <li>
          <img src="<?php echo base_url()."public/templates/" ?>imagenes/case-3.jpg" alt="" width="100%">
          <div class="crazy-box crazy-carrusel">
            <h1 class="price">$5.990</h1>
          </div>
        </li>
      <?php else: ?>
        <?php $i = 0; foreach ($slides as  $slide): ?>
          <li class="">
            <img src="<?php echo base_url()."public/sucursales/".$sucursal->ruta."/".$slide->img_slide ?>" alt="" width="100%">
            <div class="crazy-box crazy-carrusel" >
              <?php if ($slide->activa_titulo == 1): ?>
              <p class="title <?= "titulo_props".$i ?>"><?php echo $slide->titulo ?></p>
            <?php endif; ?>
            <?php if ($slide->activa_precio == 1): ?>
              <h1 class="price <?= "precio_props".$i ?>">$ <?php echo number_format($slide->precio,0,',','.'); ?></h1><?php if ($slide->activa_iva==1): ?><h2>+ Iva</h2><?php endif; ?>
              <?php endif; ?>
            </div>
          </li>
        <?php $i++; endforeach; ?>
      <?php endif; ?>
    </div>
  </section>

  <footer>
    <div class="fullscreen" onclick="toggleFullScreen()">
    </footer>


    <input type="hidden" id="id_sucursal" value="<?php echo $sucursal->id ?>">
    <script type="text/javascript" src="<?php echo base_url()."public/templates/basico_2/" ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."public/templates/basico_2/" ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."public/templates/basico_2/" ?>js/wow.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."public/templates/basico_2/" ?>js/slick.min.js"></script>
    <script type="text/javascript">
    function toggleFullScreen() {
      if ((document.fullScreenElement && document.fullScreenElement !== null) ||
      (!document.mozFullScreen && !document.webkitIsFullScreen)) {
        if (document.documentElement.requestFullScreen) {
          document.documentElement.requestFullScreen();
        } else if (document.documentElement.mozRequestFullScreen) {
          document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullScreen) {
          document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        }
      } else {
        if (document.cancelFullScreen) {
          document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
          document.webkitCancelFullScreen();
        }
      }
    }
    $( document ).ready(function() {


      $('.multiple-items').slick({
        infinite: true,
        autoplay: true,
        arrows: false,
        slidesToShow: 3
      });
    });
    new WOW().init();
    function update(){
      let id_sucursal = document.getElementById('id_sucursal').value;
      $.post('<?= base_url()."admin/config/check_changes" ?>',{id_sucursal:id_sucursal},function(data){

        if (data == 1) {
          $.post('<?= base_url()."admin/config/remove_refresh" ?>',{id_sucursal:id_sucursal},function(){
            window.location.reload();
          });
        }
        setTimeout(update, 10000);
      });
    }
    update();

    </script>

  </body>
  </html>
