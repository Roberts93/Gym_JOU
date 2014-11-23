<!DOCTYPE html>
<html>
<head>
    <title>Gym Joe</title>
    <link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/productos.css">
    <link rel="stylesheet" type="text/css" href="css/css/login.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
    <meta charset="UTF-8"/>    
</head>
<body>
<div id="caja_principal">
           <?php
           include('menu.php');
           ?>
<hr width="100%" height="100" color="red">
<hr id="sep" width="100%" height="100" color="blue">
<div class="row">
  <div class="large-6 large-centered columns">
    <h3>Consulta de Productos</h3>
  </div>
</div>
<div class="row">
<div class="large-6 large-centered columns">
  <table>
    <thead>
    <td>ID</td>
    <td>Nombre</td>
    <td>Marca</td>
    <td>Precio Publico</td>
    <td>Precio Proveedor</td>
    <td>Tamaño</td>
    <td>Tipo</td>
    <td>Imagen</td>
    <td>Descripción</td>
    </thead>
    <tbody>
      <?php 

require_once 'procesar/consultar.php';
$conp = new consultar();
$conp->consultarProductos();
 ?>
    </tbody>
  </table>
</div>  
</div>
</div>
<?php
    include('pie.php');
    ?>
</body>
</html>