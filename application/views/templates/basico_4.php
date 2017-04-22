<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Puntoapp</title>

  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_4/" ?>css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_4/" ?>css/font-awesome.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_4/" ?>css/style_template3.css" media="screen">

  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_4/" ?>css/animate.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url()."public/templates/basico_4/" ?>css/slick.css" media="screen">
  <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
  <style>

  h1, h2{font-family: 'Exo 2', sans-serif;}
  h1, h2, .title, .price{ padding: 0.5vw; background-color:  #333; width: auto; position: relative; display: inline-block;}
  .title, .price{font-family: 'Alfa Slab One', cursive;  line-height: 100%; text-align: center; }
  p{font-size: 1.5vw}
  h1{font-size: 3vw; color:#fff; width: 100%; z-index: 9999; background-color: transparent; text-transform: uppercase;}
  h2{font-size: 1.6vw; width: 50%}
  .logo { position: absolute; bottom: 1vw; right:  1vw; z-index: 9999; float: left; width: auto; width: 22vw}
  .fila-6 {height: 50vh; width: 100%;  border-bottom: 0}.fila-12 {height: 100vh; width: 100%;  border-bottom: 0}
  .slide{height: 100%; padding: 2vw}
  .price{font-size: 1.6vw; background-color:  #ffb137; color:#333}
  .title{color: #fff; font-size: 2vw}
  .h-img{position: relative; }
  .col-6{height: 100vh;}
  .sello{  position: absolute; top:0; right: 20px; width: 10vw; height: 160px; background-image: url(<?php echo base_url()."public/templates/" ?>imagenes/sello.png); background-size: 100% auto; background-repeat: no-repeat; z-index: 999999999999999}
  .img-producto{ width: 30vw; margin: 0 auto; display: table; padding: 2vw}
  .container{ padding-top: 20vw}
  .carousel-inner{height: 100%; }
  .bg{position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-size: 100% auto}

  @media all and (orientation: portrait){
    .container{ padding-top: 5vh}
    .logo{width: 22vh}
    .sello{   width: 10vh;}


    .img-producto{ height: 25vh; width: auto; margin: 0 auto; display: table}
    .col-1,   .col-2,   .col-3,   .col-4,   .col-5,  .col-6,   .col-7,   .col-8,   .col-9,   .col-10,   .col-11,   .col-12{ width: 100%}
    .fila-6 {height: 50vh; width: 50%!important; float: left; position: relative width: 100%; }.fila-12 {height: 60vh; width: 100%; }
    .col-6{height: 50vh}
  }

  .price{text-align: left}
  </style>
</head>
<body>




  <header>
    <div class="logo">logo<img src="<?php echo base_url()."public/templates/" ?>imagenes/pizza-logo.png" width="100%"  alt=""></div>
  </header>
  <section class="template-3">



    <div class=" col col-6">
      <!-- slider-1 -->

      <div  id="slider" class="fila-6 carousel carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <div class="item slide active">
            <h1>pizzas</h1>
            <div  class="bg animated wow pulse" data-wow-duration="10s" style=" background-image: url(<?php echo base_url()."public/templates/" ?>imagenes/sushibg.jpg);"></div>
            <h2 class="animated wow fadeInLeft" data-wow-duration="1s" style="color: #fff">Pizza Medianas</h2> <div class="price">$3.330</div><br>
            <h2 class="animated wow fadeInLeft" data-wow-duration="1s" style="color: #fff">Pzza Familiar</h2> <div class="price">$3.330</div><br>
            <h2 class="animated wow fadeInLeft" data-wow-duration="1s" style="color: #fff">EXTRA GRANDE</h2> <div class="price">$3.330</div><br>
            <h2 class="animated wow fadeInLeft" data-wow-duration="1s" style="color: #fff">EXTRA GRANDE SUPREME</h2> <div class="price">$3.330</div><br>
          </div>
        </div>

      </div>
      <!-- slider-2 -->
      <div  id="slider" class="fila-6 carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox" style="height: 100%">
          <div class="item slide active">
            <div  class="bg animated wow pulse" data-wow-duration="10s" style=" background-image: url(<?php echo base_url()."public/templates/" ?>imagenes/hh.jpg);"></div>
            <h2 class="animated wow fadeInLeft" data-wow-duration="1s" style="color: #fff">Pizza Mediana</h2> <div class="price">$3.330</div><br>
            <h2 class="animated wow fadeInLeft" data-wow-duration="1s" style="color: #fff">Pzza Familiar</h2> <div class="price">$3.330</div><br>
            <h2 class="animated wow fadeInLeft" data-wow-duration="1s" style="color: #fff">EXTRA GRANDE</h2> <div class="price">$3.330</div><br>
            <h2 class="animated wow fadeInLeft" data-wow-duration="1s" style="color: #fff">EXTRA GRANDE SUPREME</h2> <div class="price">$3.330</div><br>
          </div>

        </div>

      </div>
    </div>
    <div id="slider" class=" col col-6 carousel carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox" style="height: 100%">
        <div class="item slide active">
          <div  class="bg animated wow pulse" data-wow-duration="10s" style=" background-image: url(<?php echo base_url()."public/templates/" ?>imagenes/superh.jpg);"></div>
          <h2 style="color: #fff; font-size:5vw; background-color: transparent" class="animated wow fadeInLeft" data-wow-duration="1s">lorem onerror</h2><br></BR> <div class="price" style="font-size: 5vw" >$3.330</div>
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
</footer>



<script type="text/javascript" src="<?php echo base_url()."public/templates/basico_4/" ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()."public/templates/basico_4/" ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."public/templates/basico_4/" ?>js/wow.js"></script>
<script type="text/javascript" src="<?php echo base_url()."public/templates/basico_4/" ?>js/slick.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
  $('.carousel').carousel({
    pause: false,
    interval: 2000,
    number:2
  });


});
new WOW().init();


</script>

</body>
</html>
