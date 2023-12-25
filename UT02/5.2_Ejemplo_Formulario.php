<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio Resuelto. Formulario.</title>
</head>

<body>
  <h1>Login</h1>
  <?php
  /*aqui procesaremos el formulario comprobando si hemos pulsado el submit
      si lo hemos hecho procesamos los datos, si no mostramos el formulario
      fijate donde cerramos el "else" */
  if (isset($_POST['enviar'])) {
    // --> procesamos los datos
    echo "Tu nombre es: <b>{$_POST['nombre']}</b> y tu mail <b>{$_POST['mail']}</b>";
  } else {
    // -->Si no hemos dado al boton enviar, pintamos el formulario
  ?>
    <fieldset style="width:50%; margin:auto">
      <legend>Datos</legend>
      <form name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required><br><br>
        <input tpe="mail" name="mail" placeholder="e-mail" required><br><br>
        <input type="submit" value="Enviar" name="enviar">&nbsp;&nbsp;
        <input type="reset" value="Limpiar">
      </form>
    </fieldset>
  <?php }
  ?>

</body>

</html>