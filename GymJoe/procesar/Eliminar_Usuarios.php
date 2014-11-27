<?php 
require_once 'config.php';
class eliminar{

public function eliminarUsuarios(){
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$IDEliminar = $_GET['id'];
$eliminar = mysqli_query($conexion, "delete * from usuario where ID_Usuario==$IDEliminar");

while($fila = mysqli_fetch_array($eliminar)){
echo "<tr>
		<td>$fila[0]</td>
		<td>$fila[1]</td>
		<td>$fila[2]</td>
		<td>$fila[3]</td>
		<td>$fila[4]</td>
		<td>$fila[5]</td>
		<td>

		<?php 
		require_once 'procesar/Eliminar_Usuarios.php';
		$con = new eliminar();
		$con->eliminarUsuarios();
 		?>


		<img class='imagen' src='img/usuario_Borrar.png'>
		<img class='imagen' src='img/usuario_editar.png'>
		</td>	
	</tr>";
}
mysqli_close($conexion);
mysqli_free_result($consulta);
}

public function consultarLogin($nick,$pass){
$res = false;
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$comandoSQL = sprintf("select * from usuarios where idnick=%s and password=%s", 
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