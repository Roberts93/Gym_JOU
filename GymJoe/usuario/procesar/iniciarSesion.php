<?php
require_once 'config.php';

session_start();

$nick = $_POST['nick'];
$pass = $_POST['pass'];
$conexion = mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = "SELECT * FROM usuario WHERE nick='{$_POST['nick']}' AND password='{$_POST['pass']}'";

$cons=mysqli_query($conexion,$consulta)
or die("Error: ".  mysqli_error($conexion));

while($dato=mysqli_fetch_array($cons)){
$usuario=$dato[3];
$cont=$dato[4];

    if($nick==$usuario && $pass==$cont){
        $_SESSION['usuario']=$usuario;
        $_SESSION['contra']=$cont;
        echo "Tu usuario es: ".$_SESSION['usuario']."<>Tu contraseña es: ".$_SESSION['contra'];
   header('location: ../usuario/index2.php');
    }else{
    echo 'El usuario no existe';   
}
   
}


?>