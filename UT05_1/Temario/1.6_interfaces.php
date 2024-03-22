<?php
// Todos las clases que usen la intefaz tendrán el método 'muestra()
interface iMuestra
{
  public function muestra();
}

class Producto
{
  public $codigo;
  public $nombre;
  public $nombre_corto;
  public $pvp;
}

// Hereda de 'Producto' y utiliza la interfaz 'iMuestra' y añade Countable
class TV extends Producto implements iMuestra, Countable
{
  public $pulgadas;
  public $tecnologia;
  public function muestra()
  {
    echo "<p>" . $this->pulgadas . " pulgadas </p>";
    echo "<p>Código " . $this->codigo . "</p>";
    echo "<p>PVP " . $this->pvp . "</p>";
  }
}

$television = new TV("");
$television->pulgadas = 21;
$television->codigo = 1300;
$television->pvp = "210$";
$television->muestra();

// Ejemplo de implantar interface Countable
class MiClase implements Countable
{
  private $elementos = array();
  public function agregarElemento($elemento)
  {
    $this->elementos[] = $elemento;
  }

  public function count()
  {
    return count($this->elementos);
  }
}
$miObjeto = new MiClase();
$miObjeto->agregarElemento('elemento 1');
$miObjeto->agregarElemento('elemento 2');
$miObjeto->agregarElemento('elemento 3');

echo count($miObjeto); // imprime 3
