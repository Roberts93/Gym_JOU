<?php
session_start();
require_once 'config.php';
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);

$extensionArchivo = substr($_FILES['img']['name'], strrpos($_FILES['img']['name'],'.'));

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$nick=$_POST['nick'];
$pass=$_POST['pass'];
$archivo =$nick.$extensionArchivo;
$nickantiguo=$_SESSION['nick'];
$modifica = mysqli_query($conexion, "update usuario set nombre='".$nombre."', apellido='".$apellido."', nick='".$nick."', password=password('".$pass."'), img='".$archivo."' where nick='".$nickantiguo."'");

mysqli_close($conexion);

echo '

<html>
<head>
<meta http-equiv="REFRESH" content="0;url=../conusuario.php">
</head>
</html>
';
?>