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
  <h1>Ejercicio Resuelto.</h1>
  <p>
    Haz una página PHP que utilice <i><b>foreach()</b></i> para mostrar todos los valores del array <i><b>"$_SERVER"</b></i> en una tabla con dos columnas. La primera columna debe contener el nombre de la variable, y la segunda su valor.
  </p>

  <table align="center" border="2" cellpadding="2" cellspacing="2">
    <tbody style="background-color: grey; text-align: center; font-weight: bold">
      <td>Clave</td>
      <td>Valor</td>
    </tbody>
    <?php
    /*while ($dato = echo($_SERVER)) {
      echo "<tr>";
      echo "<td>$dato[0]</td>";
      echo "<td>$dato[1]</td>";
      echo "<tr>";
    }*/
    ?>
  </table>

</body>

</html>