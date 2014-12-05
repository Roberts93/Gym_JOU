<?php
session_start();
require_once 'config.php';
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);

$extensionArchivo = substr($_FILES['img']['name'], strrpos($_FILES['img']['name'],'.'));

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$pre_pu=$_POST['precio_publi'];
$pre_pro=$_POST['precio_prov'];
$tama=$_POST['tam'];
$tipo=$_POST['tipo'];
$archivo =$nombre.$extensionArchivo;
$descripcion=$_POST['des'];
$modifica = mysqli_query($conexion, "update productos set nombre='".$nombre."', marca='".$marca."', precio_publico='".$pre_pu."', precio_proveedor='".$pre_pro."', tamano='".$tama."' , tipo='".$tipo."' , img='".$archivo."', descripcion='".$descripcion."' where id_producto='".$id."'");

mysqli_close($conexion);


echo '

<html>
<head>
<meta http-equiv="REFRESH" content="0;url=../conProducto.php">
</head>
</html>
';
?>