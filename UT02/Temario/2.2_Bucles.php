<?php
//Bucle while

$a = 1;
while ($a < 8) {
  $a += 3;
}
echo $a; // el valor obtenido es 10


//Bucle do...while
$a = 5;
do {
  $a -= 3;
} while ($a > 10);
print $a; // el bucle se ejecuta una sola vez, con lo que el valor obtenido es 2


//Bucle for
for ($a = 5; $a < 10; $a += 3) {
  print $a; // Se muestran los valores 5 y 8
  print "<br />";
}
