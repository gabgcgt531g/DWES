<?php 
    $nombre="Juan";

    function saludo()    {
        global $nombre;
        $nombre="Ana";
        echo "Hola $nombre <br />";
    }

    saludo();
    echo $nombre."<br />";
?>



