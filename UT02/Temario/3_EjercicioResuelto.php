<!DOCTYPE html>
<?php
//incluimos el archivo "funciones.inc.php"
include "funciones.inc.php";
function mostrarPrimos($inicio, $cantidad = 10)
{
  //si no especifico nada, cantidad=10
  $cont = 0;
  do {
    if (isPrimo($inicio)) {
      echo '<strong>' . ++$cont . ' ->> </strong> ' . $inicio . '<br>';
    }
    $inicio++;
  } while ($cont < $cantidad);
}
?>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio números primos</title>
</head>

<body>
  <h3>Solución Propuesta Ejercicio números Primos</h3>
  <p>
    Con la ayuda de las funciones que necesites, haz un programa que, dados dos número enteros positivos, <b>inicio</b> y <b>cantidad</b>, nos muestre <b>cantidad</b> de números primos a partir de <b>inicio</b>, si no pasamos ningún valor <b>cantidad=10</b>.
  </p>

  <p>
    <?php
    $cantidad = 10;
    $inicio = 1;
    mostrarPrimos($inicio, $cantidad);
    //Nos deberá mostrar los primeros 10 primos a partir del número 1
    ?>
  </p>
</body>

</html>