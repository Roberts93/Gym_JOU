<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/css/login.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
    <script type="text/javascript" src="js/Validar.js"></script> 
</head>
<body>


<div id="caja_principal">
<?php
include('menu.php');
?>	
<hr width="100%" height="100" color="#ccc">
<hr id="hr_separador" width="100%" height="100" color="blue">
<div class="panel2">
<h3>¿Eres Nuevo en Gym Joe?   Registrate</h3>

	<form method="post" enctype="multipart/form-data" action="procesar/insertar.php">
	<input type="hidden" name="tabla" value="usuario">

	<label>			
			<input type="text" id="nick" name="nombre" 	placeholder="Nombre" required onkeypress="return txLetras()">
			<input type="text" id="nick" name="apellido" placeholder="Apellido" required onkeypress="return txLetras()">
			<input type="text" id="nick" name="nick" 	placeholder="Nick Usuario" required>
			<input type="password" id="password" name="pass" placeholder="Contraseña" required>
			<input type="text" id="nick" name="estado" placeholder="Estado" required onkeypress="return txLetras()">
			<input type="text" id="nick" name="ciudad" placeholder="Ciudad" required onkeypress="return txLetras()">
			<input type="text" id="nick" name="calle" placeholder="Calle" required onkeypress="return txLetras()">
			<input type="text" id="nick" name="colonia" placeholder="Colonia" required onkeypress="txLetras()">
			<input type="text" id="nick" name="numcasa" placeholder="Numero de casa" required onkeypress="return txNumeros()">
			<input type="text" id="nick" name="telefono" placeholder="Telefono" required onkeypress="return txNumeros()">
			<input type="text" id="nick" name="cp" placeholder="Codigo postal" required onkeypress="return txNumeros()">
			<input type="text" id="nick" name="email" placeholder="Correo electronico" required>
			<label>
			Foto: 
			<input type="file" name="img" accept="image/*">
		</label>
		
			</label>
			<input type="submit" class="small round button" value="Guardar">
			<!--
			<button class="small round button">Guardar Datos</button>  -->
		<a href="login.php" id="botoncito"> Cancelar</a>
      </form>
      <?php
    if(isset($_GET['res'])){
	$resultado = $_GET['res'];	
	if($resultado==1){
	?>
	<div data-alert class="alert-box success round">
  	 El usuario se ha registrado correctamente  
	</div>
<?php 
}
else{
?>
	<div data-alert class="alert-box alert round">
  	 No se ha podido registrar el usuario  
	</div>
<?php
}
	}
 ?>
	</div>
</div>	
</div>







<?php
include('pie.php');
?>
  </body>
</html>