<?php
session_start();
require_once 'procesar/config.php';
$arreglo = $_SESSION['carrito'];
$numeroventa=0;
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from ventas order by numeroventa DESC limit 1");
while ($fila=mysqli_fetch_array($consulta)) {
	$numeroventa=$fila[1];
}
if($numeroventa==0){
	$numeroventa=1;
}else{
	$numeroventa++;
}
for ($i=0;$i<count($arreglo);$i++) { 
	$consulta2=mysqli_query($conexion, "insert into ventas (numeroventa, img, nombre, precio, cantidad, subtotal) values(
		".$numeroventa.",
		'".$arreglo[$i]['Imagen']."',
		'".$arreglo[$i]['Nombre']."',
		'".$arreglo[$i]['Precio']."',
		'".$arreglo[$i]['Cantidad']."',
		'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
		)");
}
unset($_SESSION['carrito']);
mysqli_close($conexion);
header("Location: productos.php?b=0")
?>