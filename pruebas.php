//variable
$mi_variable = 8;

// Al asignarle el valor 7, la variable es de tipo “entero”
$mi_variable = 7;

// Si le cambiamos el contenido
$mi_variable = “siete”;

//Tipos
$mi_booleano = false;
$mi_entero = 0x2A;
$mi_real = 7.3e-1;
$mi_cadena = “texto”;
$mi_variable = Null;

//Cambio de tipo automático. El entero se convierte en real.
$mi_entero = 3;
$mi_real = 2.3;
$resultado = $mi_entero + $mi_real;
// La variable $resultado es de tipo real

//Cambio de tipo forzado.
$mi_entero = 3;
$mi_real = 2.3;
$resultado = $mi_entero + (int) $mi_real;
// La variable $mi_real se convierte a entero (valor 2) antes de sumarse.
// La variable $resultado es de tipo entero (valor 5)

//Comprobación de tipo de dato.
$var=23; is_int($var); //devuelve true
is_int(23); //devuelve true
is_int('23'); //devolverá false 

