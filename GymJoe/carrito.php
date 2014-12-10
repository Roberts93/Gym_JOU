<!DOCTYPE html>
<html>
<head>
    <title>Gym Joe</title>
    <link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/productos.css">
    <link rel="stylesheet" type="text/css" href="css/pestana.css"/>
    <script type="text/javascript" src="js/cambiarPestanna.js"></script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>   
    <script type="text/javascript" src="js/Validar.js"></script> 
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
    <meta charset="UTF-8"/>    
</head>
<body>
<div id="caja_principal">
           <?php
           include('menu.php');                      
           ?>
<hr width="100%" height="100" color="#ccc">
<hr id="sep" width="100%" height="100" color="blue">    
<div id="ImagenPrincipal">
  <img  style="float" src="img/productos/banner-productos.jpg" id="tamaImagen" alt="" controls>    
</div>        
  <section id="max">  
    <form class="contenedor" action="" method="post">
            <div class="titulo">Productos</div>
            </form>
            </section>
  </div>  


    <?php
    include('pie.php');
    ?>
     
        
    </body>
</html>