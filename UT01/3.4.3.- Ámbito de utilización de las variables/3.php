<?php 

    $a = 23;

    function prueba()
    {
        $a = 50;

        echo $a . "<br>"; //mostrará el valor local de a, es decir 50
        echo $GLOBALS["a"]; //mostrará el valor global de a, es decir 23
    }

    prueba();

?>