<html>
<head>
	<title>ADMINISTRADOR</title>
	<link rel="stylesheet" href="css/Portada.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<?php
	$mysqli=new mysqli("localhost","root","corazon","gymnasio"); 
	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>
	
<center><h1><font face="Adobe Fan Heiti Std B" size="7" color="white">
Bienvenido Administrador GYM JOE </font></h1></center>

<body background="img/colores.jpg" style="background-repeat: no-repeat; width:'100%';">
<div id="caja_principal">


<div class="row">
<div class="large-6 large-centered columns">
<h3>Inicio de sesion Administrador</h3>
</div>
</div>
<div class="row">
<div class="large-6 large-centered columns">
	<div class="panel radius">
	
	<form method="post" action="login1.php">
		<label>
			Usuario Administrador:
			<input type="text" name="usuario" autofocus required>			
		</label>
		<label>
			Password:
			<input type="password" name="password" required>
		</label>	
		<div  class="row">		
		<div class="large-8 large-centered columns"> 		
		<button class="small round button expand">Ingresar</button>
							
		</div>
		</div>	
	</form>
	</div>
</div>	
</div>



</div>
</body>
</html>