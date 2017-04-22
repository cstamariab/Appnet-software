<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Puntoapp</title>

  <link rel="stylesheet" href="css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="css/font-awesome.css" media="screen">
  <link rel="stylesheet" href="css/style_template3.css" media="screen">

  <link rel="stylesheet" href="css/animate.css" media="screen">
  <link rel="stylesheet" href="css/slick.css" media="screen">
  <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
  <style>
  section{ height: calc(100vh - 33px)!important}
  h1, h2{font-family: 'Exo 2', sans-serif;}
  h1, h2, .title, .price{ padding: 0.5vw; background-color:  #fff; color: #fff; width: auto; position: relative; display: inline-block;}
  .title, .price{font-family: 'Alfa Slab One', cursive;  line-height: 100%; text-align: center; }
  .col-xs-12{ height: 33.3%; padding: 0; position: relative;}
  .text{ width: 70%; float: left; position: relative; background-color: #333; height: 100%; padding: 1.8vw; padding-top: 4.4vw; border-bottom: 1px solid #222}
  .product{ width: 30%; float: left; position: relative; overflow: hidden; height: 100%}
  .carousel-inner{height: 100%; }#slider, .slide{ height: 100%}
  .product img{ height: 100%; margin: 0 auto; display: table}
  .number{ width: 4vw; height: 4vw; color:#fff; font-size: 2vw; text-align: center;padding: 0.8vw; position: absolute; top: 0; background-color: #52922f}
  p{font-size: 1.3vw; width: 100%; display:  inline-block; margin-top: 1vw; color:#fff; max-width: 680px}
  h1{font-size: 3vw; color:#fff; width: 100%; z-index: 9999; background-color: transparent; text-transform: uppercase;}
  .ingredientes{font-size: 1.6vw; width: 50%; color: #52922f; float: left; width: auto; margin-right: 1.9vw}
  .logo { position: absolute; top: 0.1vw; right:  0.1vw; z-index: 9999; float: left; width: auto; width: 10vw}


  .price{font-size: 1.6vw; background-color:  #ffb137;}
  .title{color: #fff; font-size: 2vw}
  .h-img{position: relative; }
  .col-6{height: 100vh;}
  .sello{  position: absolute; top:0; right: 20px; width: 10vw; height: 160px; background-image: url(imagenes/sello.png); background-size: 100% auto; background-repeat: no-repeat; z-index: 999999999999999}

  .container{ padding-top: 20vw; width: 100vw!important}

  .bg{position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-size: 100% auto}

  @media all and (orientation: portrait){
    .text,.product{ width: 100%; }
    .text{ height: 35%}
    .product{ height: 65%}

  }



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
    <div class="logo"><img src="imagenes/pizza-logo.png" width="100%"  alt=""></div>
  </header>
  <section class="template-3">
    <div id="slider" class="carousel carousel-fade" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item slide active ">

          <div class="col-xs-12">

            <div class="product"><img src="imagenes/menu-3.jpg" alt="" class="animated wow zoomIn" data-wow-duration="1.6s"></div>

            <div class="text">
              <div class="number">1</div>

              <h1 class="animated wow fadeInRight" data-wow-duration="1.6s">GENERAL THAI</h1>

              <div class="ingredientes">Salmon - Pimenton - Zapallo italiano</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam exercitationem nulla porro explicabo aliquam inventore, ut ratione accusamus ad quia. Nihil pariatur eum dolor repudiandae excepturi numquam, atque nam laboriosam.</p>

            </div>
          </div>


          <div class="col-xs-12">

            <div class="product"><img src="imagenes/menu-2.jpg" alt="" class="animated wow zoomIn" data-wow-duration="1.9s"></div>
            <div class="text" style="background-color:#333">
              <div class="number">2</div>
              <h1 class="animated wow fadeInRight" data-wow-duration="1.9s">SOUPE YOM YUM</h1>
              <div class="ingredientes">Salmon - Pimenton - Zapallo italiano</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam exercitationem nulla porro explicabo aliquam inventore, ut ratione accusamus ad quia. Nihil pariatur eum dolor repudiandae excepturi numquam, atque nam laboriosam.</p>

            </div>
          </div>


          <div class="col-xs-12">

            <div class="product"><img src="imagenes/menu-1.jpg" alt="" class="animated wow zoomIn" data-wow-duration="2.2s"></div>
            <div class="text" style="background-color: #333">
              <div class="number">3</div>
              <h1 class="animated wow fadeInRight" data-wow-duration="2.2s">CARI</h1>
              <div class="ingredientes">Salmon - Pimenton - Zapallo italiano</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam exercitationem nulla porro explicabo aliquam inventore, ut ratione accusamus ad quia. Nihil pariatur eum dolor repudiandae excepturi numquam, atque nam laboriosam.</p>

            </div>
          </div>
        </div>

        <div class="item slide">
          <div class="col-xs-12">

            <div class="product"><img src="imagenes/menu-3.jpg" alt="" class="animated wow zoomIn" data-wow-duration="1.6s"></div>

            <div class="text">
              <div class="number">4</div>

              <h1 class="animated wow fadeInRight" data-wow-duration="1.6s">GENERAL THAI</h1>

              <div class="ingredientes">Salmon - Pimenton - Zapallo italiano</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam exercitationem nulla porro explicabo aliquam inventore, ut ratione accusamus ad quia. Nihil pariatur eum dolor repudiandae excepturi numquam, atque nam laboriosam.</p>

            </div>
          </div>


          <div class="col-xs-12">

            <div class="product"><img src="imagenes/menu-2.jpg" alt="" class="animated wow zoomIn" data-wow-duration="1.9s"></div>
            <div class="text" style="background-color:#333">
              <div class="number">5</div>
              <h1 class="animated wow fadeInRight" data-wow-duration="1.9s">SOUPE YOM YUM</h1>
              <div class="ingredientes">Salmon - Pimenton - Zapallo italiano</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam exercitationem nulla porro explicabo aliquam inventore, ut ratione accusamus ad quia. Nihil pariatur eum dolor repudiandae excepturi numquam, atque nam laboriosam.</p>
            </div>
          </div>

          <div class="col-xs-12">

            <div class="product"><img src="imagenes/menu-1.jpg" alt="" class="animated wow zoomIn" data-wow-duration="2.2s"></div>
            <div class="text" style="background-color: #333">
              <div class="number">6</div>
              <h1 class="animated wow fadeInRight" data-wow-duration="2.2s">CARI</h1>
              <div class="ingredientes">Salmon - Pimenton - Zapallo italiano</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam exercitationem nulla porro explicabo aliquam inventore, ut ratione accusamus ad quia. Nihil pariatur eum dolor repudiandae excepturi numquam, atque nam laboriosam.</p>

            </div>
          </div>
        </div>


      </div></div>






    </section>

    <footer>
      Desarrollado por Appnet.cl
    </footer>



    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
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
