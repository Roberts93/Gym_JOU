<html>
<head>
	<title>Gym Joe</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/Rutinas.css">
    <link rel="stylesheet" href="slick-master/slick/slick.css">
	<link rel="stylesheet" href="css/estiloCarrusel_Rutinas.css">
	<link rel="stylesheet" href="style/index_style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/VentanaModal.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css' />
    <script type="text/javascript">
		function openVentana(){
			$(".ventana").slideDown(4000);
		}
		function closeVentana(){
			$(".ventana").slideUp("fast");
		}
	</script>
</head>
<body>
		<div id="caja_principal">
		<?php 
		include('menu.php');
		?>
<hr  width="100%" height="100" color="#cccccc">
<hr id="sep" width="100%" height="100" color="blue">


<div class="container">
		<div class="ventana">
			<h1>Ventana modal</h1>
			<div class="form">
				<div class="cerrar"><a href="javascript:closeVentana();">Cerrar X</a></div>
				<h1>¿Que es el Sobre Entrenamiento?</h1>
				<hr>
			</div>
		</div>
		

	<div id="ImagenPrincipal">
	<img  style="float" src="fotos/imagenes/rutinasbanner.jpg" id="tamaImagen" alt="" controls>		
	</div>

    <div class="caja_arriba">
    <h2><center style="color: black;">Rutinas Basicas para tu Cuerpo!! </center></h2>    
    <div>
<img  style="float" src="img/3.png" id="img" alt="" controls>
<img  style="float" src="img/SPORTA/11.png" id="img2" alt="" controls>
<p id="titulo">Como Mejorar la Resistencia? </p>
<h6 id="texto_centro"><em><center>Tips y recomendaciones basicas</center></em></h6>
</div>
</div>


<div class="division1">
<div class="multiple-items">
	<div><img src="img/Carrusel_Rutinas/1.jpg" class="tam_imagen"></div>
	<div><img src="img/Carrusel_Rutinas/2.jpg" class="tam_imagen"></div>
	<div><img src="img/Carrusel_Rutinas/3.jpg" class="tam_imagen" ></div>
	
	<div><img src="img/Carrusel_Rutinas/5.jpg" class="tam_imagen"></div>
	<div><img src="img/Carrusel_Rutinas/6.jpg" class="tam_imagen"></div>
	
	<div><img src="img/Carrusel_Rutinas/8.jpg" class="tam_imagen"></div>
	<div><img src="img/Carrusel_Rutinas/9.jpg" class="tam_imagen"></div>
	<div><img src="img/Carrusel_Rutinas/10.jpg" class="tam_imagen"></div>
	<div><img src="img/Carrusel_Rutinas/11.jpg" class="tam_imagen"></div>
	<div><img src="img/Carrusel_Rutinas/12.jpg" class="tam_imagen"></div>
	<div><img src="img/Carrusel_Rutinas/13.jpg" class="tam_imagen"></div>
	<div><img src="img/Carrusel_Rutinas/14.jpg" class="tam_imagen"></div>
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

<div id="r">
	<hr>
</div>

<div id="cajota">

		<div class="contenedor">
		<div class="imagen">
			<img src="pictures/31.png" class="imagen">
		</div>
		<div class="info">
			<p class="titulo">Entrenamiento</p>
			<p class="adicional">¿Figura-Envidiable?</p>
			<a class="link" href="Enlace1.php">Conocer +</a>
		</div>
		</div>

		<div class="contenedor">
		<div class="imagen">
			<img src="pictures/16.png" class="imagen">
		</div>
		<div class="info">
			<p class="titulo">Sentadillas</p>
			<p class="adicional">¿Forma de realizar?</p>
			<a class="link" href="Enlace2.php">Conocer +</a>
		</div>
		</div>

		<div class="contenedor">
		<div class="imagen">
			<img src="pictures/1 (2).png" class="imagen">
		</div>
		<div class="info">
			<p class="titulo">Musculos</p>
			<p class="adicional">¿Tonifica Brazos?</p>
			<a class="link" href="Enlace3.php">Conocer +</a>
		</div>
		</div>

		<div class="contenedor">
		<div class="imagen">
			<img src="pictures/postura.png" class="imagen">
		</div>
		<div class="info">
			<p class="titulo">Lagartijas</p>
			<p class="adicional">¿Para que sirven?</p>
			<a class="link" href="Enlace4.php">Conocer +</a>
		</div>
		</div>
<!--
<a href="javascript:openVentana();">
<figure class="pocision">
<img src="img/2.png" width="220" height="165" controls>
<figcaption><b>Que es el sobre entrenamiento?</b></figcaption>
</figure></a>   


<div class="pocision">
<img align="center" src="img/3.jpg" width="220" height="165" controls>
<figcaption><b>Quieres Probar una rutina diferente?</b></figcaption>
</div>
<div class="pocision">
<img src="img/SPORTA/16.png" width="220" height="165" controls>
<figcaption><b>Forma de realizar las sentadillas?</b></figcaption>
</div>
<div class="pocision">
<img src="img/SPORTA/39.jpg" width="200" height="150" controls>
<figcaption><b>Definicion Muscular rapida?</b></figcaption>
</div>
<div class="pocision">
<img src="img/SPORTA/44.jpg" width="220" height="150" controls>
<figcaption><b>7 beneficios de las sentadillas?</b></figcaption>
</div>
<div class="pocision">
<img src="img/SPORTA/46.jpg" width="220" height="150" controls>
<figcaption><b>8 Errores que cometes en el Gym?</b></figcaption>
</div>
<div class="pocision">
<img src="img/SPORTA/48.jpg" width="220" height="165" controls>
<figcaption><b>Ejercicio lento y controlado?</b></figcaption>
</div>
<div class="pocision">
<img src="img/SPORTA/58.jpg" width="220" height="150" controls>
<figcaption><b>Tips para un Mejor entrenamiento?</b></figcaption>
</div>
<div class="pocision">
<img src="img/Carrucel_Rutinas/64.png" width="220" height="150" controls>
<figcaption><b>Maximimar el desarrollo Muscular?</b></figcaption>
</div>
<div class="pocision">
<img src="img/SPORTA/31.png" width="220" height="150" controls>
<figcaption><b> Luce una figura envidiable</b></figcaption>
</div>
<div class="pocision" >
<img align="center" src="img/Carrucel_Rutinas/69.png" width="220" height="150" controls >
<figcaption><b>Mejora tu Abdomen</b></figcaption>
</div>
-->
<div id="r2">
	<hr>
</div>
<h1  id="quien" style="font-family: Bastion; color: black; margin-left:7%; margin-top: -5%; pading: 0px; ">RUTINAS</h1>
	<hr width="90%" height="7%" color="blue" style="margin-top: -3.5%;">

						<div id="texto_parrafo">

<p>
Se llama ejercicio físico a cualquier actividad física que mejora y mantiene la aptitud física, la salud y el bienestar de la persona. Se lleva a cabo por diferentes razones como el fortalecimiento muscular, mejora del sistema cardiovascular, desarrollar habilidades atléticas, deporte, pérdida de grasa o mantenimiento, así como actividad recreativa.
</p>

<p>
El ejercicio físico mejora la función mental, la autonomía, la memoria, la rapidez, la imagen corporal y la sensación de bienestar, se produce una estabilidad en la personalidad caracterizada por el optimismo, la euforia y la flexibilidad mental, La actividad física aumentada puede darle una vida más larga y una mejoría en su salud. El ejercicio ayuda a prevenir las enfermedades del corazón, y muchos otros problemas. Además el ejercicio aumenta la fuerza, le da más energía y puede ayudar a reducir la ansiedad y tensión. También es una buena manera de cambiar el rumbo de su apetito y quemar calorías.
</p>

<p>
El ejercicio físico es útil para mantener la condición física, y puede contribuir positivamente al mantenimiento de un peso saludable, al desarrollo y mantenimiento de la densidad ósea, fuerza muscular y movilidad articular; promueve numerosos procesos biológicos (ej. metabolismo, sistema inmune) proporcionando un sistema fisiológico saludable, lo que reduce los riesgos quirúrgicos; reduce los niveles de cortisol, causantes de numerosos problemas de salud tanto físicos como mentales.
</p>
</div>


</div>



</div>
</div>
	<?php
	include('pie.php');
	?>
</body>
</html>