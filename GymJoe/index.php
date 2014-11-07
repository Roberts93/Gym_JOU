<html>
<head>
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
						<br>
						<br>
						<br>
						<div id="slidebox">
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
						    		<IMG SRC="img/Slider.png">
						    		</li>
						    		<li>content 2
											<IMG SRC="img/Slider.png">
						    	</li>
						    	</li>
						    	<li>content 3
											<IMG SRC="img/Slider.png">
						    	</li>
						    	</li>
						    	<li>content 4
											<IMG SRC="img/Slider.png">
						    	</li>
						    	</li>
							</ul>
						</div>

						
	<h1  id="quien" style="font-family: Bastion; color: black; margin-left:7%; margin-top: 5%; pading: 0px; ">QUIENES SOMOS</h1>
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
		<img align='center' style="float" src="img/portada.png" id="img" alt="" controls>
	</div>

</div>

	<?php
	include('pie.php');
	?>

</body>
</html>