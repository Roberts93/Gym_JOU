<?php 

class consultar{



public function consultarUsuarios(){
$conexion =  mysqli_connect("localhost", "root", "corazon", "gymnasio");
$consulta = mysqli_query($conexion, "select * from usuarios");

while($fila = mysqli_fetch_array($consulta)){
echo "<tr>
		<td>$fila[0]</td>
		<td><img src='fotos/$fila[2]' width='100px' heigth='100px'></td>
		<td>
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
$conexion =  mysqli_connect("localhost", "root", "binario", "examenes");
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