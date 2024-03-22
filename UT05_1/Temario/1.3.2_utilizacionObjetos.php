<?php
// Utilización de operadores '==' y '===' prara comparar valores de los atributos
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

$p = new Producto("");
$p->nombre = 'Samsung Galaxy A6';
$a = clone ($p);
// El resultado de comparar $a == $p da verdadero pues $a y $p son dos copias idénticas

if ($a == $p) {
  echo "Atributos con los mismo valores <br>";
} else ("Error <br>");

$p = new Producto("");
$p->nombre = 'Samsung Galaxy A6';
$a = clone ($p);
// El resultado de comparar $a === $p da falso pues $a y $p no hacen referencia al mismo objeto
$a = &$p;
// Ahora el resultado de comparar $a === $p da verdadero pues $a y $p son referencias al mismo objeto.

if ($a === $p) {
  echo "Atributos con los mismo valores <br>";
} else ("Error <br>");

// Mostrar contenido de un objeto sin 'var_dump'
class Persona1
{
  public $nombre;
  public $apellidos;
  public $perfil;
  public function __toString(): String
  {
    return "{$this->apellidos}, {$this->nombre}, tu perfil es {$this->perfil}";
  }
}
$persona = new Persona1();
$persona->nombre = "Manuel";
$persona->apellidos = "Gil Manzano";
$persona->perfil = "público";
echo $persona; //muestra: Gil Manzano, Manuel, tu perfil es público
