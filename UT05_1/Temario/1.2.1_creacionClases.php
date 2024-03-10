<?php
// Antiguo método de getter y setters
class Prueba
{
  private $codigo;
  public function setCodigo($nuevo_codigo)
  {
    if (noExisteCodigo($nuevo_codigo)) {
      $this->codigo = $nuevo_codigo;
      return true;
    }
    return false;
  }
  public function getCodigo()
  {
    return $this->codigo;
  }
}

function noExisteCodigo($codigo)
{
  if ($codigo == 0) {
    echo "no es nadie";
  }
}

// Métodos "mágicos" de PHP actual
class Producto
{
  private $atributos = array();
  public function __get($atributo)
  {
    return $this->atributos[$atributo];
  }
  public function __set($atributo, $valor)
  {
    $this->atributos[$atributo] = $valor;
  }
}
