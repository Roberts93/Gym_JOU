<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Mapa de Google Maps</title>
<meta name="Description" content="Mapa elemental de Google Maps para usarlo desde la PC, que se muestra a todo lo ancho y alto del navegador e incluye un cuadro de b&#250;squeda.">
<meta name ="author" content ="Norfi Carrodeguas">
<style type="text/css" media="screen">
<!--
html,body{height:100%;margin:0;padding:0;}
#map{height:92.5%;}
-->
</style>	
</head>
<body>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es&callback=iniciar"></script>

<script>
function iniciar() {
var mapOptions = {
center: new google.maps.LatLng(18.355986, -100.669881),
zoom: 15,
mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("map"),mapOptions);}		
</script>

<div id="map"></div>
<form style="float:left;" action="https://maps.google.com/?q=" method="get">
<input type="text" name="q" value="">
<input type="submit" value="Buscar en Google Maps">
</form>
<div style="float:right;">
Mas info: <a href="http://www.itshuetamo.edu.mx/" target="_blank">ITSHuetamo</a></div>
</body>
</html>
