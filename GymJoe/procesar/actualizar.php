	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="..\css\estructura.css">
    <link rel="stylesheet" type="text/css" href="..\css\menu.css">
    <link rel="stylesheet" type="text/css" href="..\css\pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="..\css\css\diseño_Tabla.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>

 <body>
 <div id="caja_principal2">
<?php
include('..\menu.php');
?>
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

    $idu=$_GET['id_usuario'];
    $nom=$_GET['nombre'];
    $ape=$_GET['apellido'];
    $nick=$_GET['nick'];
    $pass=$_GET['password'];
    $imagen=$_GET['imagen'];

  
    require_once 'config.php';

$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from usuario where id_usuario='".$idu."' and nombre='".$nom."' and apellido='".$ape."' and nick='".$nick."' and password='".$pass."' and img='".$imagen."'");


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
$_SESSION['nick'] = $nick;
mysqli_close($conexion);
mysqli_free_result($consulta);
?>

</tbody>

</div>	
</div>


	</div>
	</div>
</body>