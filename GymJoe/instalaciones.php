 <html>
 <head>
<title>Instalaciones</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Slicebox - 3D Image Slider with Fallback"/>
        <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
		<meta name="author" content="Pedro Botelho for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css">
		<link rel="stylesheet" type="text/css" href="css/slicebox.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
        <script type="text/javascript" src="js/js/modernizr.custom.46884.js"></script>

    <link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="textos.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="css/instalaciones.css">
    <link rel="stylesheet" href="slick-master/slick/slick.css">
	<link rel="stylesheet" href="css/estiloCarrusel_Instalaciones.css">

    <div id="contenedor">
	</head>
	
	<body>
<div id="caja_principal">
	<?php 
        include('menu.php');
    ?>
    <hr width="100%" height="100" color="#ccc">
    <hr id="sep" width="100%" height="100" color="blue">



		<div class="container">
			<div class="codrops-top clearfix">
				<span class="right">		
				</span>
			</div>
			<h1>INSTALACIONES<span></span> </h1>
            
			
			<div class="more">
<div id="info">
<p >¿Quieres entrenar en las mejores instalaciones?</p>
<p > GYM JOE cuenta con las mejores instalaciones, donde puedes desarrollar  tus capacidades al maximo.</p>
<p >Contamos con Spinning,Pesas, Vestidores y Salon de baile.  </p>
</div>


			</div>
			<div class="wrapper">
				<ul class="sb-slider" id="sb-slider" name="sb-slider">
					<li>
						<a href="index.php"_blank"><img src="images/1.jpg" width="700" height="600"  alt="image1"/></a> 
						<div class="sb-description">
							<h3>Instalaciones Gym Joe</h3>
						</div>
					</li>
					<li>
						<a href="index.php"_blank"><img src="images/2.jpg" width="700" height="600"  alt="image2"/></a>
						<div class="sb-description">
						<h3>Instalaciones Gym Joe</h3>	
						</div>
					</li>
                  
						
					<li>
						<a href="index.php"><img src="images/3.jpg" width="700" height="600" alt="image3"/></a>
						<div class="sb-description">
							<h3>Instalaciones Gym Joe</h3>
						</div>
					</li>
                    
					<li>
						<a href="index.php"><img src="images/4.jpg" width="700" height="600" alt="image4"/></a>
						<div class="sb-description">
							<h3>Instalaciones Gym Joe</h3>
						</div>
					</li>
					<li>
						<a href="index.php"><img src="images/8.jpg" width="700" height="600"  alt="image5"/></a>
						<div class="sb-description">
							<h3>Instalaciones Gym Joe</h3>
						</div>
					</li>
					<li>
						<a href="index.php"><img src="images/6.jpg" width="700" height="600"   alt="image6"/></a>
						<div class="sb-description">
						<h3>Instalaciones Gym Joe</h3>	
						</div>
					</li>
					
				</ul>

				<div id="shadow" class="shadow"></div>
				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Siguiente</a>
					<a href="#">Foto</a>
				</div>

				<div id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
                    <span></span>                    
				</div>
		  </div><!-- /wrapper -->
		</div>


		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navDots = $( '#nav-dots' ).hide(),
						$nav = $navDots.children( 'span' ),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navDots.show();
								$shadow.show();

							},
							onBeforeChange : function( pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slicebox.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slicebox.jump( i + 1 );
									return false;
								
								} );
							} );
						};
						return { init : init };
				})();
				Page.init();
			});
		</script>
</div>
	<?php
	include('pie.php');
	?>
	</body>
</html>	
