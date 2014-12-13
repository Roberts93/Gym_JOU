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

$dato=mysqli_fetch_array($cons);
$usuario=$dato[3];
$cont=$dato[4];
$img=$dato[5];
$privilegio=$dato[6];

    if($nick==$usuario && $pass==$cont){
        $_SESSION['usuario']=$nick;
        $_SESSION['contra']=$pass;
        $_SESSION['imagen']=$img;
      if($privilegio==1){
        $_SESSION['privilegios']=$privilegio;
        header('location: ../panel.php');
      }
      if($privilegio==2){
        $_SESSION['privilegios']=$privilegio;
        header('location: ../index.php');
      }
      
        //echo "El usuario existe";
       }else{
        $resultadoRetorno=1;
        header('Location: ../login.php?res='.$resultadoRetorno);
}

 mysqli_close($conexion);  



?>