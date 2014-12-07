	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="..\css\estructura.css">
    <link rel="stylesheet" type="text/css" href="..\css\menu.css">
    <link rel="stylesheet" type="text/css" href="..\css\pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="..\css\css\diseño_Tabla.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
<body>
 <div id="caja_principal2">
<?php
include('..\menu.php');
?>
<hr width="100%" height="100" color="#ccc">
<hr id="sep" width="100%" height="100" color="blue" >
<h1  id="quien" style="font-family: Bastion; color: black; margin-left:7%; margin-top: 5%; pading: 0px; ">Modificacion de Productos</h1>
<div id="texto_parrafo2">


<div class="row">
<div class="large-6 large-centered columns">
<h3>Modificacion de Productos</h3>
</div>
</div>
<div class="row" width="90%">
<div id="columna" width="90%">
<table width="29%">
<thead>
	<tr>
	    <th>ID_Producto</th>
		<th>Nombre</th>
		<th>Marca</th>
		<th>Precio al publico</th>
		<th>Precio Proveedor</th></tr>
		<tr>
		<th>Tamaño</th>
		<th>Tipo</th>
		<th>Imagen</th>
		<th>Descripcion</th>
		<th>Operaciones</th>
	</tr>
</thead>
<tbody width="98%">

<?php
session_start();

    $idp=$_GET['id_producto'];
    $nom=$_GET['nombre'];
    $mar=$_GET['marca'];
    $pre_pu=$_GET['precio_publico'];
    $pre_pro=$_GET['precio_proveedor'];
    $tama=$_GET['tamano'];  
    $tipo=$_GET['tipo'];
    $imagen=$_GET['img'];
    $desc=$_GET['descripcion'];
    require_once 'config.php';

$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from productos where id_producto='".$idp."' and nombre='".$nom."' and marca='".$mar."' and precio_publico='".$pre_pu."' and precio_proveedor='".$pre_pro."' and tamano='".$tama."' and tipo='".$tipo."' and img='".$imagen."' and descripcion='".$desc."' ");

/*
echo "
<table width'1000px';>
<thead width'800px';>
	<tr width'800';>
	    <th>ID_Producto</th>
		<th>Nombre</th>
		<th>Marca</th>
		<th>Precio_Publico</th>
		<th>Precio_Proveedor</th></tr>
		<tr>
		<th>Tamaño</th> 
		<th>Tipo</th>
		<th>Imagen</th>
		<th>Descripcion</th>
		<th>Operaciones</th>
	</tr>
</thead>
<tbody>
";
*/
while($fila = mysqli_fetch_array($consulta)){
	echo "<tr>
	<form action='modificarproductos.php' method='post' enctype='multipart/form-data'>
		<td><input type='text' name='id' value='$fila[0]' readonly></td>
		<td><input type='text' name='nombre' value='$fila[1]'></td>
		<td><input type='text' name='marca' value='$fila[2]'></td>
		<td><input type='text' name='precio_publi' value='$fila[3]'></td>
		<td><input type='text' name='precio_prov' value='$fila[4]'></td></tr>
		<tr>
		<td><input type='text' name='tam' value='$fila[5]'> </td>
		<td><input type='text' name='tipo' value='$fila[6]'></td>
		<td><input type='file' name='img' value='$fila[7]' accept='image/*'></td>		
		<td><input type='text' name='des' value='$fila[8]'></td>
		<td><input type='submit' value='actualizar'/></td>
		<input type='hidden' name='tabla' value='actualizar'/>
		</form>
	</tr>";	
}
echo "</table>";
mysqli_close($conexion);
mysqli_free_result($consulta);
?>

</tbody>
</table>
</div>	
</div>


	</div>
	</div>
</body>