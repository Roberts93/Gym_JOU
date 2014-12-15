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
<h3>Perfil</h3>
</div>
</div>
  <section id="max">  
  <div class="contenedor">
            <div class="titulo">Productos</div>
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
                            <div></div> 
                            <table>
                                        <tbody>  
                                            <tr class="tablas">
                                                <td class="tablas"><strong class="textosperfil">Nombre: <br /></strong><?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"];?></td>
                                                <td class="tablas"><strong class="textosperfil">Nick: <br /></strong><?php echo $_SESSION["nick"];?> </td>
                                            </tr>
                                            <tr class="tablas">
                                                <td class="tablas"><strong class="textosperfil">Ciudad: <br /></strong><?php echo $_SESSION["ciudad"];?></td>
                                                <td class="tablas"><strong class="textosperfil">Estado Federativo: <br /></strong><?php echo $_SESSION["Estado"];?></td>
                                            </tr>
                                            <tr class="tablas">                                                
                                                <td class="tablas"><strong class="textosperfil">Codigo Postal: <br /></strong><?php echo $_SESSION["cp"];?></td>
                                                <td class="tablas"><strong class="textosperfil">Celular: <br /></strong><?php echo $_SESSION["numcasa"];?></td>
                                            </tr>
                                            <tr class="tablas">
                                                <td class="tablas"><strong class="textosperfil">Telefono: <br /></strong><?php echo $_SESSION["telefono"];?></td>
                                                <td class="tablas"><strong class="textosperfil">Correo electronico: <br /></strong><?php echo $_SESSION["email"];?></td>
                                                
                                            </tr>       
                                        </tbody>
                                    </table>
                    </form>
                        
                                    
                </div>
                <div id="cpestana2">
                   <p>hola</p>
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