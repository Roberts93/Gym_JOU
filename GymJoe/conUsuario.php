<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/css/login.css">
    <link rel="stylesheet" type="text/css" href="css/css/diseño_Tabla.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>    
    <script type="text/javascript">
    function mensaje(id){
    	var res=confirm("¿Está seguro de eliminar este registro?");
    	if(res==true){
    		window.location="procesar/eliminar.php?res="+id;
    	}
    }
    </script>
</head>
<body>
<div id="caja_principal">
<?php
include('Admin/menu.php');
?>	
<hr width="100%" height="100" color="red">
<hr id="sep" width="100%" height="100" color="blue">

<div class="row">
<div class="large-6 large-centered columns">
<h3>Consulta de usuario</h3>
</div>
</div>
<div class="row">
<div id="columna">
<table>
<thead>
	<tr>
	    <th>ID_Usuario</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Nick</th>
		<th>Password</th>
		<th>Imagen</th>
		<th>Operaciones</th>
	</tr>
</thead>
<tbody>
<?php 
require_once 'procesar/consultar.php';
$con = new consultar();
$con->consultarUsuarios();
 ?>

</tbody>
</table>

</div>	
</div>
</div>

</body>
</html>