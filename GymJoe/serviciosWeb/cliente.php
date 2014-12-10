<?php
    require_once "../lib/nusoap.php";
    
    //$cliente = new nusoap_client("http://localhost:8080/localtest/serviciosWeb/servicio.php");
    
    $cliente = new nusoap_client("servicio.wsdl",true);
    
    $error = $cliente->getError();
    if ($error) {
        echo "<h2>Error:</h2>" . $error;
    }
      //$parametro1 = $_POST['cantidad'];    
    $result = $cliente->call("getDatos");

//for($i=0;$i<count($result);$i++)
//{
        $nombre=$result[0];
        $imagen=$result[1];
        $descripcion=$result[2]; 
        $precio=$result[3];   
if($result == null)
   echo "Datos nulos!";
else{
    if ($cliente->fault) {
        echo "<h2>Fault: Error en el servicio</h2>";
        print_r($result);        
    }
    else {
        $error = $cliente->getError();
        if ($error) {
            echo "<h2>Error:</h2>" . $error;
        }
        else {
            echo "<div style='display:inline-block;'>
            <a href='../productos.php'><img src='../fotos/productos/".$imagen."' style='height=100%; width=100%'/></a
            <p>".$nombre."</p>
            <p>".$descripcion."</p>
            </div>";
            }                        
        }
    }
  //  }  
?>