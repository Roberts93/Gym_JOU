
<html>
<head>
    <title>Gym Joe</title>
    <link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/productos.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
    <meta charset="UTF-8"/>
</head>
<body>
<div id="caja_principal">
           <?php
           include('menu.php');
           ?>
<hr width="100%" height="100" color="red">
<header>
  <hr id="sep" width="100%" height="100" color="blue">
  <div id="carrusel"><h1>Aqui va el Carrusel</h1></div>
  <aside id="servicio"><h1>Aquí va el servicio</h1>
  </aside>  
  <section id="max">
  <header>
    <div id="encabezadomax"><section id="des">Destacados</section></div>
    <section>
      <figure id="prod">
        <img src="img/productos/1.jpg" width="70%" height="40%" alt="Redes Sociales">
        <figcaption>
          <p>Carnitina</p>
          <p>(500 gramos)</p>
          <p>$600.00</p>
          <button>Añadir</button>
        </figcaption>
      </figure>
      <figure id="prod">
        <img src="img/productos/2.jpg" width="70%" height="40%" alt="Redes Sociales">
        <figcaption>
          <p>Carnitina</p>
          <p>(500 gramos)</p>
          <p>$600.00</p>
          <button>Añadir</button>
        </figcaption>
      </figure>
      <figure id="prod">
        <img src="img/productos/3.jpg" width="80%" height="40%" alt="Redes Sociales"/>
        <figcaption>
          <p>Carnitina</p>
          <p>(500 gramos)</p>
          <p>$600.00</p>
          <button>Añadir</button>
        </figcaption>
      </figure>
      <figure id="prod">
        <img src="img/productos/4.jpg" width="60%" height="40%" alt="Redes Sociales"/>
        <figcaption>
          <p>Carnitina</p>
          <p>(500 gramos)</p>
          <p>$600.00</p>
          <button>Añadir</button>
        </figcaption>
      </figure>
    </section>
  </header>  
  </section>
</header>
  </div>  


    <?php
    include('pie.php');
    ?>
     
        
    </body>
</html>