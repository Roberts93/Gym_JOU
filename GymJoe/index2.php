<html>
<head>
	<title>Gym Joe</title>
	<link rel="stylesheet" type="text/css" href="css/estructura4.css">
	<link rel="stylesheet" type="text/css" href="css/menu3.css">
	<link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="caja_principal">
	
							<?php 
								include('menu.php');
							?>
						
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
								speed:500,				
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
						<p>kljhkhklhklhklhklhkljk</p>
						<p>kljhkhklhklhklhklhkljk</p>
						<p>kljhkhklhklhklhklhkljk</p>
						<p>kljhkhklhklhklhklhkljk</p>
						<p>kljhkhklhklhklhklhkljk</p>


</div>

	<?php
	include('pie.php');
	?>

</body>
</html>