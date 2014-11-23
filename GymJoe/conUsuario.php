<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/css/login.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
</head>
<body>
<div id="caja_principal">
<?php
include('menu.php');
?>	


<hr width="100%" height="100" color="red">
<hr id="hr_separador" width="100%" height="100" color="blue">
<div class="row">
<div class="large-6 large-centered columns">
<h3>Consulta de usuario</h3>
</div>
</div>
<div class="row">
<div class="large-6 large-centered columns">
<table>
<thead>
	<tr>
	    <th>ID_Usuario</th>
		<th>Nick</th>
		<th>Foto</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Password</th>
	</tr>
</thead>
<tbody>
<?php 

require_once 'procesar/consultar.php';
$con = new consultar();
$con->consultarUsuarios();
 ?>

<!--		<tr>
			<td>Pepe</td>
			<td>
			<img class="imagen" src="img/usuario_Borrar.png">
			<img class="imagen" src="img/usuario_editar.png">
			</td>	
		</tr>
		<tr>
			<td>Maria</td>
			<td>
			<img class="imagen" src="img/usuario_Borrar.png">
			<img class="imagen" src="img/usuario_editar.png">
			</td>	
		</tr>
		-->
</tbody>
</table>

</div>	
</div>
<?php
include('tema.php');
?>
</body>
</html>