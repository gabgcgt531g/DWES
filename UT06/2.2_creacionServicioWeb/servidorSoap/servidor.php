<?php
class Operaciones
{
  public function resta($a, $b)
  {
    return $a - $b;
  }
  public function suma($a, $b)
  {
    return $a + $b;
  }
  public function saludo($texto)
  {
    return "Hola $texto";
  }
}
$uri = 'http://localhost/unidad6/servidorSoap';
$parametros = ['uri' => $uri];
try {
  $server = new SoapServer(NULL, $parametros);
  $server->setClass('Operaciones');
  $server->handle();
} catch (SoapFault $f) {
  die("error en server: " . $f->getMessage());
}
