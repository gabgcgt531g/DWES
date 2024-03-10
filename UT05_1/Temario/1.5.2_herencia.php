<?php
class Producto
{
  public $codigo;
  public $nombre;
  public $nombre_corto;
  public $pvp;
  public function __construct($row)
  {
    $this->codigo = $row['cod'];
    $this->nombre = $row['nombre'];
    $this->nombre_corto = $row['nombre_corto'];
    $this->PVP = $row['pvp'];
  }
}

class TV extends Producto
{
  public $pulgadas;
  public $tecnologia;
  public function __construct($row)
  {
    parent::__construct($row); //llama al constructor de la clase padre
    $this->pulgadas = $row['pulgadas'];
    $this->tecnologia = $row['tecnologia'];
  }
  public function muestra()
  {
    echo "<p>" . $this->pulgadas . " pulgadas</p>";
  }
}

// Crear un array asociativo con los datos del producto
$producto_data = array(
  'cod' => 'ABC123',
  'nombre' => 'Producto de ejemplo',
  'nombre_corto' => 'Ejemplo',
  'pvp' => 9.99,
);

// Crear una nueva instancia de la clase Producto y pasarle los datos del producto
$producto = new Producto($producto_data);

// Recorrer el array asociativo con un bucle foreach
foreach ($producto_data as $clave => $valor) {
  echo "La clave es: $clave y el valor es: $valor <br>";
}
