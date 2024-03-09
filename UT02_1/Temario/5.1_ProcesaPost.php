<?php
echo "Tu nombre es: {$_POST['nombre']}";
$totalModulos = 0;
//comprobamos si nos ha llegado algún módulo
if (isset($_POST['modulo'])) {
  $totalModulos = count($_POST['modulo']); //los contamos
  echo "<br>Los módulos elegidos han sido: ";
  echo "<ol>";
  foreach ($_POST['modulo'] as $k => $v) { //los recorremos y mostramos
    echo "<li>$v</li>";
  }
  echo "</ol>";
}
echo "<br>Has elegido un total de: $totalModulos módulos";
