<?php 
require_once 'config.php';
class consultar{
public function consultarProductos(){
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from productos");

while($fila = mysqli_fetch_array($consulta)){
echo "<tr>
		<td>$fila[0]</td>
		<td>$fila[1]</td>
		<td>$fila[2]</td>
		<td>$fila[3]</td>
		<td>$fila[4]</td>
		<td>$fila[5]</td>
		<td>$fila[6]</td>
		<td><img src='../GymJoe/fotos/$fila[7]' width='100px' heigth='100px'></td>
		<td>$fila[8]</td>
		<td>
		<a href='javascript:void(0)' onclick='mensaje2(".$fila[0].")'>
		<img class='imagen' src='img/eli3.png'></a>

		<a href='procesar/actualizarProductos.php?id_producto=$fila[0]&nombre=$fila[1]&marca=$fila[2]&precio_publico=$fila[3]&precio_proveedor=$fila[4]&tamano=$fila[5]&tipo=$fila[6]&img=".$fila[7]."&descripcion=$fila[8]'>
		<img class='imagen' src='img/mod.png'></a>
		</td>	
	</tr>";

	
}

mysqli_close($conexion);
mysqli_free_result($consulta);
}

public function consultarLogin($nick,$pass){
$res = false;
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$comandoSQL = sprintf("select * from usuario where Nick=%s and password=%s", 
mysqli_real_escape_string($nick),mysqli_real_escape_string($pass)
	);
$consulta = mysqli_query($conexion, $comandoSQL);

if($fila = mysqli_fetch_array($consulta)){
$res = true;
}

mysqli_close($conexion);
mysqli_free_result($consulta);

return $res;
}

}

?>