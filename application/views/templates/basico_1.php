<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title><?php echo $sucursal->sucursal ?></title>

  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_1/" ?>css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_1/" ?>css/font-awesome.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_1/" ?>css/style.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_1/" ?>css/animate.css" media="screen">

  <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
  <?php $fonts = $this->font_model->get_fonts_activas(); ?>
  <?php foreach ($fonts as  $value): ?>
    <?php echo "<".$value->link_html.">"; ?>
  <?php endforeach; ?>

  <style>


  h1, h2{font-family: 'Caveat Brush', cursive;}

  .template-1 .textos{ padding: 2vw; width: 40%; display: table-cell;
    vertical-align: middle;}


    /* Foreach para crear clases dinamicas y poder cargar img de fondo como clase*/
    <?php $i=0; foreach ($slides as $slide): ?>
      .template-1  <?php echo ".caja_desc".$i ?>{
        background-color: <?php echo $slide->color_marco_desc ?>;
      }
      <?php $conf_fonts =  $this->config_model->get_conf_fonts_text($slide->id); ?>

      .<?php echo "font_titulo".$i ?>{
        <?php echo $conf_fonts->prop_titulo; ?>
      }
      .<?php echo "font_desc".$i ?>{
        <?php echo $conf_fonts->prop_desc; ?>
      }
      .<?php echo "font_precio".$i ?>{
        <?php echo $conf_fonts->prop_precio; ?>
      }

    .<?php echo "clase_".$i ?>{
      background-image: url('<?php echo base_url()."public/sucursales/".$sucursal->ruta."/".$slide->img_fondo ?>')!important;
    }
    .<?php echo "titulo_props".$i ?>{
      <?php echo "color: ".$slide->color_titulo.";"; ?>
      font-size: <?php echo $slide->size_titulo; ?>vw;
    }
    .<?php echo "desc_props".$i ?>{
      <?php echo "color: ".$slide->color_desc.";"; ?>
      font-size: <?php echo $slide->size_desc; ?>vw;

    }
    .<?php echo "precio_props".$i ?>{
      <?php echo "color: ".$slide->color_precio.";"; ?>
      font-size: <?php echo $slide->size_precio; ?>vw;
    }
    @media only screen

    and (orientation : portrait) {
      .<?php echo "precio_props".$i ?>{
        font-size: <?php echo $slide->size_precio; ?>vh;

        line-height: <?php echo $slide->size_precio; ?>vh;
      }

      .<?php echo "desc_props".$i ?>{
        <?php echo "color: ".$slide->color_desc.";"; ?>
        font-size: <?php echo $slide->size_desc; ?>vh;


        line-height: <?php echo $slide->size_desc; ?>vh;
      }

      .<?php echo "titulo_props".$i ?>{
        <?php echo "color: ".$slide->color_titulo.";"; ?>
        font-size: <?php echo $slide->size_titulo; ?>vh;
        line-height: <?php echo $slide->size_titulo; ?>vh;
      }

    }
    <?php $i++; endforeach; ?>

    /*Validacion de logo*/
    <?php if ($conf->logo == ""):
      $logo = '../imagenes/logo-sushi.png';
    else:
      $logo = $conf->logo;
    endif; ?>

    /*Estilos para titulo , Descripcion y Precio */


    /*Validacion de logo*/
    .sushi {background-image: url('<?php echo base_url()."public/templates/" ?>imagenes/sushi-bg2.jpg')!important; }
    .sushi23 {background-image: url('<?php echo base_url()."public/templates/" ?>imagenes/sushi-bg.jpg')!important; }
    <?php if ($conf->activa_logo == 1): ?>
    .logo-sushi{ background-image: url('<?php echo $logo ?>'); background-size: 100% auto; width: 300px; height: 150px; top: 30px;position: absolute; left: 50%; margin-left: -150px; background-repeat:  no-repeat;  z-index: 9999}
    <?php endif; ?>

    .fullscreen{ width: 20px; height: 20px; background-image: url('<?php echo base_url()."public/templates/" ?>imagenes/fullscreen.svg'); background-size: 100% auto; position:absolute; bottom: 8px; right: 8px; z-index: 99999900000000000000000000000000000000009; cursor: pointer;}
    </style>
  </head>
  <body>

    <!--
    <div class="oferta">
    Oferta!
    Del mes..
  </div>
-->

<!-- VALIDACION SI ES QUE NO HAY SLIDES CARGADOS DESDE EL USUARIO
SE CARGA UN TEMPLATE CON SLIDES STATICOS CONTINUAR HASTA EL ELSE  -->

<section class="template-1">
  <div id="slider" class="carousel carousel-fade" data-ride="carousel">
    <?php if ($conf->activa_logo == 1): ?>
      <img class="logo logo-center <?= $conf->pos_logo ?>" src="<?php echo base_url()."public/sucursales/".$sucursal->ruta."/".$logo ?>" alt="">
    <?php endif; ?>
    <div class="carousel-inner" role="listbox">
      <?php if (!$slides): ?>

        <div class="item slide active sushi">
          <div class="container">
            <div class="content">
              <div class="col col-4">
                <h1 class="animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Tabla básica<br>19 piezas</h1>
                <h1 class="price animated wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="1.5s">$6.990</h1>

              </div>
              <div class="col col-8">
                <img src="<?php echo base_url()."public/templates/" ?>imagenes/sushi.png" class="animated wow fadeInLeft" data-wow-duration="2.5s" data-wow-delay="0.5s" alt="" >
              </div>

            </div>
          </div>
        </div>
        <div class="item slide sushi23">
          <div class="container">
            <div class="content">
              <div class="col col-4">

                <h1 class="animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Tabla mediana<br>24 piezas</h1>

                <h1 class="price animated wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="1.5s">$8.990</h1>
              </div>
              <div class="col col-8">
                <img src="<?php echo base_url()."public/templates/" ?>imagenes/sushi2.png" class="animated wow fadeInLeft" data-wow-duration="2.5s" data-wow-delay="0.5s" alt="" >
              </div>

            </div>
          </div>
        </div>
        <!-- FIN TEMPLATE ESTATICO  -->
      <?php else: ?>
        <!-- TEMPLATE DINAMICO  -->
        <div class="carousel-inner" role="listbox">
          <?php $i=0; foreach ($slides as $slide): ?>

              <?php if ($i == 0): ?>
                <?php $activo ="active"; ?>
              <?php endif; ?>
              <div class="item slide <?= $activo ?>">
                <div class="bg <?= "clase_".$i ?> animated wow pulse" data-wow-duration="10s"></div>
                <div class="container">
                  <div class="content">
                    <?php $marco=""; if ($slide->activa_marco_desc == 1):
                      $marco = "caja_desc".$i;
                    endif; ?>
                    <div class="col textos <?= $marco ?>">
                      <h2 class="animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0">
                        <?php if ($slide->activa_titulo == 1): ?>
                          <div class="<?= "titulo_props".$i  ?> <?= "font_titulo".$i?>" style="line-height:74%; margin-bottom:25px"><?= $slide->titulo ?></div>
                        <?php endif; ?>
                      </h2>
                      <h3 class="animated wow fadeInLeft" data-wow-duration="1s">
                        <?php if ($slide->activa_descripcion == 1): ?>
                          <div class="<?= "desc_props".$i ?> <?= "font_desc".$i?>" style="line-height:90%; margin-bottom:15px"><?= $slide->descripcion ?></div>
                        <?php endif; ?>
                      </h3>

                      <h1 class="<?= "precio_props".$i ?> <?= "font_precio".$i?> animated wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="0" style="line-height:90%; margin-bottom:25px">
                        <?php if ($slide->activa_precio == 1): ?> $<?php echo number_format($slide->precio,0,',','.');endif; ?>
                        </h1><?php if ($slide->activa_iva==1) {echo "<h2>+ Iva</h2>";}?>
                      </div>
                      <?php if ($slide->activa_img == 1): ?>
                        <div class="col imagen">
                          <img src="<?php echo base_url()."public/sucursales/".$sucursal->ruta."/".$slide->img_slide ?>" class="animated wow fadeInRight" data-wow-duration="2s" data-wow-delay="0" alt="" >
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

              <?php $activo=''; $i++; endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <footer>
      <div class="fullscreen" onclick="toggleFullScreen()">

      </div>
    </footer>
    <input type="hidden" id="id_sucursal" value="<?= $sucursal->id?>">
    <script type="text/javascript" src="<?php echo base_url()."public/templates/basico_1/" ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."public/templates/basico_1/" ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."public/templates/basico_1/" ?>js/wow.js"></script>
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
        interval: 7000,
        number:1,
      })
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
