<?php 
$sql = 'insert into ';
$paginaRetorno = '';
$resultadoRetorno = 0;

if(isset($_POST['tabla'])){

	$tabla = $_POST['tabla'];

	$sql = $sql.$tabla.' values(';

//------------------------------------TABLA USUARIOS ----------------------------------
	if($tabla == 'usuario'){
		if(isset($_POST['nick']) && isset($_POST['nombre']) && isset($_POST['apellido']) 
			&& isset($_POST['pass']) && isset($_FILES['foto'])){

$extensionArchivo  =  substr($_FILES['foto']['name'], strrpos($_FILES['foto']['name'],'.'));


			$nick = $_POST['nick'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$pass = $_POST['pass'];
			$archivo =$nick.$extensionArchivo;
			$sql = $sql."('$nick','$nombre','$apellido',password('$pass'),'$archivo')";
		     move_uploaded_file($_FILES['foto']['tmp_name'],'../fotos/'.$archivo);
				

		$paginaRetorno = 'Formulario.php';
			//$paginaRetorno = $archivo;
		}else{
			die('Error en datos: ERROR 0xU');	
		}
	}

require_once 'config.php';

$conexion = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);
$resultadoRetorno = 1;
$res  = mysqli_query($conexion, $sql) or $resultadoRetorno=0;

header('Location: ../'.$paginaRetorno.'?res='.$resultadoRetorno);

?>