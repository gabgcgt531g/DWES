<?php

class Persona
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
$persona1 = new Persona("Juan", "Privado");
$persona1->$id = 23;
//Podemos comprobarlo
