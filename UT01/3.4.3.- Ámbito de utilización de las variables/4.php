<?php 

    function contador()
    {
        static $a = 0;

        $a++;
        echo $a.'<br>';

        // Cada vez que se ejecuta la funcion, se incrementa el valor de $a
    }

    contador();

?>




