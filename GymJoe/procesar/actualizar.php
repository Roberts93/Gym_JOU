<?php
session_start();
?>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estructura.css">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="../css/css/diseño_Tabla.css">
    <script type="text/javascript" src="../js/Validar.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
 <body>
 <div id="caja_principal2">
<header id="cabeza">
			<div id="barra_navegacion">
            <div id="elementosmenu">
                <IMG SRC="../img/logo5.png" width="250" height="50">
                <?php
                if(isset($_SESSION['usuario'])){
                echo '<a href="../index.php" id="texto_usuario">'.$_SESSION['usuario']."</a>
                      <img src=''/>";
            }
                ?>
            <ul id="lista">
                    <li id="elementos_menu"><a href="../index.php">Inicio |</a></li>
                    <li id="elementos_menu"><a  href="../productos.php">Productos |</a></li>
                    <li id="elementos_menu"><a  href="../Rutinas.php">Rutinas |</a></li>
                    <li id="elementos_menu"><a  href="../instalaciones.php">Instalaciones |</a></li>
                    <li id="elementos_menu"><a  href="../ConectaBlog.php">Blog |</a></li>
                    <li id="elementos_menu"><a href="../Promociones.php">Promociones |</a></li>
                    <?php
                    if(isset($_SESSION['usuario'])){
                    ?>
                    <?php
                    if($_SESSION['privilegios']==1)
                    {
                    ?>
                    <li id="elementos_menu"><a href="../panel.php">Panel |</a></li>                    
                    <li id="elementos_menu"><a href="cerrarsesion.php">Cerrar Sesión |</a></li>                    
                    <?php                    
                    }
                    else{
                        ?>
                        <li id="elementos_menu"><a href="cerrarsesion.php">Cerrar Sesión |</a></li>                    
                        <?php
                    }
                    }
                    else{
                        ?>
                        <li id="elementos_menu"><a href="../login.php">Iniciar Sesion |</a></li>
                        <?php
                    }                    
                    ?>
                    </ul>
                </div>
            </div>
</header>
<hr width="100%" height="100" color="#ccc">
<hr id="sep" width="100%" height="100" color="blue" >
<h1  id="quien" style="font-family: Bastion; color: black; margin-left:7%; margin-top: 5%; pading: 0px; ">Modificacion de Usuarios</h1>
<div id="texto_parrafo2">


<div class="row">
<div class="large-6 large-centered columns">
<h3>Modificacion de Usuario</h3>
</div>
</div>
<div class="row">
<div id="columna">


<tbody>
<?php
session_start();

    $idu=$_GET['re'];    
  
    require_once 'config.php';

$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from usuario where id_usuario='".$idu."'");


echo "
<table width'500px'>
<thead>
	<tr>
	    <th>Id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Nick</th>
		<th>Password</th>
        </tr>
</thead>
<tbody>
";


while($fila = mysqli_fetch_array($consulta)){
echo "<tr><form action='modificar.php' method='post' enctype='multipart/form-data'>
		<td><input type='text' name='id' value='".$fila[0]."' readonly /></td>
		<td><input type='text' name='nombre' maxlength='45' required onkeypress='txLetras()' value='".$fila[1]."'></td>
		<td><input type='text' name='apellido' maxlength='45' required onkeypress='txLetras()' value='".$fila[2]."'></td>
		<td><input type='text' name='nick' maxlength='45' value='".$fila[3]."'></td>
		<td><input type='text' name='pass' maxlength='45' value='".$fila[4]."'></td>		
        </tr>

        <th>Imagen</th>   		
        <th>Tipo de Usuario</th>
        <th>Calle</th>
        <th>Colonia</th>
        <th>Numero de Casa</th>        
<tr>
<td><input type='file' name='img' value='".$fila[5]."'></td>        
<td><select name='tipo'>
        <option value='1'>Administrador</option>
        <option value='2'>Normal</option>
        </select></td>
        <td><input type='text' name='calle' maxlength='45' value='".$fila[7]."'></td>
        <td><input type='text' name='colonia' maxlength='45' value='".$fila[8]."'></td>
        <td><input type='text' name='ncasa' maxlength='8' value='".$fila[9]."' onkeypress='txNumeros()'></td>        
</tr>

        <th>Ciudad</th>
        <th>Estado</th>
        <th>Telefono de Casa</th>
        <th>CP</th>
        <th>Email</th>         

<tr>
        <td><input type='text' name='ciudad' maxlength='45' value='".$fila[10]."' onkeypress='txLetras()'></td>
        <td><input type='text' name='estado' maxlength='45' value='".$fila[11]."' onkeypress='txLetras()'></td>
        <td><input type='text' name='tel' maxlength='12' value='".$fila[12]."' onkeypress='txNumeros()'></td>
        <td><input type='text' name='cp' maxlength='6' value='".$fila[13]."' onkeypress='txNumeros()'></td>
        <td><input type='text' name='email' maxlength='45' value='".$fila[14]."'></td>
</tr>
<th>Operaciones</th>
	
		<tr>
		<td><input type='submit' value='actualizar' onclick='return validarEmail(email)'/></td>
		<input type='hidden' name='tabla' value='actualizar'/>
		</form>
	</tr>";	
}
echo "</table>";
mysqli_close($conexion);
mysqli_free_result($consulta);
?>
/
</tbody>

</div>	
</div>


	</div>
	</div>
<div style="background: url(../img/textu.jpg) no-repeat;width:100%;height:310px">
 
 <div id="info_pie">
                <h2 id="titulos_pie">Menu</h2>
                <p id="texto_pie" ><a href="../index.php">Inicio</a></p>
                <hr id="separador">
                <p id="texto_pie"><a href="../productos.php">Productos</a></p>
                <hr id="separador">
                <p id="texto_pie"><a href="../Rutinas.php">Rutinas</a></p>
                <hr id="separador">
                <p id="texto_pie"><a href="../instalaciones.php">Instalaciones</a></p>
                <hr id="separador">
                <p id="texto_pie"><a href="../ConectaBlog.php">Blog</a></p>
                <hr id="separador">
                <p id="texto_pie"><a href="../Promociones.php">Promociones</a></p>
            </div>

            <div id="info_pie">
                <h2 id="titulos_pie">Siguenos</h2>
                <hr id="separador">
                <a href="https://www.facebook.com/sportagymlifeoficial"><img src="../img/Facebook.png" width="50" height="50"></a>
                <br>
                <img src="../img/twitter.png" width="50" height="50">
                <br>
                <a href="https://plus.google.com/u/0/b/105283164262137932306/105283164262137932306/posts"><img src="../img/google.jpg" width="50" height="50"></a>
                <br>                
            </div>
            
            <div id="info_pie">
                <h2 id="titulos_pie">Contactanos</h2>
                <p id="texto_pie">Telefono: 7676720715</p>
                <hr id="separador">
                <p id="texto_pie">Direccion: Fray Juan Bautista 1009, Col. Linda Vista.</p>
                <hr id="separador"> 
                <p id="texto_pie">Correo Electronico: gymjoe@gmail.com</p>                
            </div>

	</div>
</body>