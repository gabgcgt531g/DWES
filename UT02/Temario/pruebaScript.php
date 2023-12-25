<?php
function precioConIva(&$precio, $iva = 0.18)
{
  $precio *= (1 + $iva);
}
$precio = 10;
echo "El precio con IVA es  $precio";
