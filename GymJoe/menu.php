<header id="cabeza">
			<div id="barra_navegacion">
			<div id="elementosmenu">
				<IMG SRC="img/logo5.png" width="250" height="50">
                <?php
                if(isset($_SESSION['usuario'])){
                echo '<a href="index.php" id="texto_usuario">'.$_SESSION['usuario']."</a>";
            }
                ?>
			<ul id="lista">
                    <li id="elementos_menu"><a href="index.php">Inicio |</a></li>
                    <li id="elementos_menu"><a  href="productos.php">Productos |</a></li>
                    <li id="elementos_menu"><a  href="Rutinas.php">Rutinas |</a></li>
                    <li id="elementos_menu"><a  href="instalaciones.php">Instalaciones |</a></li>
                    <li id="elementos_menu"><a  href="ConectaBlog.php">Blog |</a></li>
                    <li id="elementos_menu"><a href="Promociones.php">Promociones |</a></li>
                    <li id="elementos_menu"><a href="login.php">Iniciar Sesion |</a></li>
                    </ul>
                </div>
			</div>
</header>


