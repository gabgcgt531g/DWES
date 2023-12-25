<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funciones de tipo compuestas</title>
</head>

<body>
  <h3>Funciones de tipo compuestas.</h3>

  <p>
    <?php
    $a = array();  // array vacío


    $modulos = array("Programación", "Bases de datos", "Desarrollo web en entorno servidor");   // array numérico

    unset($modulos[0]);
    // El primer elemento pasa a ser $modulos [1] == "Bases de datos";

    $modulos = array("Programación", "Bases de datos", "Desarrollo web en entorno servidor");
    $modulo = "Bases de datos";
    if (in_array($modulo, $modulos)) echo "Existe el módulo de nombre $modulo";

    ?>
</body>

</html>