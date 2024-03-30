<?php 

    $a = 1;


    function prueba()
    {
        global $a;

        $b = $a;
        echo $b.'<br>';

        // En este caso se le asigna a $b el valor 1
    }

    prueba();

?>