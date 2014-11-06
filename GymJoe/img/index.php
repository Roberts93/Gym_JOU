<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gym Joe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/plantilla.css">
        <link rel="stylesheet"  href="css/menu.css">
        <link rel="stylesheet" href="css/textos.css">
    </head>
    <body background="img/Textura.jpg">
        
        <div>
            <?php
            include('menu.php');
            ?>
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


        </div>
    </body>
</html>
