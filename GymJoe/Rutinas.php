<!DOCTYPE html>

<html>
    <head>
        <title>Rutinas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/plantilla.css">
        <link rel="stylesheet"  href="css/menu.css">
        <link rel="stylesheet" href="css/textos.css">
        <link rel="stylesheet" href="css/Rutinas.css">
    </head>
    <body>
        
              <?php
include('menu.php');
?>	

<h2>Rutinas Basicas para tu cuerpo!!</h2>
<header >
<img src="img/1.jpg" id="img" width="320" height="200" controls>
<a id="img">Como Mejorar la Resistencia?</a>
<br>
<b>Tips y recomendaciones basicas</b>
<hr>
</header>

<br>

<header id="pocision">
<img src="img/2.jpg" width="200" height="150" id="pocision" controls>
<p><b>¿Que es el sobre entrenamiento?</b></p>
</header>

<header id="pocision">
<img src="img/3.jpg" width="200" height="150" controls id="pocision">
<p><b>¿Quieres Probar una rutina diferente?</b></p>
</header>
   

         <aside id="usuario">
                <a class="titulos">Usuarios</a>
                <hr>
                <section id="secusu">
                <a class="tex">Usuario: </a>
                <input type="text" value="Nombre usuario">
                </section>
                <section id="secpass">
                <a class="tex">Contraseña: </a>
                <input type="password" value="Contraseña">
                </section>
                
                <input class="boton" type="button" value="Iniciar Sesion">
            </aside>
    </body>
</html>
