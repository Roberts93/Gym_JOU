<?php
require_once 'config.php';

session_start();
$resultadoRetorno=0;
$nick = $_POST['nick'];
$pass = md5($_POST['pass']);
$conexion = mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = "SELECT * FROM usuario WHERE nick='".mysql_real_escape_string($nick)."' AND password='".mysql_real_escape_string($pass)."'";

$cons=mysqli_query($conexion,$consulta)
or die("Error: ".  mysqli_error($conexion));

while ($fila = mysqli_fetch_array($cons)) {
  $usuariobase = $fila[3];
  $passbase = $fila[4];
  $privilegio = $fila[6];

    if($nick==$usuariobase && $pass==$passbase){
        $_SESSION['usuario']=$nick;
        $_SESSION['contra']=$pass;
     	if($privilegio==1){
     		header('location: ../panel.php');        
        $_SESSION['privilegios']=$privilegio;
     	}
     	if($privilegio==2){
 			header('location: ../usuario/index.php');

     	}
      
        //echo "El usuario existe";
       }else{
       	$resultadoRetorno=1;
       	header('Location: ../login.php?res='.$resultadoRetorno);
}
}

 mysqli_close($conexion);  



?>