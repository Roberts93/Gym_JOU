<?php
session_start();
if(isset($_SESSION['privilegios'])){
	if($_SESSION['privilegios'] ==1){
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/css/login.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
</head>
<body>


<div id="caja_principal">
<?php
include('Admin/menu.php');
?>	
<hr width="100%" height="100" color="#ccc">
<hr id="hr_separador" width="100%" height="100" color="blue">
<div class="panel2">
<h3>¿Eres Nuevo en Gym Joe?   Registrate</h3>

	<form method="post" enctype="multipart/form-data" action="procesar/insertaradm.php">
	<input type="hidden" name="tabla" value="usuario">

	<label>			
			<input type="text" id="nick" name="nombre" 	placeholder="Nombre" required>
			<input type="text" id="nick" name="apellido" placeholder="Apellido" required>
			<input type="text" id="nick" name="nick" 	placeholder="Nick Usuario" required>
			<input type="text" id="nick" name="tipousuario" 	placeholder="Tipo de usuario" required>
			<input type="password" id="password" name="pass" placeholder="Contraseña" required>
			<input type="text" id="nick" name="estado" placeholder="Estado" required>
			<input type="text" id="nick" name="ciudad" placeholder="Ciudad" required>
			<input type="text" id="nick" name="calle" placeholder="Calle" required>
			<input type="text" id="nick" name="colonia" placeholder="Colonia" required>
			<input type="text" id="nick" name="numcasa" placeholder="Numero de casa" required>
			<input type="text" id="nick" name="telefono" placeholder="Telefono" required>
			<input type="text" id="nick" name="cp" placeholder="Codigo postal" required>
			<input type="text" id="nick" name="email" placeholder="Correo electronico" required>
			<label>
			Foto: 
			<input type="file" name="img" accept="image/*">
		</label>
		
			</label>
			<input type="submit" class="small round button" value="Guardar">
			<!--
			<button class="small round button">Guardar Datos</button>  -->
		<a href="panel.php" id="botoncito"> Cancelar</a>
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
  </body>
</html>
<?php		
	}
	else{
		?>
		<!DOCTYPE html>
<html>
<head>
	<title>Pagina Inexistente</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/css/login.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
    <script type="text/javascript" src="js/Validar.js"></script> 
</head>
<body>
	<div id="caja_principal">
		<h1 style="color: black;">Lo Sentimos Está Pagina No Existe</h1>
	</div>	
</body>
<?php
if($_SESSION['privilegios']==2){
header('Location: index.php');    
}
else{
header('Location: login.php');
}
?>
</html>
		<?php
	}
}
else{
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Pagina Inexistente</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/css/login.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
    <script type="text/javascript" src="js/Validar.js"></script> 
</head>
<body>
	<div id="caja_principal">
		<h1 style="color: black;">Lo Sentimos Está Pagina No Existe</h1>
	</div>	
</body>
<?php
if($_SESSION['privilegios']==2){
header('Location: index.php');    
}
else{
header('Location: login.php');
}
?>
</html>
	<?php
}
?>