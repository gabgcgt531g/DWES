<?php
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
  public $tipo;
  public $pulgadas;

  public function muestraTV()
  {
    echo "<p> Tipo: " . $this->tipo . "</p>";
    echo "<p> Pulgadas: " . $this->pulgadas . "</p>";
  }
}

$t = new TV("");
if ($t instanceof Producto) {
  // Este código se ejecuta pues la condición es cierta.

  $t->codigo = 12345;
  $t->nombre = "Samsung Baviera";
  $t->nombre_corto = "Bavi";
  $t->pvp = "2300$";
  $t->muestra();

  $t->tipo = "SmartTV";
  $t->pulgadas = 55;
  $t->muestraTV();
}

class phone extends Producto
{
  public $tipo;
  public $cobertura;

  public function muestraPh()
  {
    echo "<p> Tipo: " . $this->tipo . "</p>";
    echo "<p> Cobertura: " . $this->cobertura . "</p>";
  }
}

$ph = new phone("");
if ($ph instanceof Producto) {
  // Este código se ejecuta pues la condición es cierta.

  $ph->codigo = 67890;
  $ph->nombre = "Samsung Galaxy";
  $ph->nombre_corto = "S7";
  $ph->pvp = "230$";
  $ph->muestra();

  $ph->tipo = "SmartPhone";
  $ph->cobertura = "5G";
  $ph->muestraPh();
}
