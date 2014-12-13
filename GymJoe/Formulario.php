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
			<input type="text" id="nick" name="nombre" 	placeholder="Nombre" maxlength="45" required onkeypress="txLetras()">
			<input type="text" id="nick" name="apellido" placeholder="Apellido" maxlength="45" required onkeypress="txLetras()">
			<input type="text" id="nick" name="nick" 	placeholder="Nick Usuario" maxlength="45" required >
			<input type="password" id="password" name="pass" placeholder="Contraseña" maxlength="45" required>
			<input type="text" id="nick" name="estado" placeholder="Estado" maxlength="45" required onkeypress="txLetras()">
			<input type="text" id="nick" name="ciudad" placeholder="Ciudad" maxlength="45" required onkeypress="txLetras()">
			<input type="text" id="nick" name="calle" placeholder="Calle" maxlength="45" required onkeypress="txLetras()">
			<input type="text" id="nick" name="colonia" placeholder="Colonia" maxlength="45" required onkeypress="txLetras()">
			<input type="text" id="nick" name="numcasa" placeholder="Numero de casa" maxlength="11" required onkeypress="txNumeros()">
			<input type="text" id="nick" name="telefono" placeholder="Telefono"  maxlength="11" required onkeypress="txNumeros()" >
			<input type="text" id="nick" name="cp" placeholder="Codigo postal" maxlength="5" onclick="return validar" required onkeypress="txNumeros()">
			<input type="text" id="nick" name="email" placeholder="Correo electronico" maxlength="45" required >
			<label>
			Foto: 
			<input type="file" name="img" accept="image/*">
		</label>
		
			</label>
			<input type="submit" class="small round button" value="Guardar" onclick="return validarEmail(email)">
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
  	 No se ha podido registrar el usuario  <b>nick repetido</b>
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