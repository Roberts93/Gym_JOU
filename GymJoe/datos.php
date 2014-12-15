<?php
session_start();
    ?>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos de la Cuenta</title>
    <link rel="stylesheet" type="text/css" href="css/estructura.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/pie_pagina.css">
    <link rel="stylesheet" type="text/css" href="css/css/login.css">
    <link rel="stylesheet" type="text/css" href="css/css/diseño_Tabla.css">
    <script type="text/javascript" src="js/Validar.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'/>
</head>
<body>
<div id="caja_principal">
<?php
include('menu.php');
?>  
<hr width="100%" height="100" color="#ccc">
<hr id="hr_separador" width="100%" height="100" color="blue">
<div class="row">
<div class="large-6 large-centered columns">
<h3>Metodo de Pago</h3>
</div>
</div>
<div class="row">
<div id="columna">
<table>
<thead>
    <tr>
        <th>Numero de Tarjeta de Credito</th>
        <th>Vencimiento</th>
        <th>CVC</th>
        <th>Operacion</th>
    </tr>
</thead>
<tbody>
<tr>
<form method="POST" action="compras.php">
    <th><input type="text" pattern=".{16,16}" maxlength="16" onkeypress="txNumeros()" required></th>
    <th><input type="month" required></th>
    <th><input type="text" pattern=".{3,3}" maxlength="3" onkeypress="txNumeros()" required></th>
    <th><input type="submit" value="Aceptar"></th>
</form>
</tr>

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