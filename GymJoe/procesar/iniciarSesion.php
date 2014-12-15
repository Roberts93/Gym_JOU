<?php
require_once 'config.php';

session_start();
$resultadoRetorno=0;
$nick = $_POST['nick'];
$pass = $_POST['pass'];
$conexion = mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = "SELECT * FROM usuario WHERE nick='".$nick."' AND password='".$pass."'";

$cons=mysqli_query($conexion,$consulta)
or die("Error: ".  mysqli_error($conexion));

$dato=mysqli_fetch_array($cons);
$usuario=$dato[3];
$cont=$dato[4];
$img=$dato[5];
$privilegio=$dato[6];
$nombre=$dato[1];
$apellido=$dato[2];
$ciudad=$dato[10];
$estado=$dato[11];
$cp=$dato[13];
$ncasa=$dato[9];
$tel=$dato[12];
$email=$dato[14];
    if($nick==$usuario && $pass==$cont){
        $_SESSION['usuario']=$nick;
        $_SESSION['contra']=$pass;
        $_SESSION['imagen']=$img;
        $_SESSION['nombre']=$nombre;
        $_SESSION['apellido']=$apellido;
        $_SESSION['ciudad']=$ciudad;
        $_SESSION['Estado']=$estado;
        $_SESSION['cp']=$cp;
        $_SESSION['numcasa']=$ncasa;
        $_SESSION['telefono']=$tel;
        $_SESSION['email']=$email;
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