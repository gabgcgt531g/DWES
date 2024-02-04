/*
Enunciado:
Según la información que figura en la tabla stock de la base de datos proyecto, la tienda 1 (CENTRAL) tiene 2 unidades del producto de código 3DSNG y la tienda 3 (SUCURSAL2) ninguno. Suponiendo que los datos son esos (no hace falta que los compruebes en el código), utiliza una transacción para mover una unidad de ese producto de la tienda 1 a la tienda 3.
*/

<?php //Hacemos la conexión 
$conProyecto = new mysqli('localhost', 'admin', 'secreto', 'proyecto');
if ($conProyecto->connect_error) {
  die("Error en la conexión mesaje de error: " . $conProyecto->connect_error);
}
//Definimos una variable para comprobar que no tenemos errores 
$todoBien = true;
//Iniciamos la transacción 
$conProyecto->autocommit(false);
$update = "update stocks set unidades=1 where producto=(select id from productos where nombre_corto='3DSNG') AND tienda=1";
if (!$conProyecto->query($update)) {
  $todoBien = false;
}
// Fijate en este insert, el select devolverá el productos.id del producto de nombre_corto='3DSNG' 3 y 1 es decir 
// Estamos haciendo un insert into stocks(producto, tienda, unidades) lo valores 1, 3, 1 
$insert = "insert into stocks(producto, tienda, unidades) select id, 3, 1 from productos where nombre_corto='3DSNG'";
if (!$conProyecto->query($insert)) {
  $todoBien = false;
}
// Si todo fue bien hacemos el commit si no el rollback 
if ($todoBien) {
  $conProyecto->commit();
  echo "<p>Los cambios se han realizado correctamente.</p>";
} else {
  $conProyecto->rollback();
  echo "<p>No se han podido realizar los cambios.</p>";
}
$conProyecto->close(); 
//No es necesario cerrar el script al ser un archivo php "puro"
