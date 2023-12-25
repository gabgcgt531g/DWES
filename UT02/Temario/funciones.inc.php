<?php
//
function isPrimo($num)
{
  if ($num == 1) return false;
  for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) return false; //si encuentro un divisor distinto de 1 o $num el $num no es primo
    if ($i > $num / 2) break; //si no he encontrado divisores a la mitad, no los encontaré depués
  }
  return true;
}
//No es necesario cerrar el script