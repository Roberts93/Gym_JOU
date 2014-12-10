<?php
    require_once "../lib/nusoap.php";
    require_once '../procesar/config.php';
        function getDatos($parametro1) {                    
          $datos = array();
          $conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
          $consulta = "select * from productos";
          $resultado = mysqli_query($conexion, $consulta);
          while ($fila=mysqli_fetch_array($resultado)) {
              array_push($datos, $fila[1]);
              array_push($datos, $fila[7]);
              array_push($datos, $fila[8]);
              array_push($datos, $fila[3]);              
          }
          mysqli_close($conexion);
          mysqli_free_result($resultado);
          return $datos;        
    }
      
    $server = new soap_server();
    //$server->register("getDatos");

    $server->configureWSDL("Convertidor de Pesos a Dolares!", "urn:datos");
      
    $server->register("getDatos",
        array("parametro1" => "xsd:string"),
        array("return" => "xsd:Array"),
        "urn:datos",
        "urn:datos#getDatos",
        "rpc",
        "encoded",
        "Servicio de Compra de Productos!");


if (isset($HTTP_RAW_POST_DATA)) { 
  $input = $HTTP_RAW_POST_DATA; 
}else{ 
  $input = implode("\r\n", file('php://input')); 
}
 
$server->service($input);
?>