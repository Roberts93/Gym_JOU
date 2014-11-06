<head>
    <title>Gym Joe</title>
    <link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="textos.css">
    <link rel="stylesheet" type="text/css" href="css/menu2.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="css/Rutinas.css">
    <link rel="stylesheet" type="text/css" href="css/Instalaciones.css">
</head>
<body background="img/circulos.jpg">

    <div id="caja_principal">

    <?php 
        include('menu.php');
        echo("<hr width='100%' height='100' color='red'>")
    ?>

    <br>
    <hr width="100%" height="100" color="red">

    <div id="caja_arriba">
    <h2><center style="color: black;">Conoce nuestras instalaciones </center></h2>
    <header>
<img  style="float" src="img/Instala.jpg" id="tama" alt="" controls>
<p id="titulo">A qui entrenan los campeones</p>
<h6 id="texto_centro"><em><center>Entrena a qui , en el mejor lugar.</center></em></h6>
</div>
</header>
<hr>
<br>


<div class="pocision">
<img src="img/spi11.jpg" width="400" height="380" controls>
<figcaption><b>Spinning</b></figcaption>
</div>

<div class="pocision">
<img src="img/spi5.jpg" width="220" height="150" controls>
<figcaption><b></b></figcaption>
</div>

<div class="pocision">
<img src="img/spi3.jpg" width="200" height="150" controls>
<figcaption><b></b></figcaption>
</div>

<div class="pocision">
<img src="img/spi2.jpg" width="200" height="150" controls>
<figcaption><b></b></figcaption>
</div>

<div class="pocision">
<img src="img/spi4.jpg" width="200" height="150" controls>
<figcaption><b></b></figcaption>
</div>






    </div>
    
    
    <?php
    include('pie.php');
    ?>
<hr>
</body>
</html>