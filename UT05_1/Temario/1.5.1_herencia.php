<?php
// Con el modificador 'final' indica que no tendrá herencia
class Producto
{
  public $codigo;
  public $nombre;
  public $nombre_corto;
  public $pvp;
  public function muestra()
  {
    echo "<p> Código: " . $this->codigo . "</p>";
    echo "<p> Nombre: " . $this->nombre . "</p>";
    echo "<p> Nombre Corto: " . $this->nombre_corto . "</p>";
    echo "<p> PVP: " . $this->pvp . "</p>";
  }
}

class TV extends Producto
{
  public $pulgadas;
  public $tecnologia;
  public function muestra1()
  {
    echo "<p>" . $this->pulgadas . " pulgadas</p>";
  }
}

$ph = new TV("");
if (is_subclass_of($ph, 'Producto')) {

  $ph->codigo = "123456-A";
  $ph->nombre = "Sony Bravia";
  $ph->nombre_corto = "Bravia";
  $ph->pvp = "320$";
  $ph->pulgadas = 55;
  $ph->muestra();
  $ph->muestra1();
} else {
  echo "Error de herencia";
}
