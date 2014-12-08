<?php
    require_once "../lib/nusoap.php";
      
        function getDatos($parametro1) {                    
          $dolar = 13;                  
$datos = $parametro1/$dolar;
            //return join(",", $datos);
return $datos;        
    }
      
    $server = new soap_server();
    //$server->register("getDatos");

    $server->configureWSDL("Convertidor de Pesos a Dolares!", "urn:datos");
      
    $server->register("getDatos",
        array("parametro1" => "xsd:int"),
        array("return" => "xsd:int"),
        "urn:datos",
        "urn:datos#getDatos",
        "rpc",
        "encoded",
        "Servicio web de x datos!");


if (isset($HTTP_RAW_POST_DATA)) { 
  $input = $HTTP_RAW_POST_DATA; 
}else{ 
  $input = implode("\r\n", file('php://input')); 
}
 
$server->service($input);
?>