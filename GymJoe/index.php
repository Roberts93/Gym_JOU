<?php
session_start();

?>
<html>
<head>
<title>Inicio</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estructura.css"/>
	<link rel="stylesheet" type="text/css" href="css/menu.css"/>
	<link rel="stylesheet" type="text/css" href="css/pie_pagina.css"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/jquery-1.5.2.min.js" ></script>		
						<script src="js/jcarousellite_1.0.1c5.js" type="text/javascript"></script>
						<script type="text/javascript">
						$(function() {
							$("#slidebox").jCarouselLite({
								vertical: false,
								hoverPause:true,
								btnPrev: ".previous",
								btnNext: ".next",
								visible: 1,
								start: 0,
								scroll: 1,
								circular: true,
								auto:3500,
								speed:2500,				
								btnGo:
								    [".1", ".2",
								    ".3", ".4",
								    ".5", ".6",
								    ".7"],
								
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

							
							<br><br><br>

							<hr width="100%" height="100" color="#ccc">
							<hr id="sep" width="100%" height="100" color="blue">
						<div id="slidebox">
							<div class="next"></div>
								<div class="previous"></div>
									<div class="thumbs">
										<a href="#" onClick="" class="1 thumbActive">1</a> 
											<a href="#" onClick="" class="2">2</a> 
											<a href="#" onClick="" class="3 ">3</a> 
											<a href="#" onClick="" class="4">4</a> 
											<a href="#" onClick="" class="5">5</a> 
											<a href="#" onClick="" class="6">6</a> 
											<a href="#" onClick="" class="7">7</a> 
											
									</div>

						<div class="">
							<ul>
						    	<li>
						    	<IMG SRC="fotos/imagenes/iniciocarrusel5.jpg" id="tam_imagen">
						    		
						    		</li>
						    	<li>
									<IMG SRC="fotos/imagenes/iniciocarrusel2.png" id="tam_imagen">
						    		</li>
						    	<li>
									<IMG SRC="fotos/imagenes/iniciocarrusel3.png" id="tam_imagen">
						    		</li>
						    	<li>
									<IMG SRC="fotos/imagenes/iniciocarrusel4.png" id="tam_imagen">
						    		</li>
						    	<li>
									<IMG SRC="fotos/imagenes/iniciocarrusel1.png" id="tam_imagen">
						    		</li>
						    	<li>
									<IMG SRC="fotos/imagenes/iniciocarrusel6.png" id="tam_imagen">
						    		</li>					
						    	<li>
									<IMG SRC="fotos/imagenes/iniciocarrusel7.png" id="tam_imagen">
						    		</li>		
							</ul>
						</div>							
						</div>
						<br>
						<br>

						<?php
			if(isset($_SESSION['privilegios'])){
				if($_SESSION['privilegios']==1){
						echo '<h1 id="titulosusr">Bienvenido Administrador: '.$_SESSION["usuario"].'</h1>';
					}else{
						if($_SESSION['privilegios']==2){ 
						echo "<h1 id='titulosusr'>Bienvenido ".$_SESSION['usuario']."</h1>";
						}
				}
}	
				

	?>
						
	<h1  class="titulos" style="font-family: Bastion; color: black; margin-left:7%; margin-top: 5%; pading: 0px; ">QUIENES SOMOS</h1>
	<hr width="90%" height="7%" color="blue">

	

						<div id="texto_parrafo">
	<p>
		GYM JOE somos una organizacion en linea de Suplementos Alimenticios y articulos deportivos.
		 Contamos con la caracteristica principal: ofrecer los <b>PRECIOS MAS BAJOS DEL MERCADO.</b>
	</p>

<p>
GYM JOE tiene su sede en Ciudad Altamirano, Guerrero, no obstante somos una Gymnasio/Tienda a nivel Nacional
 y entregamos nuestros productos a todo Mexico, somos una organizacion eficaz y esto se ve reflejado en nuestros envios.
</p>

<p>
	La Mision de GYM JOE es ser la mejor Empresa en el Pais, ofreciendo un inmejorable precio y un excelente servicio, ganandonos la preferencia de todo el mercado Mexicano.
</p>

<p>
	Nuestra Vision es expandirnos a nivel Internacional, ser una Empresa Mexicana competitiva en el mercado de los Suplementos y Articulos Deportivos consolidando asi nuestra marca.
</p>
</div>

	<div align="center">
		<img align='center' style="float" src="fotos/imagenes/iniciocuerpo.png" id="img" alt="" controls>
	</div>



<div id="pony" style="border:5px solid blue; height: 400px;">
	<?php
	include('mapa-gmaps.php');
	?>

</div>




</div>
	<?php
	include('pie.php');
	?>

</body>
</html>