<?php 
require_once 'config.php';

$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$id=$_GET['res'];
$elimina = mysqli_query($conexion, "delete from usuario where id_usuario=$id");


mysqli_close($conexion);


echo '

<html>
<head>
<meta http-equiv="REFRESH" content="0;url=../conUsuario.php">
</head>
</html>
';
?>