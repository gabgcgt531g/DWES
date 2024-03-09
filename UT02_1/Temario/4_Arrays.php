<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>

<body>
  <h3>Arrays.</h3>

  <p>
    <?php
    //array númerico
    $modulos1 = array(0 => "Programacion", 1 => "Bases de Datos", 2 => "Desarrollo web en entorno servidor");

    //array asociativo
    $modulos2 = ["PR" => "Programacion", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor"];


    print_r($modulos1);
    echo "<br><br>";
    var_dump($modulos2);
    echo "<br><br>";
    echo $modulos1[2];
    echo "<br>";
    echo $modulos2["BD"];
    echo "<br>";
    ?>
  </p>

  <h3>Arrays bidimensionales.</h3>
  <p>
    <?php
    //array bidemensional
    $ciclos = array(
      "DAW" => array("PR" => "Programación", "BD" => "Bases de datos", "PMDMO" => "Programacion Multimedia"),
      "DAM" => array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web")
    );

    //En formato [ ]
    $ciclos1 = [
      "DAW" => ["PR" => "Programación", "BD" => "Bases de datos", "PMDMO" => "Programacion Multimedia"],
      "DAM" => ["PR" => "Programacion", "BD" => "Bases de datos", "DWES" => "Desarrollo web"]
    ];
    print_r($ciclos);
    echo "<br><br>";
    var_dump($ciclos1);
    echo "<br><br>";
    echo $ciclos["DAW"]["PMDMO"];
    echo "<br>";
    echo $ciclos1["DAM"]["BD"];
    echo "<br>";
    ?>

  </p>
</body>

</html>