<?php

class Persona
{
  private $nombre;
  private $perfil;

  public function __construct()
  {
    $num = func_num_args(); //guardamos el número de argumentos
    switch ($num) {
      case 0:
        break;
      case 1:
        //recuperamos el argumento pasado
        $this->nombre = func_get_arg(0); // los argumentos empiezan a contar por 0
        break;
      case 2:
        $this->nombre = func_get_arg(0);
        $this->perfil = func_get_arg(1);
    }
  }
}

//Ahora será válido el siguiente código.
$persona1 = new Persona();
$persona2 = new Persona("Alicia");
$persona3 = new Persona("Alicia", "Público");
var_dump($persona1);
echo "<break>" . "<br>";
var_dump($persona2);
echo "<break>" . "<br>";
var_dump($persona3);
