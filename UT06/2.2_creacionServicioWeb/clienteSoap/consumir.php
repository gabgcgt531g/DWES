<?php
$url = 'http://localhost/unidad6/servidorSoap/servidor.php';
$uri = 'http://localhost/unidad6/servidorSoap';
$paramSaludo = ['texto' => "Manolo"];
$param = ['a' => 51, 'b' => 29];
try {
  $cliente = new SoapClient(null, ['location' => $url, 'uri' => $uri, 'trace' => true]);
} catch (SoapFault $ex) {
  echo "Error: " . $ex->getMessage();
}
$saludo = $cliente->__soapCall('saludo', $paramSaludo);
$suma = $cliente->__soapCall('suma', $param);
$resta = $cliente->__soapCall('resta', $param);
echo $saludo . " La suma es: $suma y la resta es: $resta";
//También podríamos hacer
$saludo = $cliente->saludo("Manolo");
