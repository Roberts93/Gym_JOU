<?php
session_start();
?>
<html>
<head>
    <title>Gym Joe</title>
    <link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
</head>
<body>
<div id="caja_principal">

           <?php 
           include('menu.php');
           ?>
<hr width="100%" height="100" color="#ccc">
<hr id="sep" width="100%" height="100" color="blue">

<h1>HOLA EQUIPO</h1>

<!--
AQUI PONDRAS TODA LA INFORMACION PARA LLENAR TU APARTADO, CONFORME, VALLAS LLENANDO, LA CAJA_PRINCIPAL,
IRA INCREMENTANDO AUTOMATICAMENTE......

BASATE EN EL DE RUTINAS Y YO SOLO CREE OTRO ESTILO DIFERENTE, AL QUE LLAME Rutinas.css,,
si tu ocupas otros estilos diferentes, sientete con la libertad de emplearlos, solo agrega un archivo nuevo 
con extension .css y lo referencias con el link


-->

    </div>

    <?php
    include('pie.php');
    ?>  
    </body>
</html>
