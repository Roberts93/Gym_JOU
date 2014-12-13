	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estructura.css">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="../css/css/diseño_Tabla.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
 <body>
 <div id="caja_principal2">
<header id="cabeza">
			<div id="barra_navegacion">
			<div id="elementosmenu">
				<IMG SRC="../img/logo5.png" width="250" height="50"></IMG>
			<ul id="lista">
                    <li id="elementos_menu"><a href="../index.php">Inicio |</a></li>
                    <li id="elementos_menu"><a  href="../productos.php">Productos |</a></li>
                    <li id="elementos_menu"><a  href="../Rutinas.php">Rutinas |</a></li>
                    <li id="elementos_menu"><a  href="../instalaciones.php">Instalaciones |</a></li>
                    <li id="elementos_menu"><a  href="../ConectaBlog.php">Blog |</a></li>
                    <li id="elementos_menu"><a href="../Promociones.php">Promociones |</a></li>
                    <li id="elementos_menu"><a href="../login.php">Iniciar Sesion |</a></li>
                    <li id="elementos_menu"><a href="../panel.php">Panel de Control</a></li>
                    </ul>
                </div>
			</div>
</header>
<hr width="100%" height="100" color="#ccc">
<hr id="sep" width="100%" height="100" color="blue" >
<h1  id="quien" style="font-family: Bastion; color: black; margin-left:7%; margin-top: 5%; pading: 0px; ">Modificacion de Usuarios</h1>
<div id="texto_parrafo2">


<div class="row">
<div class="large-6 large-centered columns">
<h3>Modificacion de Usuario</h3>
</div>
</div>
<div class="row">
<div id="columna">


<tbody>
<?php
session_start();

    $idu=$_GET['re'];    
  
    require_once 'config.php';

$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from usuario where id_usuario='".$idu."'");


echo "
<table width'500px'>
<thead>
	<tr>
	    <th>ID_Usuario</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Nick</th>
		<th>Password</th>
		<th>Imagen</th></tr>
			
</thead>
<tbody>
";


while($fila = mysqli_fetch_array($consulta)){
echo "<tr><form action='modificar.php' method='post' enctype='multipart/form-data'>
		<td>$fila[0]</td>
		<td><input type='text' name='nombre' value='$fila[1]'></td>
		<td><input type='text' name='apellido' value='$fila[2]'></td>
		<td><input type='text' name='nick' value='$fila[3]'></td>
		<td><input type='text' name='pass' value='$fila[4]'></td>
		<td><input type='file' name='img' value='$fila[5]' accept='image/*'></td></tr>		

<th>Operaciones</th>
	
		<tr>
		<td><input type='submit' value='actualizar'/></td>
		<input type='hidden' name='tabla' value='actualizar'/>
		</form>
	</tr>";	
}
echo "</table>";
//$_SESSION['nick'] = $nick;
mysqli_close($conexion);
mysqli_free_result($consulta);
?>
/
</tbody>

</div>	
</div>


	</div>
	</div>
<div style="background: url(../img/textu.jpg) no-repeat;width:100%;height:310px">
 
 <div id="info_pie">
                <h2 id="titulos_pie">Menu</h2>
                <p id="texto_pie" ><a href="../index.php">Inicio</a></p>
                <hr id="separador">
                <p id="texto_pie"><a href="../productos.php">Productos</a></p>
                <hr id="separador">
                <p id="texto_pie"><a href="../Rutinas.php">Rutinas</a></p>
                <hr id="separador">
                <p id="texto_pie"><a href="../instalaciones.php">Instalaciones</a></p>
                <hr id="separador">
                <p id="texto_pie"><a href="../ConectaBlog.php">Blog</a></p>
                <hr id="separador">
                <p id="texto_pie"><a href="../Promociones.php">Promociones</a></p>
            </div>

            <div id="info_pie">
                <h2 id="titulos_pie">Siguenos</h2>
                <hr id="separador">
                <a href="https://www.facebook.com/sportagymlifeoficial"><img src="../img/Facebook.png" width="50" height="50"></a>
                <br>
                <img src="../img/twitter.png" width="50" height="50">
                <br>
                <a href="https://plus.google.com/u/0/b/105283164262137932306/105283164262137932306/posts"><img src="../img/google.jpg" width="50" height="50"></a>
                <br>                
            </div>
            
            <div id="info_pie">
                <h2 id="titulos_pie">Contactanos</h2>
                <p id="texto_pie">Telefono: 7676720715</p>
                <hr id="separador">
                <p id="texto_pie">Direccion: Fray Juan Bautista 1009, Col. Linda Vista.</p>
                <hr id="separador"> 
                <p id="texto_pie">Correo Electronico: gymjoe@gmail.com</p>                
            </div>

	</div>
</body>