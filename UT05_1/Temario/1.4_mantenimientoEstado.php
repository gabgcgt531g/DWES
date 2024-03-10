<?php
// Serialización de objetos. Convierte todos sus tipos a String y así poder almacenarlos en '$_SESSION'
class Persona
{
  public $nombre;
  public $apellidos;
  public $perfil;
}

$p = new Producto("");

// Para alamecar esta cadena en cualquier lado
$a = serialize($p);

// Para reconstruir el objeto
$p = unserialize($a);

// Ejemplo para almacenar la informaicón de un objeto  en la sesión de usuario
session_start();
$_SESSION['producto'] = serialize($p);

// En PHP son serializados automáticamente al añadirlos a una 'Sesión'
session_start();
$_SESSION['producto'] = $p;

// Para extraer los datos de la serialización
session_start();
$p = $_SESSION['producto'];
// Si los datos pretender ser almacenados en una base de datos o ya lo están y quieres estraer los datos de la serializaicón, debes usar 'serialize()' y 'unserialize()'
