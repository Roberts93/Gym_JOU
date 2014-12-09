<?php 
require_once 'config.php';
class consultar{
	
public function consultarUsuarios(){
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from usuario");

while($fila = mysqli_fetch_array($consulta)){
echo "<tr>
		<td>$fila[0]</td>
		<td>$fila[1]</td>
		<td>$fila[2]</td>
		<td>$fila[3]</td>
		<td>$fila[4]</td>
		<td><img src='../GymJoe/fotos/usuarios/$fila[5]' width='100px' heigth='100px'></td>
		<td>
		<a href='javascript:void(0)' onclick='mensaje(".$fila[0].")'>
		<img class='imagen' src='img/usuario_Borrar.png'></a>
		<a href='procesar/actualizar.php?id_usuario=$fila[0]&nombre=$fila[1]&apellido=$fila[2]&nick=$fila[3]&password=$fila[4]&imagen=".$fila[5]."'>
		<img class='imagen' src='img/usuario_editar.png'></a>
		</td>	
	</tr>";
}
mysqli_close($conexion);
mysqli_free_result($consulta);
}

public function consultarProductos(){
	$conexion = mysqli_connect(config::$servidor, config::$usuario,config::$password,config::$baseDeDatos);
	$consulta = mysqli_query($conexion, "select * from productos");
	while ($fila = mysqli_fetch_array($consulta)) {
		echo "<tr>
				<td>$fila[0]</td>
				<td>$fila[1]</td>
				<td>$fila[2]</td>
				<td>$fila[3]</td>
				<td>$fila[4]</td>
				<td>$fila[5]</td>
				<td>$fila[6]</td>
				<td><img src='../GymJoe/fotos/productos/$fila[7]' width='100px' heigth='100px'></td>
				<td>$fila[8]</td>
				<td>
				<a href='javascript:void(0)' onclick='mensaje2(".$fila[0].")'>
				<img class='imagen' src='img/usuario_Borrar.png'></a></td>
				<td><img class='imagen' src='usuario_editar.png'></td>
			  </tr>";
	}
	mysqli_close($conexion);
	mysqli_free_result($consulta);
}

public function consultarquema(){
	$conexion = mysqli_connect(config::$servidor, config::$usuario,config::$password,config::$baseDeDatos);
	$consulta = mysqli_query($conexion, "select * from productos where tipo='Quema Grasa'");
	while ($fila = mysqli_fetch_array($consulta)) {				
		echo "
		<figure id='prod'>
		<img src='../GymJoe/fotos/productos/$fila[7]' width='60%' heigth='60%'/>
			  <figcaption>
			  <p>$fila[1]</p>
			  <p>$fila[5]</p>
			  <p>$fila[3]</p>			  
			  <button class='botoncito'>Agregar</button>
			  </figcaption>
			  </figure>
			  ";				  
	}
	mysqli_close($conexion);
	mysqli_free_result($consulta);
}

public function consultaraumen(){
	$conexion = mysqli_connect(config::$servidor, config::$usuario,config::$password,config::$baseDeDatos);
	$consulta = mysqli_query($conexion, "select * from productos where tipo='Aumenta Masa'");
	while ($fila = mysqli_fetch_array($consulta)) {				
		echo "
		<figure id='prod'>
		<img src='../GymJoe/fotos/productos/$fila[7]' width='60%' heigth='60%'/>
			  <figcaption>
			  <p>$fila[1]</p>
			  <p>$fila[5]</p>
			  <p>$fila[3]</p>			  
			  <button class='botoncito'>Agregar</button>
			  </figcaption>
			  </figure>
			  ";				  
	}
	mysqli_close($conexion);
	mysqli_free_result($consulta);
}

public function consultarnos(){
	$conexion = mysqli_connect(config::$servidor, config::$usuario,config::$password,config::$baseDeDatos);
	$consulta = mysqli_query($conexion, "select * from productos where tipo='Oxido Nitrico'");
	while ($fila = mysqli_fetch_array($consulta)) {				
		echo "
		<figure id='prod'>
		<img src='../GymJoe/fotos/productos/$fila[7]' width='60%' heigth='60%'/>
			  <figcaption>
			  <p>$fila[1]</p>
			  <p>$fila[5]</p>
			  <p>$fila[3]</p>			  
			  <button class='botoncito'>Agregar</button>
			  </figcaption>
			  </figure>
			  ";				  
	}
	mysqli_close($conexion);
	mysqli_free_result($consulta);
}

public function consultarglu(){
	$conexion = mysqli_connect(config::$servidor, config::$usuario,config::$password,config::$baseDeDatos);
	$consulta = mysqli_query($conexion, "select * from productos where tipo='Glutamina'");
	while ($fila = mysqli_fetch_array($consulta)) {				
		echo "
		<figure id='prod'>
		<img src='../GymJoe/fotos/productos/$fila[7]' width='60%' heigth='60%'/>
			  <figcaption>
			  <p>$fila[1]</p>
			  <p>$fila[5]</p>
			  <p>$fila[3]</p>			  
			  <button class='botoncito'>Agregar</button>
			  </figcaption>
			  </figure>
			  ";				  
	}
	mysqli_close($conexion);
	mysqli_free_result($consulta);
}

public function consultarcrea(){
	$conexion = mysqli_connect(config::$servidor, config::$usuario,config::$password,config::$baseDeDatos);
	$consulta = mysqli_query($conexion, "select * from productos where tipo='Creatina'");
	while ($fila = mysqli_fetch_array($consulta)) {				
		echo "
		<figure id='prod'>
		<img src='../GymJoe/fotos/productos/$fila[7]' width='60%' heigth='60%'/>
			  <figcaption>
			  <p>$fila[1]</p>
			  <p>$fila[5]</p>
			  <p>$fila[3]</p>			  
			  <button class='botoncito'>Agregar</button>
			  </figcaption>
			  </figure>
			  ";				  
	}
	mysqli_close($conexion);
	mysqli_free_result($consulta);
}

public function consultarbus(){
if(isset($_POST['nombre'])){
                    $conexion = mysqli_connect(config::$servidor, config::$usuario,config::$password,config::$baseDeDatos);    
                    $n=$_POST['nombre'];
                    $consulta = mysqli_query($conexion, "select * from productos where (nombre like '$n%') or (tipo like '$n%')");
                    while ($fila = mysqli_fetch_array($consulta)) {             
                    echo "
                    <figure id='prod'>
                    <img src='../GymJoe/fotos/productos/$fila[7]' width='60%' heigth='60%'/>
                    <figcaption>
                    <p>$fila[1]</p>
                    <p>$fila[5]</p>
                    <p>$fila[3]</p>             
                    <button class='botoncito'>Agregar</button>
                    </figcaption>
                    </figure>
                    ";                  
                    }
                    mysqli_close($conexion);
                    mysqli_free_result($consulta);
                    }                    	
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