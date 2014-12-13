<?php
session_start();
if(isset($_SESSION['privilegios'])){
    if($_SESSION['privilegios'] ==1){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel de control</title>
	<link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css"> 
    <link rel="stylesheet" type="text/css" href="css/panel.css">    
    <link rel="stylesheet" type="text/css" href="css/css/login.css"> 
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
    <meta charset="UTF-8"/>    
</head>
<body>
<div id="caja_principal">
	<?php
	include('Admin/menu.php');
	?>
<hr width="100%" height="100" color="#ccc">
<hr id="sep" width="100%" height="100" color="blue">    
 <div id="ImagenPrincipal">
  <img  style="float" src="img/panel/panel.jpg" id="tamaImagen" alt="" controls>    
</div>        
 <nav class="menuizq">
            <h4>Configuración</h4>
            <ul>
                <li><a href="RegPro.php">Registrar Productos</a></li>
                <li><a href="regusuarios.php">Registrar Usuarios</a></li>
                <li><a href="conUsuario.php">Consultar Productos</a></li>
                <li><a href="conProducto.php">Consultar Usuarios</a></li>
            </ul>                           
</nav>
<div class="panel2">
    <form method="post" enctype="multipart/form-data" action="procesar/insertar.php">
    <input type="hidden" name="tabla" value="imagenes">

    <label>         
            <label>
            Foto: 
            <input type="file" name="img" accept="image/*" required>
            </label><br>
            <input type="text" id="nick" name="des"  placeholder="Descripcion" >
            <select id="nick" name="seccion" required>
            <option value="inicio">inicio</option>
            <option value="productos">productos</option>
            <option value="rutinas">rutinas</option>
            <option value="instalaciones">instalaciones</option>
            <option value="promociones">promociones</option>
            </select>
            <select id="nick" name="categoria" required>
            <option value="banner">banner</option>
            <option value="carrusel1">carrusel1</option>
            <option value="carrusel2">carrusel2</option>
            <option value="carrusel3">carrusel3</option>
            <option value="carrusel4">carrusel4</option>
            <option value="carrusel5">carrusel5</option>
            <option value="carrusel6">carrusel6</option>
            <option value="carrusel7">carrusel7</option>
            <option value="carrusel8">carrusel8</option>
            <option value="carrusel9">carrusel9</option>
            <option value="carrusel10">carrusel10</option>
            <option value="carrusel11">carrusel11</option>
            <option value="carrusel12">carrusel12</option>
            <option value="cuerpo">cuerpo</option>
            </select>
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
     Se subio correctamente la imagen
    </div>
<?php 
}
else{
?>
    <div data-alert class="alert-box alert round">
     No se ha podido subir la imagen
    </div>
<?php
}
    }
 ?>
    </div>
</div>
<?php
    include('pie.php');
    ?>
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