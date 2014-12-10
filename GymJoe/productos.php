<?php
session_start();

    include 'procesar/config.php';
    if(isset($_SESSION['carrito'])){
        if(isset($_GET['id'])){
                    $arreglo=$_SESSION['carrito'];
                    $encontro=false;
                    $numero=0;
                    for($i=0;$i<count($arreglo);$i++){
                        if($arreglo[$i]['Id']==$_GET['id']){
                            $encontro=true;
                            $numero=$i;
                        }
                    }
                    if($encontro==true){
                        $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
                        $_SESSION['carrito']=$arreglo;
                    }else{
                        $nombre="";
                        $precio=0;
                        $imagen="";
                        $re=mysql_query("select * from productos where id_producto=".$_GET['id']);
                        while ($f=mysql_fetch_array($re)) {
                            $nombre=$f['nombre'];
                            $precio=$f['precio'];
                            $imagen=$f['imagen'];
                        }
                        $datosNuevos=array('Id'=>$_GET['id'],
                                        'Nombre'=>$nombre,
                                        'Precio'=>$precio,
                                        'Imagen'=>$imagen,
                                        'Cantidad'=>1);

                        array_push($arreglo, $datosNuevos);
                        $_SESSION['carrito']=$arreglo;

                    }
        }




    }else{
        if(isset($_GET['id'])){
            $nombre="";
            $precio=0;
            $imagen="";
            $re=mysql_query("select * from productos where id_producto=".$_GET['id']);
            while ($f=mysql_fetch_array($re)) {
                $nombre=$f['nombre'];
                $precio=$f['precio'];
                $imagen=$f['imagen'];
            }
            $arreglo[]=array('Id'=>$_GET['id'],
                            'Nombre'=>$nombre,
                            'Precio'=>$precio,
                            'Imagen'=>$imagen,
                            'Cantidad'=>1);
            $_SESSION['carrito']=$arreglo;
        }
    }
?>
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
            <div id="pestanas">
                <ul id="listapro">
                    <li id="pestana1"><a href='javascript:cambiarPestanna(pestanas,pestana1);'>Aumenta Masa</a></li>
                    <li id="pestana2"><a href='javascript:cambiarPestanna(pestanas,pestana2);'>Quema Grasa</a></li>
                    <li id="pestana3"><a href='javascript:cambiarPestanna(pestanas,pestana3);'>NOS</a></li>
                    <li id="pestana4"><a href='javascript:cambiarPestanna(pestanas,pestana4);'>Glutamina</a></li>
                    <li id="pestana5"><a href='javascript:cambiarPestanna(pestanas,pestana5);'>Creatina</a></li>
                    <li id="pestana6"><a href='javascript:cambiarPestanna(pestanas,pestana6);'>
                 
                    <input type="text" id="nick" name="nombre" placeholder="Buscar" onkeypress="txLetras()"><input type="submit" value="Buscar" name"bus" id="bus"/>
                    </li>                    
                    <li id="pestana7" style="width: 4.5%; position: relative; bottom: 25px;"><a href='javascript:cambiarPestanna(pestanas,pestana7);'><img src="img/carrito/carrito.jpg" width="70"></a></li>
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
                    $conh-> consultarglu();
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
                <div id="cpestana7">
                    <?php
                    $total=0;
                    if(isset($_SESSION['carrito'])){
                        $datos=$_SESSION['carrito'];                        
                        for ($i=0; $i < count($datos); $i++) { 
                            ?>
                    <figure id="prod">
                    <center>
                        <img src="fotos/productos/<?php echo $datos[$i]['Imagen'];?>" width="60%" heigth="60%"><br>
                        <figcaption>
                        <span ><?php echo $datos[$i]['Nombre'];?></span><br>
                        <span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
                        <span>Cantidad: 
                            <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
                            data-precio="<?php echo $datos[$i]['Precio'];?>"
                            data-id="<?php echo $datos[$i]['Id'];?>"
                            class="cantidad">
                        </span><br>
                        <span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
                        <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
                        </figcaption>
                    </center>
                </figure>
                            <?php
                            $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
                        }
                    }
                    else{
                        ?>
                        <center><h2 style="color:black;">El carrito esta vacío</h2></center><?php
                    }
                    echo '<center><h2 id="total">Total: '.$total.'</h2></center>';
                    ?>
                    <center><a href="javascript:cambiarPestanna(pestanas,pestana1);">Ver Catalogo</a></center>
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