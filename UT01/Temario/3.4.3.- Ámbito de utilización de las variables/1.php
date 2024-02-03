<?php 

    $a = 1;

    function prueba()
    {
        // Dentro de la funcion no se tiene acceso a la variable $a anterior
        $b = $a;
        echo $b.'<br>';

        // Por tanto, la variable $a usada en la asignacion anterior es una variable nueva
        //   que no tiene valor asignado (su valor es null)
    }

    prueba(); // No sale nada por pantalla porque $a no tiene ningun valor
?>