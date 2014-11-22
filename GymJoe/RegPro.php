<!DOCTYPE html>
<html>
<head>
	<title>Registro de Productos</title>
	<meta charset="utf-8">
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
<div class="panel2">
<h3>Registro de Productos</h3>

	<form method="post" enctype="multipart/form-data" action="procesar/insertar.php">
	<input type="hidden" name="tabla" value="productos">

	<label>			
			<input type="text" id="nick" name="id" 	placeholder="ID">
			<input type="text" id="nick" name="nombre" 	placeholder="Nombre" required>
			<input type="text" id="nick" name="marca" placeholder="Marca" required>
			<input type="text" id="nick" name="precio_publi" 	placeholder="Precio al Público" required>
			<input type="text" id="nick" name="precio_prov" 	placeholder="Precio del Proveedor" required>
			<input type="text" id="nick" name="tam" 	placeholder="Tamaño" required>
			<input type="text" id="nick" name="tipo" 	placeholder="Tipo" required>
			Foto: <input type="file" name="img" accept="image/*">
			<br>
			<br>
			<input type="text" id="nick" name="des" 	placeholder="Descripción" required>
			<label>

		</label>
		
			</label>
			<input type="submit" class="small round button" value="Guardar">
			<!--
			<button class="small round button">Guardar Datos</button>  -->
		<a href="productos.php" id="botoncito"> Cancelar</a>
      </form>
      <?php
    if(isset($_GET['res'])){
	$resultado = $_GET['res'];	
	if($resultado==1){
	?>
	<div data-alert class="alert-box success round">
  	 El producto se ha registrado correctamente  
	</div>
<?php 
}
else{
?>
	<div data-alert class="alert-box alert round">
  	 No se ha podido registrar el producto  
	</div>
<?php
}
	}
 ?>
	</div>
	</div>	
</body>
</html>