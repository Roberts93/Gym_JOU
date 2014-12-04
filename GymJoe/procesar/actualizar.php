<?php
session_start();

    $idu=$_GET['id_usuario'];
    $nom=$_GET['nombre'];
    $ape=$_GET['apellido'];
    $nick=$_GET['nick'];
    $pass=$_GET['password'];
    $imagen=$_GET['imagen'];

    require_once 'config.php';


$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from usuario where id_usuario='".$idu."' and nombre='".$nom."' and apellido='".$ape."' and nick='".$nick."' and password='".$pass."' and img='".$imagen."'");

echo "
<table>
<thead>
	<tr>
	    <th>ID_Usuario</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Nick</th>
		<th>Password</th>
		<th>Imagen</th>
		<th>Operaciones</th>
	</tr>
</thead>
<tbody>
";

while($fila = mysqli_fetch_array($consulta)){
echo "<tr><form action='modificar.php' method='post' enctype='multipart/form-data'>
		<td>$fila[0]</td>
		<td><input type='text' name='nombre' value='$fila[1]'></td>
		<td><input type='text' name='apellido' value='$fila[2]'></td>
		<td><input type='text' name='nick' value='$fila[3]'></td>
		<td><input type='text' name='pass' value='$fila[4]'></td>
		<td><input type='file' name='img' value='$fila[5]' accept='image/*'></td>		
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