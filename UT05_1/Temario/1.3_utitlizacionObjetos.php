<?php
class Producto
{
  private static $num_productos = 0;
  private $codigo;
  public function __construct($codigo)
  {
    $this->$codigo = $codigo;
    self::$num_productos++;
  }
  public function __destruct()
  {
    self::$num_productos--;
  }
}
$p = new Producto('GALAXYS');

//Devulve la clase
echo "La clase es: " . get_class($p);
echo "</br> ->> ";
var_dump($p);

echo "</br> ->> ";

// Comprueba si existe la clase
if (class_exists('Producto')) {
  $p = new Producto('Redmi Note');
  var_dump($p);
}

// Comprueba si existe un atritbuto
echo "</br> ->> ";
if (property_exists('Producto', 'codigo')) {
  $p = new Producto('Honor One');
  var_dump($p);
} else {
  echo "El atributo 'codigo' no existe";
}
