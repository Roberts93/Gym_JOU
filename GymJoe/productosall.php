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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
    <meta charset="UTF-8"/>    
</head>
<body>
<div id="caja_principal">
           <?php
           include('menu.php');           
           #
           ?>
<hr width="100%" height="100" color="red">
<hr id="sep" width="100%" height="100" color="blue">      
  <section id="max">  
    <form class="contenedor" action="" method="post">
            <div class="titulo">Productos</div>
            <div id="pestanas">
                <ul id="listapro">
                    <li id="pestana1"><a href='javascript:cambiarPestanna(pestanas,pestana1);'>Aumenta Masa</a></li>
                    <li id="pestana2"><a href='javascript:cambiarPestanna(pestanas,pestana2);'>Quema Grasa</a></li>
                    <li id="pestana3"><a href='javascript:cambiarPestanna(pestanas,pestana3);'>NOS</a></li>
                    <li id="pestana4"><a href='javascript:cambiarPestanna(pestanas,pestana4);'>HC</a></li>
                    <li id="pestana5"><a href='javascript:cambiarPestanna(pestanas,pestana5);'>Creatina</a></li>
                    <li id="pestana6"><a href='javascript:cambiarPestanna(pestanas,pestana6);'>
                    <input type="text" id="nick" name="nombre" placeholder="Buscar"></a><input type="submit" value="Buscar" name"bus" id="bus"/>
                    </li>                    
                </ul>
            </div>
            
            <body onload="javascript:cambiarPestanna(pestanas,pestana1);">
       
            <div id="contenidopestanas">
                <div id="cpestana1">                
                    <?php
                        require_once 'procesar/consultar.php';
                        $conq= new consultar();
                        $conq-> consultaraumen();
                    ?>                  
                </div>
                <div id="cpestana2">
                    <?php
                    require_once 'procesar/consultar.php';
                    $cona= new consultar();
                    $cona-> consultarquema();
                    ?>
                </div>
                <div id="cpestana3">
                    <?php
                    require_once 'procesar/consultar.php';
                    $conos= new consultar();
                    $conos->  consultarnos();
                    ?>
                </div>
                <div id="cpestana4">
                    <?php
                    require_once 'procesar/consultar.php';
                    $conh= new consultar();
                    $conh-> consultarhc();
                    ?>
                </div>
                <div id="cpestana5">
                    <?php
                    require_once 'procesar/consultar.php';
                    $conc= new consultar();
                    $conc-> consultarcrea();
                    ?>
                </div>
                <div id="cpestana6">
                    <?php
                    require_once 'procesar/consultar.php';
                        $conb= new consultar();
                        $conb-> consultarbus();
                    ?>
                </div>
            </div>
        </form>
  </section>
  </div>  


    <?php
    include('pie.php');
    ?>
     
        
    </body>
</html>