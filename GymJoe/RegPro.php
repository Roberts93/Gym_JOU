<?php
session_start();
	if(isset($_SESSION['privilegios']))
	{
		if($_SESSION['privilegios'] ==1){			
?>
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
    <script type="text/javascript" src="js/Validar.js"></script> 
</head>
<body>
	<div id="caja_principal">
		<?php
			include('Admin/menu.php');			
		?>
		<hr width="100%" height="100" color="#ccc">

?<hr id="hr_separador" width="100%" height="100" color="blue">
<div class="panel2">
<h3>Registro de Productos</h3>

	<form method="post" enctype="multipart/form-data" action="procesar/insertar.php">
	<input type="hidden" name="tabla" value="productos">

	<label>		
			<input type="text" id="nick" name="nombre" 	placeholder="Nombre" maxlength="120" required onkeypress="txLetras()">
			<input type="text" id="nick" name="marca" placeholder="Marca" maxlength="45" required onkeypress="txLetras()">
			<input type="text" id="nick" name="precio_publi" 	placeholder="Precio al Público" maxlength="10,0" required onkeypress="return txNumerosDec(event,this);">
			<input type="text" id="nick" name="precio_prov" 	placeholder="Precio del Proveedor" maxlength="10,0" required onkeypress="return txNumerosDec(event,this);">
			<input type="text" id="nick" name="tam" 	placeholder="Tamaño" maxlength="45" required>
			<select id="nick" name="tipo">
			<option value="Aumenta Masa">Aumenta Masa</option>
			<option value="Quema Grasa">Quema Grasa</option>
			<option value="Oxido Nitrico">Oxido Nitrico</option>
			<option value="Creatina">Creatina</option>
			<option value="Glutamina">Glutamina</option>
			</select>
			<br>
			Foto: <input type="file" name="img" accept="image/*">
			<br>
			<br>
			<input type="text" id="nick" name="des" placeholder="Descripción" required>
			<label>
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
  	 El producto se ha registrado correctamente  
	</div>
<?php 
}
else{
?>
	<div data-alert class="alert-box alert round">
  	 No se ha podido registrar el producto <b>nombre repetido</b>
	</div>
<?php
}
	}
 ?>
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
		<h1>Lo Sentimos Está Pagina No Existe</h1>
	</div>	
</body>
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
</html>
	<?php
}
?>