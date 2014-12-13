<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
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


<hr width="100%" height="100" color="#ccc">
<hr id="hr_separador" width="100%" height="100" color="blue">
<div class="row">
<div class="large-6 large-centered columns">
<h3>Perfil</h3>
</div>
</div>
<div class="row">
<div class="large-6 large-centered columns">
	<div class="panel radius">
	
            <form method="post" action="procesar/iniciarSesion.php">
		<label>		
			<br>	
			<input type="text" id="nick" name="nombre" 	placeholder="Nombre" required>
			<input type="text" id="nick" name="apellido" placeholder="Apellido" required>
			<input type="text" id="nick" name="nick" 	placeholder="Nick Usuario" required>
			<input type="text" id="nick" name="estado" placeholder="Estado" required>
			<input type="text" id="nick" name="ciudad" placeholder="Ciudad" required>
			<input type="text" id="nick" name="calle" placeholder="Calle" required>
			<input type="text" id="nick" name="colonia" placeholder="Colonia" required>
			<input type="text" id="nick" name="numcasa" placeholder="Numero de casa" required>
			<input type="text" id="nick" name="telefono" placeholder="Telefono" required>
			<input type="text" id="nick" name="cp" placeholder="Codigo postal" required>
			<input type="text" id="nick" name="email" placeholder="Correo electronico" required>
			<button class="small round button expand" type="submit">Cambiar Contraseña</button>

			<label>
			Foto: 
			<input type="file" name="img" accept="image/*">
			
		</label>
		<br>
			</label>	
		<div  class="row">		
		<div class="large-8 large-centered columns"> 		
		<button class="small round button expand" type="submit">Aceptar</button>
		
							
		</div>
		</div>
		
	</form>
	</div>
</div>	
</div>

	


</div>
<?php
include('pie.php');
?>
</body>
</html>