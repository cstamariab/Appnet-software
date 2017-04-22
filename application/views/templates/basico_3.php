<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Puntoapp</title>

  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_3/" ?>css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_3/" ?>css/font-awesome.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_3/" ?>css/style_template3.css" media="screen">

  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_3/" ?>css/animate.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_3/" ?>css/slick.css" media="screen">
  <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
  <style>
  section{ background-image: url('<?php echo base_url()."public/templates/" ?>'imagenes/leaf.jpg); background-repeat: repeat; height: calc(100vh - 33px)!important}
  h1, h2, {font-family: 'Exo 2', sans-serif;}
  h1, h2, .title, .price{margin-top: 2vw; padding-bottom: 2vw}


  .title, .price{font-family: 'Alfa Slab One', cursive;  line-height: 100%; text-align: center; }
  p{font-size: 1.5vw}
  h1{font-size: 2vw}
  h2{font-size: 4vw}
  .price{font-size: 4vw}
  .logo { position: absolute; top: 3vw; left:  1.1vw; z-index: 9999; float: left; width: 30vw;}

  .header{font-family: 'Alfa Slab One', cursive; padding: 2vw;background-image: url(<?php echo base_url()."public/templates/" ?>imagenes/mujer.jpg); height: 20%;  background-size: 100% auto; color: #fff; font-size: 3vw; }
  .h-img{position: relative; }
  .sello{  position: absolute; top:0; right: 20px; width: 10vw; height: 160px; background-image: url(<?php echo base_url()."public/templates/basico_3/" ?>imagenes/sello.png); background-size: 100% auto; background-repeat: no-repeat; z-index: 999999999999999}
  .img-producto{ width: 30vw; margin: 0 auto; display: table; padding: 2vw}
  .container{ padding-top: 15vh}
  #slider{height: 80%}
  .slide, .carousel-inner{height: 100%; }

  @media all and (orientation: portrait){
    .header{background-image: url(<?php echo base_url()."public/templates/" ?>imagenes/mujer.jpg); height: 10%; background-size: auto 100%; }
    #slider{height: 90%}
    .logo { position: absolute; top: 1vw; left:  1.1vw; z-index: 9999; float: left; width: auto; width: 24vh; }

    .container{ padding-top: 5vh}
    .sello{   width: 10vh;}
    p{font-size: 1.6vh}
    h1{font-size: 2vh}
    h2{font-size: 4vh}
    .price{font-size: 5vh}
    .title{font-size: 2vh}
    .img-producto{ height: 25vh; width: auto; margin: 0 auto; display: table}
    .col-1,   .col-2,   .col-3,   .col-4,   .col-5,  .col-6,   .col-7,   .col-8,   .col-9,   .col-10,   .col-11,   .col-12{ width: 100%}
  }
  .price{text-align: left}
  </style>
</head>
<body>

  <section class="template-3">
    <div class="col col-12 header" style="background-color: #333;">
      <div class="logo"><img src="<?php echo base_url()."public/templates/" ?>imagenes/pizza-logo.png"  width="100%" alt=""></div>
    </div>
    <div id="slider" class="carousel carousel-fade" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item slide active ">
          <div class="container">
            <div class="col col-12">

              <div class="col col-6">
                <div class="col col-3">
                  <h2 style="color:#333" class="animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0" alt="">Italiana</h2>
                  <p class="animated wow fadeIn" data-wow-duration="2s" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                  <div class="price">$3.330</div>
                </div>
                <div class="col col-9">
                  <div class="sello animated wow
                  rotateInUpRight" data-wow-duration="0.5s" data-wow-delay="0s" alt=""></div>
                  <div class="h-img">      <img class="img-producto"  src="<?php echo base_url()."public/templates/" ?>imagenes/gafas.png" alt="" width="90%; float: right" class="animated wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="0s" alt=""></div>
                </div>
              </div>
              <div class="col col-6">
                <div class="col col-3">
                  <h2 style="color:#333" class="animated wow fadeInLeft" data-wow-duration="1s"  alt="">Italiana</h2>
                  <p class="animated wow fadeIn" data-wow-duration="2s" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero provident </p>
                  <div class="price">$3.330</div>
                </div>
                <div class="col col-9">
                  <div class="sello animated wow
                  rotateInUpRight" data-wow-duration="0.5s" alt=""></div>
                  <div class="h-img">      <img class="img-producto"  src="<?php echo base_url()."public/templates/" ?>imagenes/gafas2.png" alt="" width="90%; float: right" class="animated wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="0.3s" alt=""></div>
                </div>
              </div>
            </div>
          </div>


      </div>
    </div>


  </section>

  <footer>
    Desarrollado por Appnet.cl
  </footer>

  <script type="text/javascript" src="<?php echo base_url()."public/templates/basico_3/" ?>js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."public/templates/basico_3/" ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."public/templates/basico_3/" ?>js/wow.js"></script>
  <script type="text/javascript" src="<?php echo base_url()."public/templates/basico_3/" ?>js/slick.min.js"></script>
  <script type="text/javascript">
  $( document ).ready(function() {
    $('.carousel').carousel({
      pause: false,
      interval: 3000,
      number:4
    });


  });
  new WOW().init();


  </script>

</body>
</html>
