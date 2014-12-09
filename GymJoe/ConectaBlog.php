<html>
<head>
    <title>Gym Joe</title>
    <link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/estilosBlog.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
</head>
<body>
<div id="caja_principal">

<?php 
include('menu.php');
?>

<div id="ImagenPrincipal">
	<img  style="float"  src="img/CarrucelPrincipal/Blog.jpg" id="tamaImagen" alt="" controls style="width: 99.7px" style="height: 53px">		
	</div>

<div id="cuadroEntradas">
<CENTER><h1 style="color:black">ENTRADAS RECIENTES</h1></CENTER>
<?php require("../../wordpress/wp-blog-header.php"); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
<?php the_date('','<h3 id="fechas">','</h3>'); ?>
 
<div class="post" id="post-<?php the_ID(); ?>">
	 <h3 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
 
	<div class="storycontent" id="informacion">
		<?php the_excerpt(__('(more...)')); echo " . . ."; ?>
		<hr>
	</div>
 
</div>
 
<?php endwhile; else: ?>
<p><?php _e('Lo siento. Ahora mismo no hay ningún post publicado'); ?></p>
<?php endif; ?>
</div>

</div>

    <?php
    include('pie.php');
    ?>  
    </body>
</html>
