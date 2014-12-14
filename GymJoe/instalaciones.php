<?php
session_start();
?>
<head>
    <title>Gym Joe</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/textos.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="css/instalaciones.css">
    <link rel="stylesheet" type="text/css" href="slick-master/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="css/estiloCarrusel_Instalaciones.css">

</head>
<body>
    <div id="caja_principal">
    <?php 
        include('menu.php');
    ?>
    <hr width="100%" height="100" color="#ccc">
    <hr id="sep" width="100%" height="100" color="blue">

    
<div id="fondo">
<div class="multiple-items">
	<div><img src="fotos/imagenes/instalacionescarrusel1.jpg" class="tam_imagen"></div>
	<div><img src="fotos/imagenes/instalacionescarrusel2.jpg" class="tam_imagen"></div>
    <div><img src="fotos/imagenes/instalacionescarrusel3.jpg" class="tam_imagen"></div>

	<div><img src="fotos/imagenes/instalacionescarrusel4.jpg" class="tam_imagen"></div>
	<div><img src="fotos/imagenes/instalacionescarrusel5.jpg" class="tam_imagen"></div>
	<div><img src="fotos/imagenes/instalacionescarrusel6.jpg" class="tam_imagen"></div>
	<div><img src="fotos/imagenes/instalacionescarrusel7.jpg" class="tam_imagen"></div>
	<div><img src="fotos/imagenes/instalacionescarrusel8.jpg" class="tam_imagen" ></div>
	</div>
<script rel="text/javascript" src="jquery-2.1.1.min.js"></script>
     <script rel="text/javascript" src="slick-master/slick/slick.js"></script>
	<script type="text/javascript">
  $('.multiple-items').slick({
  infinite: true,
 // slidesToShow: 4,
 // slidesToScroll: 4
});
</script>
</div>



<div id="info">
<p >¿Quieres entrenar en las mejores instalaciones?</p>
<p > GYM JOE cuenta con las mejores instalaciones, donde puedes desarrollar  tus capacidades al maximo.</p>
<p >Contamos con Spinning,Pesas, Vestidores y Salon de baile.  </p>
</div>

<div id="cajota">

<div id="caja1">
<div id="poci">
<img src="img/spi11.jpg" width="500" height="400" controls>
<figcaption><b>Spinning</b></figcaption>
</div>
<div id="tama2">
<img src="img/spi5.jpg" width="300" height="180" controls>
<figcaption><b></b></figcaption>
</div>
<div id="tama3">
<img src="img/spi4.jpg" width="300" height="180" controls>
<figcaption><b></b></figcaption>
</div>
</div>


<div id="caja2">
    <div id="poci1">
<img src="img/Pesa2.jpg"  width="500" height="400" controls>
<figcaption><b>Pesas</b></figcaption>
</div>
<div id="tama4">
<img src="img/61.jpg" width="300" height="180" controls>
<figcaption><b></b></figcaption>
</div>
<div id="tama5">
<img src="img/pesas.jpg" width="300" height="180" controls>
<figcaption><b></b></figcaption>
</div>
</div>


<div id="caja3">
    <div id="poci2">
<img src="img/vesti.jpg"  width="500" height="400" controls>
<figcaption><b>Vestidores</b></figcaption>
</div>

<div id="tama6">
<img src="img/vesti2.jpg" width="300" height="180" controls>
<figcaption><b></b></figcaption>
</div>

<div id="tama7">
<img src="img/vesti4.jpg" width="300" height="180" controls>
<figcaption><b></b></figcaption>
</div>
</div>

<div id="caja4">
    <div id="poci">
<img src="img/salon.jpg"  width="500" height="400" controls>
<figcaption><b>Salon de baile</b></figcaption>
</div>
<div id="tama8">
<img src="img/baile.jpg" width="300" height="180" controls>
<figcaption><b></b></figcaption>
</div>
<div id="tama9">
<img src="img/bailee.jpg" width="300" height="180" controls>
<figcaption><b></b></figcaption>
</div>


</div>





</div>


</div>
</div>
</div>


<?php
    include('pie.php');
    ?>
</body>
</html>