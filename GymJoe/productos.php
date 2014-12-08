
<html>
<head>
    <title>Productos</title>
    <link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/productos.css">    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
    <meta charset="UTF-8"/>
    <script type="text/javascript" src="js/jquery-1.5.2.min.js" ></script>
            <script src="js/jcarousellite_1.0.1c5.js" type="text/javascript"></script>
            <script type="text/javascript">
            $(function() {
              $("#carrusel").jCarouselLite({
                vertical: false,
                hoverPause:true,
                btnPrev: ".previous",
                btnNext: ".next",
                visible: 1,
                start: 0,
                scroll: 1,
                circular: true,
                auto:1000,
                speed:800,        
                btnGo:
                    [".1", ".2",
                    ".3", ".4"],
                
                afterEnd: function(a, to, btnGo) {
                    if(btnGo.length <= to){
                      to = 0;
                    }
                    $(".thumbActive").removeClass("thumbActive");
                    $(btnGo[to]).addClass("thumbActive");
                    }
              });
            });
            </script>
</head>
<body>
<div id="caja_principal">
           <?php
           include('menu.php');
           ?>
<hr width="100%" height="100" color="#ccc">
  <hr id="sep" width="100%" height="100" color="blue">
  <div id="carrusel">
  <div class="next"></div>
                <div class="previous"></div>
                  <div class="thumbs">
                    <a href="#" onClick="" class="1 thumbActive">1</a> 
                      <a href="#" onClick="" class="2">2</a> 
                      <a href="#" onClick="" class="3 ">3</a> 
                      <a href="#" onClick="" class="4">4</a> 
                  </div>
              <ul>
                  <li>
                    <IMG SRC="img/productos/7.jpg" width="97%" height="97%" alt="descuentos" >
                  </li>
                  <li>
                      <IMG SRC="img/productos/8.jpg" width="97%" height="97%" alt="descuentos">
                  </li>                  
                  <li>
                      <IMG SRC="img/productos/9.jpg" width="97%" height="97%" alt="descuentos">
                  </li>
              </ul>
  </div>
  <aside id="servicio">
  <form method="POST" action="serviciosweb/cliente.php">
  <h1>Aquí va el servicio</h1>
  <h3>Convertidor de Pesos Mexicanos a Dolares</h3>
  <input type="number" placeholder="pesos" name="cantidad">
  <input type="number" placeholder="valor_dolar" name="dolar"><input type="submit" value="convertir">
  </form>
  </aside>
  <nav id="menupro">
    <ul>
      <li><a href="RegPro.php">Registrar Productos</a></li>
      <li><a href="conproducto.php">Consultar Productos</a></li>      
    </ul>
  </nav>
  <section id="max">
    <div id="encabezadomax">Destacado</div>
    <section id="produc">
      <figure id="prod">
        <img src="img/productos/1.jpg" width="70%" height="40%" alt="Redes Sociales">
        <figcaption>
          <p>Carnitina</p>
          <p>(500 gramos)</p>
          <p>$600.00</p>
          <button class="botoncito">Añadir</button>
        </figcaption>
      </figure>
      <figure id="prod">
        <img src="img/productos/2.jpg" width="70%" height="40%" alt="Redes Sociales">
        <figcaption>
          <p>Carnitina</p>
          <p>(500 gramos)</p>
          <p>$600.00</p>
          <button class="botoncito">Añadir</button>
        </figcaption>
      </figure>
      <figure id="prod">
        <img src="img/productos/3.jpg" width="80%" height="40%" alt="Redes Sociales"/>
        <figcaption>
          <p>Carnitina</p>
          <p>(500 gramos)</p>
          <p>$600.00</p>
          <button class="botoncito">Añadir</button>
        </figcaption>
      </figure>
      <figure id="prod">
        <img src="img/productos/4.jpg" width="60%" height="40%" alt="Redes Sociales"/>
        <figcaption>
          <p>Carnitina</p>
          <p>(500 gramos)</p>
          <p>$600.00</p>
          <button class="botoncito">Añadir</button>
        </figcaption>
      </figure>
    </section>
  </section>
  </div>  


    <?php
    include('pie.php');
    ?>
     
        
    </body>
</html>