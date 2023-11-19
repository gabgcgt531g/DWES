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

//Operadores
$mi_variable = 7;
$a = $b + $c;
$valor++;
$x += 5;

//Ejemplos
$a = 5;
$b = ++$a;
// Antes se le suma uno a $a (pasa a tener valor 6)
// y después se asigna a $b (que también acaba con valor 6).

$a = 5;
$b = $a++;
// Antes se asigna a $b el valor de $a (5).
// y después se le suma uno a $a (pasa a tener valor 6) 

//Comparación de operandos
$x = 0;
// La expresión $x == false es cierta (devuelve true).
// Sin embargo, $x === false no es cierta (devuelve false) pues $x es de tipo entero, no booleano.

$a = 1;
function prueba()
{
    // Dentro de la función no se tiene acceso a la variable $a anterior
    $b = $a;
    // Por tanto, la variable $a usada en la asignación anterior es una variable nueva
    //   que no tiene valor asignado (su valor es null)
}
$a = 1;
function prueba()
{
    global $a;
    $b = $a;
    // En este caso se le asigna a $b el valor 1
}
$a = 23;
function prueba()
{
    $a=50;
    echo $a . "<br>"; //mostrará el valor local de a, es decir 50
    echo $GLOBALS["a"]; //mostrará el valor global de a, es decir 23
}
function contador()
{
    static $a=0;
    $a++;
    // Cada vez que se ejecuta la función, se incrementa el valor de $a
}
