<?php 
$sql = 'insert into ';
$paginaRetorno = '';
$resultadoRetorno = 0;

if(isset($_POST['tabla'])){

	$tabla = $_POST['tabla'];

	$sql = $sql.$tabla.' values(';

//------------------------------------TABLA USUARIOS ----------------------------------
	if($tabla == 'usuario'){
		if(isset($_POST['nombre']) && isset($_POST['apellido'])
		 && isset($_POST['nick']) && isset($_POST['pass']) && isset($_FILES['img']) && 
		 isset($_POST['calle']) && isset($_POST['colonia']) && isset($_POST['numcasa']) &&
		 isset($_POST['ciudad']) && isset($_POST['estado'])
		 && isset($_POST['telefono']) && isset($_POST['cp']) &&
		 isset($_POST['email'])){
$contador=0;

$extensionArchivo = substr($_FILES['img']['name'], strrpos($_FILES['img']['name'],'.'));			
									
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$nick = $_POST['nick'];
			$pass = $_POST['pass'];
			$tipous=$_POST['tipousuario'];
			$estado = $_POST['estado'];
			$ciudad = $_POST['ciudad'];
			$calle = $_POST['calle'];
			$colonia = $_POST['colonia'];
			$numcasa = $_POST['numcasa'];
			$telefono = $_POST['telefono'];
			$cp = $_POST['cp'];
			$email = $_POST['email'];
			$archivo =$nick.$extensionArchivo;
			
			//comprobacion
			require_once 'config.php';
			$conexion = mysqli_connect(config::$servidor, config::$usuario, 
			config::$password, config::$baseDeDatos );
			$consulta="select * from usuario";
			$resultado = mysqli_query($conexion, $consulta);

			while($fila=mysqli_fetch_array($resultado))
			{
				if($fila[3] == $nick)
				{
					$contador++;
				}
				else{}
			}
		mysqli_close($conexion);
		mysqli_free_result($resultado);


		//condicion
		if($contador == 0)
		{
			$sql = $sql."'0','$nombre','$apellido','$nick',password('$pass'),'$archivo', '$tipous', '$calle', '$colonia', '$numcasa', '$ciudad', '$estado','$telefono', '$cp', '$email')";
		    move_uploaded_file($_FILES['img']['tmp_name'],'../fotos/usuarios/'.$archivo);
				

		$paginaRetorno = 'Formulario.php';
			//$paginaRetorno = $archivo;
	}
	else{
		echo "el nombre del nick esta repetido favor de introducir otro";
				$paginaRetorno = 'Formulario.php';
	}
		}else{
			die('Error en datos: ERROR 0xU');	
		}

	}else

	//------------------------------------TABLA imagenes ----------------------------------
	if($tabla == 'imagenes'){
		if(isset($_FILES['img']) && isset($_POST['seccion'])
		 && isset($_POST['categoria'])){


$extensionArchivo = substr($_FILES['img']['name'], strrpos($_FILES['img']['name'],'.'));			
									
			$descripcion = $_POST['des'];
			$seccion = $_POST['seccion'];
			$categoria = $_POST['categoria'];			
			$archivo =$categoria.$extensionArchivo;
			$sql = $sql."'0','$archivo','$descripcion','$seccion', '$categoria')";
		    move_uploaded_file($_FILES['img']['tmp_name'],'../fotos/imagenes/'.$archivo);
				

		$paginaRetorno = 'panel.php';
			//$paginaRetorno = $archivo;
		}else{
			die('Error en datos: ERROR 0xU');	
		}

	}else

//-------------------------------------TABLA EXAMENES ------------------------------------		

	if($tabla == 'productos')
	{
		if( isset($_POST['nombre']) && isset($_POST['marca'])
			&& isset($_POST['precio_publi']) && isset($_POST['precio_prov'])
			&& isset($_POST['tam']) && isset($_POST['tipo']) && isset($_FILES['img'])
			&& isset($_POST['des']))
{
	$contador=0;
	$extensionArchivo = substr($_FILES['img']['name'], strrpos($_FILES['img']['name'],'.'));				
		$nombre= $_POST['nombre'];
		$marca= $_POST['marca'];
		$precio_publico= $_POST['precio_publi'];
		$precio_proveedor= $_POST['precio_prov'];
		$tamaño= $_POST['tam'];
		$tipo= $_POST['tipo'];
		$archivo =$nombre.$extensionArchivo;
		$descripcion= $_POST['des'];


		require_once 'config.php';
			$conexion = mysqli_connect(config::$servidor, config::$usuario, 
			config::$password, config::$baseDeDatos );
			$consulta="select * from productos";
			$resultado = mysqli_query($conexion, $consulta);

			while($fila=mysqli_fetch_array($resultado))
			{
				if($fila[1] == $nombre)
				{
					$contador++;
				}
				else{}
			}
		mysqli_close($conexion);
		mysqli_free_result($resultado);


		if($contador == 0){			

		$sql = $sql."'0','$nombre','$marca','$precio_publico','$precio_proveedor','$tamaño','$tipo','$archivo','$descripcion')";
		move_uploaded_file($_FILES['img']['tmp_name'],'../fotos/productos/'.$archivo);

		$paginaRetorno = 'regpro.php';
	}
	else{
		$paginaRetorno = 'regpro.php';
	}
}else{
	die('Error en datos: ERROR 0xE');
}}
	


	if($tabla == 'examenes'){
//if(FALSE)
if(isset($_POST['Id']) && isset($_POST['Nick'])
	&& isset($_POST['Unidad']) && isset($_POST['Estado'])
	&& isset($_POST['FechaInicio']) && isset($_POST['FechaCierre']))
{
	$id= $_POST['Id'];
	$nick= $_POST['Nick'];
	$unidad= $_POST['Unidad'];
	$estado= $_POST['Estado'];
	$fechaInicio= $_POST['FechaInicio'];
	$fechaCierre= $_POST['FechaCierre'];	
$sql = $sql."'$id','$nick',$unidad,'$estado','$fechaInicio','$fechaCierre')";

$paginaRetorno = 'regExamenes.php';
}else{
	die('Error en datos: ERROR 0xE');
}
	}
//----------------------------TABLA PREGUNTAS ---------------------------------------------



//----------------------------TABLA PREGUNTAS ---------------------------------------------


//----------------------------TABLA RESPUESTAS ---------------------------------------------


}else{
//ERROR POR NO ESPECIFICAR LA TABLA
die('La operacion no puede ser realizada: ERROR 0xT');	
}

require_once 'config.php';

$conexion = mysqli_connect(config::$servidor, config::$usuario, 
	config::$password, config::$baseDeDatos );
$resultadoRetorno = 1;
$res = mysqli_query($conexion, $sql) or $resultadoRetorno=0;

header('Location: ../'.$paginaRetorno.'?res='.$resultadoRetorno);
?>