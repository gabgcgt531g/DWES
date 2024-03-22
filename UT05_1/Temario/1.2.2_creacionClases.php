<?php

class Persona
{
  private $nombre;
  private $perfil;

  public function getNombre()
  {
    return $this->nombre;
  }
  public function setNombre($n)
  {
    $this->nombre = $n;
  }

  public function saludo()
  {
    //Fijate como hacemos referencia al método getNombre
    echo "Hola {$this->getNombre()}, Buenos dias";
  }

  public function despedida()
  {
    echo "Adios {$this->getNombre()}!!";
  }
}
echo "=> Utilización de 'this'" . "</br>";
$persona1 = new Persona();
$persona1->setNombre("Luis");
$persona1->saludo();

echo "</br>";

$persona2 = new Persona();
$persona2->setNombre("Manuela");
$persona2->despedida();

// Llamada a constantes de clase
echo "</br>";
echo "=> Llamada a constantes:" . "</br>";
class DB
{
  const USUARIO = 'gestor';
}
echo DB::USUARIO;

echo "</br>";
echo "=> Atributos estáticos:" . "</br>";
class Producto
{
  private static $num_productos = 12;
  public static function nuevoProducto()
  {
    echo "Tiene " . self::$num_productos++ . " productos";
  }
}

//Al ser un atributo estático, no le aplicamos setters y getters
$prod = new Producto("dom");
$prod->nuevoProducto();
