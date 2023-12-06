<?php 
    $a = 5;
    echo $a.'<br>';

    $b = ++$a;
    echo $b.'<br>';

    // Antes se le suma uno a $a (pasa a tener valor 6)
    // y después se asigna a $b (que también acaba con valor 6).

    $a = 5;
    echo $a.'<br>';

    $b = $a++;
    echo $b.'<br>';

    // Antes se asigna a $b el valor de $a (5).
    // y después se le suma uno a $a (pasa a tener valor 6) 
?>

