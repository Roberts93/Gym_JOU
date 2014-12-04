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

echo "
<table>
<thead>
	<tr>
	    <th>ID_Producto</th>
		<th>Nombre</th>
		<th>Marca</th>
		<th>Precio_Publico</th>
		<th>Precio_Proveedor</th>
		<th>Tamaño</th>
		<th>Tipo</th>
		<th>Imagen</th>
		<th>Descripcion</th>
		<th>Operaciones</th>
	</tr>
</thead>
<tbody>
";

while($fila = mysqli_fetch_array($consulta)){
echo "<tr><form action='modificarProductos.php' method='post' enctype='multipart/form-data'>
		<td>$fila[0]</td>
		<td><input type='text' name='nombre' value='$fila[1]'></td>
		<td><input type='text' name='marca' value='$fila[2]'></td>
		<td><input type='text' name='precio_publi' value='$fila[3]'></td>
		<td><input type='text' name='precio_prov' value='$fila[4]'></td>
		<td><input type='text' name='tam' value='$fila[5]'></td>
		<td><input type='text' name='tipo' value='$fila[6]'></td>
		<td><input type='file' name='img' value='$fila[7]' accept='image/*'></td>
		<td><input type='text' name='des' value='$fila[8]'></td>		
		<td><input type='submit' value='actualizar'/></td>
		<input type='hidden' name='tabla' value='actualizar'/>
		</form>
	</tr>";	
}
echo "</table>";
$_SESSION['nick'] = $nick;
mysqli_close($conexion);
mysqli_free_result($consulta);
?>