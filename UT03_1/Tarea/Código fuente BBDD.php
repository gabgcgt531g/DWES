<?php

    $host = "localhost";
    $db = "dwes";
    $user = "root";
    $pass = "";

    //se recomienda guardar los datos(host, user...) en variables porque si estos cambian
    //solo tenemos que actualizar el valor de estas variables

    $dsn = "mysql:host=$host;dbname=$db";

    $conProyecto = new PDO($dsn, $user, $pass);


    // Si la consulta genera un conjunto de datos, como es el caso de SELECT, debes utilizar el método query, que devuelve un objeto de 
    // la clase PDOStatement.
    $conProyecto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $resultado = $conProyecto->query("SELECT producto, unidades FROM stock");

    // En PDO tienes varias posibilidades para tratar con el conjunto de resultados devuelto por el método query. 
    // La más utilizada es el método fetch de la clase PDOStatement. Este método devuelve un registro del conjunto de resultados, o false
    // si ya no quedan registros por recorrer.
    while ($registro = $resultado->fetch()) 
    {
        echo "Producto ".$registro['producto'].": ".$registro['unidades']."<br />";
    }       
    

    // En el caso de las consultas de acción, como INSERT, DELETE o UPDATE, el método exec devuelve el número de registros afectados.
    $registros = $conProyecto->exec('DELETE FROM stock WHERE unidades=0');
    echo "<p>Se han borrado $registros registros.</p>";

    $resultado = $conProyecto->query("SELECT producto, unidades FROM stock");

    // En PDO tienes varias posibilidades para tratar con el conjunto de resultados devuelto por el método query. 
    // La más utilizada es el método fetch de la clase PDOStatement. Este método devuelve un registro del conjunto de resultados, o false
    // si ya no quedan registros por recorrer.
    while ($registro = $resultado->fetch()) 
    {
        echo "Producto ".$registro['producto'].": ".$registro['unidades']."<br />";
    }      


    // Para cerrar la conexión hay que saber que la misma permanecerá activa durante el tiempo de vida del objeto PDO. 
    // Para cerrarla, es necesario destruir el objeto asegurándose de que todas las referencias a él existentes sean eliminadas; 
    // esto se puede hacer asignando null a la variable que contiene el objeto.
    $conProyecto = null;

?>