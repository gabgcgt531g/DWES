<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desarrollo Web</title>
</head>

<body>
  <script type="text/javascript">
        <? php
            // Creamos en la página un código JavaScript que
            //   utiliza la variable PHP "$email"
            $email = "alumno@educacion.es";
            echo 'window.open("email.php?email='.urlencode($email).'");';
        ?>
  </script>
</body>

</html>