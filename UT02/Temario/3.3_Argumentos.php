<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Argumentos</title>
</head>

<body>
  <h3>Primera función con argumentos.</h3>

  <p>
    <?php
    function precioConIva($precio)
    {
      return $precio * 1.18;
    }
    $precio = 10;
    $precioIva = precioConIva($precio);
    echo "El precio con IVA es $precioIva";
    ?>

  </p>
  <h3>Segundo función con argumentos.</h3>

  <p>
    <?php
    function precioConIva2($precio2, $iva2 = 0.18)
    {
      return $precio2 * (1 + $iva2);
    }
    $precio2 = 10;
    $precioIva2 = precioConIva2($precio2); //al no especificar tomará el valor 0.18
    echo "El precio con IVA es $precioIva2";
    ?>
  </p>
  <h3>Tercera función. Paso por argumentos.</h3>

  <p>
    <?php
    function precioConIva3(&$precio3, $iva3 = 0.18)
    {
      $precio3 *= (1 + $iva3);
    }
    $precio3 = 10;
    echo "El precio con IVA es  $precio3";
    ?>
  </p>
</body>

</html>