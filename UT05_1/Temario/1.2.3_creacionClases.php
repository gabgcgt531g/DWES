<?php

//Constructores de clase
echo "=> Contructores de clase" . "</br>";
echo "-> Ejemplo 1" . "</br>";
class Persona
{
  public static $id;
  private $nombre;
  private $perfil;
  public function __construct()
  {
    $perfil = "Público";
  }
}
// Creamos persona1 que tiene inicializado su atributo $perfil a Público.
$persona1 = new Persona();
// Podemos comprobarlo
var_dump($persona1);

echo "-> Ejemplo 2" . "</br>";
class Persona2
{
  public static $id;
  private $nombre;
  private $perfil;
  public function __construct($n, $p)
  {
    $this->nombre = $n;
    $this->perfil = $p;
  }
}
// Creamos un objeto de la clase Persona e inicializamos sus atributos;
// Fíjate que ya NO podremos usar: $persona1=new Persona(); ya que el constructor espera dos parámetros.
$persona2 = new Persona2("Juan", "Privado");
//Podemos comprobarlo
var_dump($persona2);

//Desturctores de clase
echo "=> Destructores de clase" . "</br>";
class Producto2
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
$p = new Producto2('GALAXYS');
var_dump($p);
