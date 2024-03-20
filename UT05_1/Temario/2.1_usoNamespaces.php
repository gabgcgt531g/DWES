<?php
include "2.1_ejemploNamespaces.php";

use const Proyecto\E;
use function Proyecto\saludo;
use Proyecto\Prueba;
// ahora ya podemos usarlos
echo E;
echo "\n";
saludo();
echo "\n";
$prueba = new Prueba();
$prueba->probando();
