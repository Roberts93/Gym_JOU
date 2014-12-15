<?php
session_start();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
	<link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/css/login.css">
    <link rel="stylesheet" type="text/css" href="css/pestana.css"/>
    <script type="text/javascript" src="js/cambiarPestanna.js"></script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>   
    <script type="text/javascript" src="js/Validar.js"></script> 
    <script type="text/javascript" src="js/script.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
    
</head>
<body>
<div id="caja_principal">
<?php
include('menu.php');
?>	


<hr width="100%" height="100" color="#ccc">
<hr id="hr_separador" width="100%" height="100" color="blue">
<div class="row">
<div class="large-6 large-centered columns">

</div>
</div>
  <section id="max">  
  <div class="contenedor">
            <div class="titulo">Perfil</div>
            <div id="pestanas">
                <ul id="listapro">
                	<?php
                	echo "
                    <li id='pestana1'><a href='javascript:cambiarPestanna(pestanas,pestana1);' class='tex'>Perfil de ".$_SESSION['usuario']."</a></li>
                    <li id='pestana2'><a href='javascript:cambiarPestanna(pestanas,pestana2);' class=tex'>Modificar Datos</a></li><br>
                    ";
                    ?>
                </ul>
                <br><br>
            </div>
            
            <body onload="javascript:cambiarPestanna(pestanas,pestana1);">
       
            <div id="contenidopestanas">
                <div id="cpestana1">                
                    <form>
                            <table id="contenedorimg">
                                        <tbody>  
                                            <tr class="tablas">
                                                <td class="contim"><IMG SRC="<?php echo $_SESSION["imagen"]?>" width="100%" height="100%"></td>
                                               
                                            </tr>
                                            </tbody>
                                    </table>

                        
                            
                            <table id="tabla">
                                        <tbody>  
                                            <tr class="tablas">
                                                <td class="tablas"><strong class="textosperfil">Nombre: <br /></strong><b id="text"><?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"];?></b></td>
                                                <td class="tablas"><strong class="textosperfil">Nick: <br /></strong><b id="text"><?php echo $_SESSION["usuario"];?></b> </td>
                                            </tr>
                                            <tr class="tablas">
                                                <td class="tablas"><strong class="textosperfil">Ciudad: <br /></strong><b id="text"><?php echo $_SESSION["ciudad"];?></b></td>
                                                <td class="tablas"><strong class="textosperfil">Estado Federativo: <br /></strong><b id="text"><?php echo $_SESSION["Estado"];?></b></td>
                                            </tr>
                                            <tr class="tablas">                                                
                                                <td class="tablas"><strong class="textosperfil">Codigo Postal: <br /></strong><p id="text"><?php echo $_SESSION["cp"];?></b></td>
                                                <td class="tablas"><strong class="textosperfil">Celular: <br /></strong><b id="text"><?php echo $_SESSION["numcasa"];?></b></td>
                                            </tr>
                                            <tr class="tablas">
                                                <td class="tablas"><strong class="textosperfil">Telefono: <br /></strong><b id="text"><?php echo $_SESSION["telefono"];?></b></td>
                                                <td class="tablas"><strong class="textosperfil">Correo electronico: <br /></strong><b id="text"><?php echo $_SESSION["email"];?></b></td>
                                                
                                            </tr>       
                                        </tbody>
                                    </table>
                    </form>
                        
                                    
                </div>
                <div id="cpestana2">
                     <table >
                                        <br><br><br>
                                        <form method="post" action="procesar/modificarPerf.php">
                                        <tbody>  
                                            <tr class="tablas">
                                                <td><strong class="textosperfil">Nombre: <br /></strong> <input type=text id="text" value="<?php echo $_SESSION['nombre']?>" name="nombre"> </td>
                                                <td><strong class="textosperfil">Apellido: <br /></strong><input type=text id="text"value="<?php echo $_SESSION['apellido']?>" name="apellido"> </td>
                                            </tr>
                                            <tr class="tablas">
                                                <td><strong class="textosperfil">Nick: <br /></strong><input type=text id="text" value="<?php echo $_SESSION['usuario'];?>" name="nick"> </td>
                                                <td><strong class="textosperfil">Ciudad: <br /></strong><input type=text id="text" value="<?php echo $_SESSION['ciudad'];?>" name="ciudad"> </td>
                                                
                                            </tr>
                                            <tr class="tablas">                                                
                                               <td><strong class="textosperfil">Estado Federativo: <br /></strong><input type=text id="text" value="<?php echo $_SESSION["Estado"];?>" name="estado"> </td>
                                                <td><strong class="textosperfil">Codigo Postal: <br /></strong><input type=text id="text" value="<?php echo $_SESSION["cp"];?>" name="cp"></td>
                                                
                                            </tr>
                                            <tr class="tablas">
                                                <td><strong class="textosperfil">Celular: <br /></strong><input type=text id="text" value="<?php echo $_SESSION["numcasa"];?>" name="cel"></td>
                                                <td><strong class="textosperfil">Telefono: <br /></strong><input type=text id="text" value="<?php echo $_SESSION["telefono"];?>" name="tel"></td>
                                                
                                            </tr>   
                                            <tr class="tablas">
                                                <td><strong class="textosperfil">Correo electronico: <br /></strong><input type="text" id="text" value="<?php echo $_SESSION["email"];?>" name="email"> </td>
                                                <td><strong class="textosperfil">Contraseña: <br /></strong><input type=text id="text" value="<?php echo $_SESSION["contra"];?>" name="pass"> </td>
                                            </tr>
                                            <tr>
                                                <td><strong class="textosperfil">Calle: <br /></strong><input type="text" id="text" value="<?php echo $_SESSION["calle"];?>" name="calle"> </td>
                                                <td><strong class="textosperfil">Colonia: <br /></strong><input type=text id="text" value="<?php echo $_SESSION["colonia"];?>" name="colonia"> </td>
                                                <td><strong class="textosperfil">Numero de casa: <br /></strong><input type=text id="text" value="<?php echo $_SESSION["numcasa"];?>" name="ncasa"> </td>
                                            </tr>   
                                            <tr class="tablas">
                                                <td><input id="boton" type="submit" value="Modificar"> </td>
                                            </tr> 
                                        </tbody>
                                    </table>
                                </form>
                </div>
                
                </div>
            </div>
            </div>    
  </section>
	


</div>
<?php
include('pie.php');
?>
</body>
</html>