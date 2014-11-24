<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta Productos</title>
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
<h3>Consulta de productos</h3>
</div>
</div>
<div class="row">
<div class="large-6 large-centered columns">
<table>
<thead>
	<tr>
	    <th>ID_Producto</th>
		<th>Nombre</th>
		<th>Marca</th>
		<th>Precio al publico</th>
		<th>Precio Proveedor</th>
		<th>Tamaño</th>
		<th>Tipo</th>
		<th>Imagen</th>
		<th>Descripcion</th>
	</tr>
</thead>
<tbody>
<?php 

require_once 'procesar/consultarProductos.php';
$con = new consultar();
$con->consultarProductos();
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