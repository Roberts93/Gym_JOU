<?php
session_start();
require_once 'config.php';
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);

$extensionArchivo = substr($_FILES['img']['name'], strrpos($_FILES['img']['name'],'.'));

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$nick=$_POST['nick'];
$pass=$_POST['pass'];
$archivo =$nick.$extensionArchivo;
$tipo=$_POST['tipo'];
$calle=$_POST['calle'];
$colonia=$_POST['colonia'];
$ncasa=$_POST['ncasa'];
$ciudad=$_POST['ciudad'];
$estado=$_POST['estado'];
$tel=$_POST['tel'];
$cp=$_POST['cp'];
$email=$_POST['email'];
$modifica = mysqli_query($conexion, "update usuario set nombre='".$nombre."', apellido='".$apellido."', nick='".$nick."', password='".$pass."', img='".$archivo."' , tipo_usuario='".$tipo."' , calle='".$calle."', colonia='".$colonia."', n_casa='".$ncasa."', municipio='".$ciudad."', estado='".$estado."', telefono='".$tel."', cp='".$cp."', email='".$email."' where id_usuario='".$id."'");
move_uploaded_file($_FILES['img']['tmp_name'],'../fotos/usuarios/'.$archivo);
mysqli_close($conexion);

echo '

<html>
<head>
<meta http-equiv="REFRESH" content="0;url=../conUsuario.php">
</head>
</html>
';
?>4