001<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Puntoapp</title>

  <link rel="stylesheet" href="../css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="../css/font-awesome.css" media="screen">
  <link rel="stylesheet" href="../css/style.css" media="screen">
  <link rel="stylesheet" href="../css/animate.css" media="screen">
  <link rel="stylesheet" href="../css/slick.css" media="screen">
  <!-- aqui cargamos las tipografias desde Google -->
  <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
  <style>
  .logo{ width: 200px; }
  .container{padding-top: 20vh}
  .title{line-height: 110%; text-align: center}
  /*Asignamos con css las tipografias colores y tamaños correspondientes a los textos*/
  h1{    font-family: 'Exo 2', sans-serif; color:#333}
  h2{    font-family: 'Exo 2', sans-serif; color:#333}

  .title{font-family: 'Alfa Slab One', cursive; font-size: 80px; color:#fff}
  .price{font-family: 'Alfa Slab One', cursive;}
  p{}


    .h-img{position: relative; }

    .price-box{ padding: 10px; background-color: #f90; color:#fff} /*los dos colores deben ser controlados por el usuario*/
    .sello{ position: absolute; top:0; right: 20px; width: 160px; height: 160px; background-size: 100% auto; background-repeat: no-repeat; z-index: 999999999999999}


    </style>
  </head>
  <body>




    <!--
    <div class="oferta">
    Oferta!
    Del mes..
  </div>
-->

<section class="template-3">
  <div id="slider" class="carousel carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <!-- Slide_____________________ -->
      <div class="item slide active">
        <div class="col col-12" style="background-color: #333; padding: 22px">
          <div class="title animated wow zoomIn " data-wow-duration="1s" data-wow-delay="0s">
            <img class="logo" src="imagenes/logo-hamburgesa.png" alt="">
            Nuestras Especialidades
          </div>
        </div>
        <div class="container">
          <!-- Producto_____________________ -->
          <div class="col col-12" style="padding-top:50px!important;">
            <div class="col col-xs-6 producto">
              <div class="col col-4">
                <h2 class="animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0">
                  Italiana
                </h2>
                <p  class="animated wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero provident quibusdam distinctio, error, quos odit atque
                </p>
              </div>
              <div class="col col-8">
                <div class="sello animated wow
                rotateInUpRight" data-wow-duration="0.5s" data-wow-delay="0s">
                <img src="imagenes/sello.png" alt="" width="100%">
              </div>
              <div class="h-img">
                <img  src="imagenes/h1.png" width="90%; float: right" class="animated wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="0s" alt="">
              </div>
              <div class="price price-box center animated wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                $7.990
              </div>
            </div>
          </div>
          <!-- Producto_____________________ -->
          <div class="col col-xs-6 producto">
            <div class="col col-4">
              <h2 class="animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                Italiana
              </h2>
              <p  class="animated wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero provident quibusdam distinctio, error, quos odit atque
              </p>
            </div>
            <div class="col col-8">
              <div class="sello animated wow
              rotateInUpRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="imagenes/sello.png" alt="" width="100%">
            </div>
            <div class="h-img">
              <img  src="imagenes/h2.png" width="90%; float: right" class="animated wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="0.5s" alt="">
            </div>
            <div class="price price-box center animated wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
              $7.990
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Slide_____________________ -->
  <div class="item slide">
    <div class="col col-12" style="background-color: #333; padding: 22px">
      <div class="title animated wow zoomIn " data-wow-duration="1s" data-wow-delay="0s">
        <img class="logo" src="imagenes/logo-hamburgesa.png" alt="">
        Nuestras Especialidades
      </div>
    </div>
    <div class="container">
      <!-- Producto_____________________ -->
      <div class="col col-12" style="padding-top:50px!important;">
        <div class="col col-xs-6 producto">
          <div class="col col-4">
            <h2 class="animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0">
              Italiana
            </h2>
            <p  class="animated wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero provident quibusdam distinctio, error, quos odit atque
            </p>
          </div>
          <div class="col col-8">
            <div class="sello animated wow
            rotateInUpRight" data-wow-duration="0.5s" data-wow-delay="0s">
            <img src="imagenes/sello.png" alt="" width="100%">
          </div>
          <div class="h-img">
            <img  src="imagenes/h1.png" width="90%; float: right" class="animated wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="0s" alt="">
          </div>
          <div class="price price-box center animated wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            $7.990
          </div>
        </div>
      </div>
      <!-- Producto_____________________ -->
      <div class="col col-xs-6 producto">
        <div class="col col-4">
          <h2 class="animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            Italiana
          </h2>
          <p  class="animated wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero provident quibusdam distinctio, error, quos odit atque
          </p>
        </div>
        <div class="col col-8">
          <div class="sello animated wow
          rotateInUpRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
          <img src="imagenes/sello.png" alt="" width="100%">
        </div>
        <div class="h-img">
          <img  src="imagenes/h2.png" width="90%; float: right" class="animated wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="0.5s" alt="">
        </div>
        <div class="price price-box center animated wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
          $7.990
        </div>
      </div>
    </div>
  </div>
</div>
</div>



</div>
</div>
</section>

<footer>
  Desarrollado por Appnet.cl
  <div class="fullscreen"></div>
</footer>



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
  $('.carousel').carousel({
    pause: false,
    autoplay: true,
    interval: 3000,
    number:2
  });
});
new WOW().init();


</script>

</body>
</html>
