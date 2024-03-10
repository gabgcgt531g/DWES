<?php
class Producto
{
  private $codigo = 1234;
  public $nombre;
  public $pvp;
  public function muestra()
  {
    echo "Nombre: " . $this->nombre;
  }
}
echo "=>> Copia de objetos antes de PHP 5 <br>";
$p = new Producto("");
$p->nombre = "Samsung Galaxy S";
$p->muestra();

// Edición de valor de un objeto de clase
$a = $p;
$a = "Samsung Galaxy A6";
echo "<br> -> Edición: $a";

// Referencia a otra variable. Cuando cambia uno tb la otra
$b = &$a;
echo "<br> -> Referencia: $b";
// Otro ejemplo
function suma(&$v)
{
  $v++;
}
$c = 3;
suma($c);
echo "<br> -> Función Referencia: $c"; // Muestra 4

// A partir de PHP 5 para copiar un objeto no se puede utilizar '='
echo "<br> =>> Copia de objetos a partir de PHP 5 <br>";
$p2 = new Producto("");
$p2->nombre = 'Samsung Galaxy A12';
$p2->muestra();

$a2 = clone ($p2);
$a2 = "Xiaomi Redmi Note 13";
echo "<br> -> Clon:  $a2";
