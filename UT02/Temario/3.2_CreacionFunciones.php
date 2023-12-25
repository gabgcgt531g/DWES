<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Creación de funciones</title>
</head>

<body>
  <h3>Primera función.</h3>
  <p> Función comentada
    <?php
    /*
    $iva = true;
    $precio = 10;
    precioConIva();     // esta línea dará error, coméntala
    if ($iva) {
      function precioConIva()
      {
        global $precio; //podemos usar también $precio = $GLOBALS["precio"];
        $precioIva = $precio * 1.18;
        echo "El precio con IVA es " . $precioIva;
      }
    }
    precioConIva();     // Aquí ya no da error*/
    ?>
  </p>
  <h3>Segundo función.</h3>

  <p>
    <?php
    $iva2 = true;
    $precio2 = 10;
    if ($iva2) {
      //podemos hacer uso de la función
      //Antes de implementarla.
      precioConIva2();
    }
    function precioConIva2()
    {
      $precio2 = $GLOBALS["precio2"];
      $precioIva2 = $precio2 * 1.18;
      echo "El precio con IVA es " . $precioIva2;
    }
    ?>

  </p>
  <h3>Tercera función.</h3>

  <p>
    <?php
    $iva3 = true;
    $precio3 = 10;
    function precioConIva3()
    {
      $precio3 = $GLOBALS["precio3"];
      $precioIva3 = $precio3 * 1.18;
      echo "El precio con IVA es " . $precioIva3;
    }
    if ($iva3) {
      //podemos hacer uso de la función
      //Antes de implementarla.
      precioConIva3();
    }
    ?>

  </p>
</body>

</html>