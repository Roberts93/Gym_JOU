<?php 
	require_once('config.php');
	$id=$_GET['id'];      
        	?> 

        	<script language="javascript"> 
alert("Esta seguro que quiere Eliminar este Usuario .");
window.location="consultar.php";
</script> 
<?php 
	$query="DELETE FROM usuario WHERE ID_Usuario='$id'";
	$resultado=$mysqli->query($query);	
?>
<html>
	<head>
		<title>Eliminar usuario</title>
	</head>
	
	<body background="2.png">
		<center>
			<?php 
				if($resultado>0){
				?>
				<?php 	}else{ ?>
				<h1>Error al Eliminar Usuario</h1>	
			<?php	} ?>
			<p></p>		
				
		</center>
	</body>
</html>