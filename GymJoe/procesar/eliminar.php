<?php 
require_once 'config.php';
$sql = 'delete from ';
$paginaRetorno = '';
$resultadoRetorno = 0;


$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$id=$_GET['id_usuario'];
$elimina = mysqli_query($conexion, "delete from usuario where id_usuario=$id");

/*while($fila = mysqli_fetch_array($eliminar)){
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
	*/
mysqli_close($conexion);



echo '

<html>
<head>
<meta http-equiv="REQUEST" content="0;url=conusuario.php">
</head>
</html>
';

?>