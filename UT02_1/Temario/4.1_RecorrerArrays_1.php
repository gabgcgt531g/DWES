<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recorrer Arrays 1</title>
</head>

<body>
  <h3>Recorrer elementos.</h3>

  <p>
    <?php
    $modulos = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");
    foreach ($modulos as $modulo) {
      echo "Módulo: " . $modulo . "<br />";
    }
    ?>
  </p>

  <h3>Recorrer arrays y sus clave a la vez.</h3>
  <p>
    <?php
    $modulos1 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");
    foreach ($modulos1 as $key => $value) {
      echo  "El código del módulo " . $value . " es " . $key . "<br />";
    }

    ?>

  </p>
</body>

</html>