
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de usuario</title>
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
<h3>Inicio de sesion</h3>
</div>
</div>
<div class="row">
<div class="large-6 large-centered columns">
	<div class="panel radius">
	
	<form method="post">
		<label>
			Usuario:
			<input type="text" id="nick" autofocus>			
		</label>
		<label>
			Password:
			<input type="password" id="nick">
		</label>	
		<div  class="row">		
		<div class="large-8 large-centered columns"> 		
		<button class="small round button expand">Iniciar Sesion</button>
		<a href="Formulario.php" id="botoncito" > Registrate</a>
							
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