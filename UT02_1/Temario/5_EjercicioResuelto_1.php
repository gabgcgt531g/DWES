<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio Resuelto.</title>
</head>

<body>
  <h1>Ejercicio Resuelto.</h1>
  <p>
    Crea un formulario HTML para introducir el nombre del alumno y el módulo o los módulos que cursa, a escoger “Desarrollo Web en Entorno Servidor”, “Desarrollo Web en Entorno Cliente” o ambas. Envía el resultado a la página <i><b>“procesa.php”</b></i>, que será la encargada de procesar los datos. No es necesario, en este ejercicio, que hagas la página de procesar datos.
  </p>
  <fieldset style="width:40%; margin:auto">
    <legend style="font-weight: bold">Datos</legend>
    <div name="form1" action="procesa.php" method="POST">
      <p>Nombre:&nbsp<input type="text" name="nombre" placeholder="Nombre" required /></p>
      <fieldset style="width:50%">
        <legend style="font-weight: bold">Elige Modulos</legend>
        <p><input type="checkbox" name="modulo[]" value="DWESE" />&nbsp;Desarrollo Web en Entorno Sevidor.</p>
        <p><input type="checkbox" name="modulo[]" value="DWEC" />&nbsp;Desarrollo Web en Entorno Cliente.</p>
      </fieldset>
      <div style="text-align: center; margin-top: 5px">
        <input type="submit" value="Enviar" name="enviar" />&nbsp;&nbsp;
        <input type="reset" value="Limpiar" />
      </div>
      </form>
  </fieldset>



</body>

</html>