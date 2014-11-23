<?php
require_once 'config.php';
$nick_name=$_POST['nick'];
$pass=$_POST['pass'];

$sql2=mysql_query("SELECT * from usuario where Nick='$nick_name'");
if($val=mysql_fetch_array($sql2)){
if($pass==$val['Password']){
echo '<script>alert("Bienvenido a Gym Joe")</script>';

echo "<script>location.href='usuario/index.php'</script>";

}else
echo '<script>alert("Contraseña incorrecta")</script>';


}
?>