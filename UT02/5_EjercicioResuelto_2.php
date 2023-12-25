<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio Resuelto.</title>
</head>

<body>
  <h3>Formulario Fecha</h3>
  <?php
  if (isset($_POST['enviar'])) {
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    if (checkdate($mes, $dia, $anio)) {
      $fecha = "$dia-$mes-$anio";
      $objFecha = date_create_from_format('d-m-Y', $fecha);
      $fecha1 = strftime("La fecha es %A, %d de %B de %Y", date_timestamp_get($objFecha));
      echo "<p>$fecha1</p>";
    } else {
      echo "<p>La fecha Introducida es ERRONEA!!!</p>";
    }
    echo "<a href='" . $_SERVER['PHP_SELF'] . "' style='text-decoration:none'>";
    echo "<button>Probar otra Fecha</button>";
    echo "</a>";
  } else {
  ?>
    <fieldset style="width:40%; margin:auto">
      <form name="fecha" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p>
          <label for="dia">Día:</label>
          <input type="number" step="1" max="31" min="1" id="dia" name="dia" required>
        </p>
        <p>
          <label for="mes">Mes:</label>
          <input type="number" step="1" max="12" min="1" name="mes" id="mes" required>
        </p>
        <p>
          <label for="anio">Año:</label>
          <input type="number" step="1" max="9999" min="1900" name="anio" id="anio" required>
        </p>
        <div style="text-align: center">
          <input type="submit" value="Enviar" name="enviar" style="margin-right: 5px; width: 60px; height:30px; font-weight: bold">
          <input type="reset" value="Limpiar" style="width: 60px; height:30px; font-weight: bold">
        </div>
      </form>
    </fieldset>
  <?php } ?>
</body>

</html>