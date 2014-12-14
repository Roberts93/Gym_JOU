<header id="cabeza">
			<div id="barra_navegacion">
			<div id="elementosmenu">
				<IMG SRC="img/logo5.png" width="250" height="50">
                <?php
                if(isset($_SESSION['usuario'])){
                echo '<a href="index.php" id="texto_usuario">'.$_SESSION['usuario']."</a>
                      <img src=''/>";
            }
                ?>
			<ul id="lista">
                    <li id="elementos_menu"><a href="index.php">Inicio |</a></li>
                    <li id="elementos_menu"><a  href="productos.php">Productos |</a></li>
                    <li id="elementos_menu"><a  href="Rutinas.php">Rutinas |</a></li>
                    <li id="elementos_menu"><a  href="instalaciones.php">Instalaciones |</a></li>
                    <li id="elementos_menu"><a  href="ConectaBlog.php">Blog |</a></li>
                    <li id="elementos_menu"><a href="Promociones.php">Promociones |</a></li>
                    <?php
                    if(isset($_SESSION['usuario'])){
                    ?>
                    <?php
                    if($_SESSION['privilegios']==1)
                    {
                    ?>
                    <li id="elementos_menu"><a href="panel.php">Panel |</a></li>                    
                    <li id="elementos_menu"><a href="procesar/cerrarsesion.php">Cerrar Sesión |</a></li>                    
                    <?php                    
                    }
                    else{
                        ?>
                        <li id="elementos_menu"><a href="procesar/cerrarsesion.php">Cerrar Sesión |</a></li>                    
                        <?php
                    }
                    }
                    else{
                        ?>
                        <li id="elementos_menu"><a href="login.php">Iniciar Sesion |</a></li>
                        <?php
                    }                    
                    ?>
                    </ul>
                </div>
			</div>
</header>


