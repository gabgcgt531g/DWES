<?php
class Producto
{
  private $codigo = 1234;
  public $nombre;
  public $pvp;
  public function muestra()
  {
    echo "<p>Nombre: " . $this->nombre . "</p>";
  }
}
$p = new Producto("dom");


?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CDN de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifj
h" crossorigin="anonymous">
  <title>Creación Clases</title>
</head>

<body style="background:gainsboro">
  <p>
    <?php
    // $cod->codigo = 1234;
    $p->nombre = 'Samsung Galaxy A6';
    $p->muestra();
    ?>
  </p>

</body>

</html>