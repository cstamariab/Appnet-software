<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title><?php echo $sucursal->sucursal ?></title>

  <link rel="stylesheet" href="<?php echo base_url()."public/templates/video_1" ?>/css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/video_1" ?>/css/font-awesome.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/video_1" ?>/css/style.css" media="screen">

  <link rel="stylesheet" href=".<?php echo base_url()."public/templates/video_1" ?>css/animate.css" media="screen">
  <!-- aqui cargamos las tipografias desde Google -->
  <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
  <style>
  /*Asignamos con css las tipografias colores y tamaños correspondientes a los textos*/
  h1{font-family: 'Caveat Brush', cursive; font-size: 60px;}
  h2{font-family: 'Caveat Brush', cursive;}
  .price{ font-size: 200px; color:#333; margin-top: 10px!important}

  .sushi{ background-image: url('<?php echo base_url()."public/sucursales/".$sucursal->ruta."/".$conf->img_fondo ?>')!important}
  .fullscreen{ width: 20px; height: 20px; background-image: url('<?php echo base_url()."public/templates/" ?>imagenes/fullscreen.svg'); background-size: 100% auto; position:absolute; bottom: 8px; right: 8px; z-index: 99999900000000000000000000000000000000009; cursor: pointer;}
  #video{
    position: relative; width:800px; height: 590px; margin-top: 20px;
    background: #333;
  }




  </style>

</head>
<body>
  <input type="hidden" id="id_sucursal" value="<?php echo $sucursal->id ?>">
  <header>
    <!-- <div class="container-fluid">
    <h1 class="text-right"><a href="#"><img class="logo animated wow fadeInRight" src="<?php echo base_url().'public/templates/default_template_1/' ?>imagenes/logo.jpg" data-wow-duration="1s" data-wow-delay="0s" alt=""></a></h1>
  </div> -->
</header>

<!--
<div class="oferta">
Oferta!
Del mes..
</div>
-->

<section class="template-1 sushi" style="height: 100vh">
  <div class="bg center-content" style="height: 100vh">
    <div>
      <img class="logo logo-center" src="<?php echo base_url()."public/sucursales/".$sucursal->ruta."/".$conf->logo ?>" alt="">
      <?php

      switch ($slides_video->proveedor_video) {
        case '2':
        parse_str( parse_url( $slides_video->link_video, PHP_URL_QUERY ), $my_array_of_vars );
        $link_youtube = $my_array_of_vars['v'];
        echo '<div id="video"><iframe id="ytplayer" type="text/html" width="800" height="590"
        src="https://www.youtube.com/embed/'.$link_youtube.'?autoplay=1&loop=1&playlist='.$link_youtube.'"
        frameborder="0" allowfullscreen/></div>';
        break;
        case '1':
        if(preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/", $slides_video->link_video, $output_array)) {
          $link_vimeo = $output_array[5];
          echo '<div id="video"><iframe frameborder="0" width="800" height="600" src="http://player.vimeo.com/video/'.$link_vimeo.'?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1&amp;loop=1&amp;autopause=0&amp;color=fdea2e"></iframe></div>';
          }
          break;

          default:
          # code...
          break;
        }

        ?>

      </div>
    </div>

    <footer>  <div class="fullscreen" onclick="toggleFullScreen()">Full screen</div></footer>


  </section>



  <script type="text/javascript" src="<?php echo base_url()."public/templates/video_1" ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."public/templates/video_1" ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."public/templates/video_1" ?>/js/wow.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."public/templates/video_1" ?>/js/jquery.youtubebackground.js"></script>

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
    $('.carousel').carousel({
      pause: false,
      autoplay: true,
      interval: 5000,
      number:2,
    })
  });
  new WOW().init();

  function update(){
    let id_sucursal = <?php echo $sucursal->id ?>;
    $.post('<?= base_url()."admin/config/check_changes" ?>',{id_sucursal:id_sucursal},function(data){
      console.log('consultado');
      if (data == 1) {
        $.post('<?= base_url()."admin/config/remove_refresh" ?>',{id_sucursal:id_sucursal},function(){
          window.location.reload();
        });
      }
      setTimeout(update, 1000);
    });
  }
  update();

  </script>

</body>
</html>
