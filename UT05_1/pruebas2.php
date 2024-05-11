<?php

class Persona
{
  private $nombre;
  private $perfil;
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getPerfil()
  {
    return $this->perfil;
  }
  public function setNombre($n)
  {
    $this->nombre = $n;
  }
  public function setPerfil($p)
  {
    $this->perfil = $p;
  }

  public function saludo()
  {
    //Fijate como hacemos referencia al método getNombre
    echo "Hola {$this->getNombre()}, buenos dias, tiene un perfil {$this->getPerfil()}." . "\n";
  }

  public function despedida()
  {
    echo "Adios {$this->getNombre()}." . "\n";
  }
}
$persona1 = new Persona();
$persona1->setNombre("Luis");
$persona1->setPerfil("alto");

if ($persona1->getNombre() === "Luis") {
  $persona1->saludo();
} else {
  $persona1->despedida();
}
