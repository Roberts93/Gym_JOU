<?php 
require_once 'config.php';

$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$id=$_GET['id_producto'];
$elimina = mysqli_query($conexion, "delete from productos where id_producto=$id");


mysqli_close($conexion);


echo '

<html>
<head>
<meta http-equiv="REFRESH" content="0;url=../conProducto.php">
</head>
</html>
';
?>