<!DOCTYPE html>
<html lang="es">
<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
  header('WWW-Authenticate: Basic Realm="Contenido restringido"');
  header('HTTP/1.0 401 Unauthorized');
  echo "Usuario no reconocido!";
  exit;
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS BootStrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Ejemplo Tema 4</title>
</head>

<body style='background:gray'>
  <h3 class='text-center mt-3'>Directivas PHP_AUTH</h3>
  <div class='container mt-3'>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, quasi. Aperiam ut deserunt odit, ipsam quasi sapiente autem exercitationem fugiat voluptate omnis consequuntur itaque, quod odio reprehenderit. Earum, dicta minima.</p>
  </div>
</body>

</html>