<?php
require '../UT08/Temario/4.6.3_Aplicacion Web/vendor/autoload.php';
$url = "http://localhost/unidad6/servidorSoap/servicio.wsdl";

try {
  $server = new SoapServer($url);
  $server->setClass('Clases\Servicio');
  $server->handle();
} catch (SoapFault $f) {
  die("error en server: " . $f->getMessage());
}
