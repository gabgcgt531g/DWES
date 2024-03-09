<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tarea UT02</title>
</head>

<body>
  <h1>Agenda</h1>
  <div class="agenda">
    <?php
    session_start();

    if (!isset($_SESSION['contactos'])) {
      $_SESSION['contactos'] = array();
    }

    $aviso = "";

    if (isset($_POST['aniadir'])) {
      $nombre = $_POST['nombre'];
      $telefono = $_POST['telefono'];

      if (empty($nombre)) {
        $aviso = "El Nombre es Obligatorio!!!";
      } else if (!isset($_SESSION['contactos'][$nombre]) && empty($telefono)) {
        $aviso = "El teléfono es Obligatorio!!!";
      } else if (isset($_SESSION['contactos'][$nombre]) && empty($telefono)) {
        $aviso = "El contato ha sid oborrado";
        unset($_SESSION['contactos'][$nombre]);
      } else {

        $contacto = array(
          "nombre" => $nombre,
          "telefono" => $telefono
        );

        if (isset($_SESSION['contactos'][$nombre])) {
          $aviso = "El contacto ha sido actuzalizado.";
        } else {
          $aviso = "El contacto ha sido creado.";
        }

        $_SESSION['contactos'][$nombre] = $contacto;
      }
    }

    if (isset($_GET['vaciar'])) {
      $aviso = "Todos los contactos han sido Borrados.";
      $_SESSION['contactos'] = array();
    }

    if (!empty($aviso)) {
    ?>
      <fieldset class="fieldset" name="aviso"> <?php echo $aviso ?> </fieldset>
    <?php
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

      <?php
      if (count($_SESSION['contactos']) > 0) {
      ?>
        <fieldset class="fieldset">
          <legend>Datos Agenda</legend>
          <table>
            <?php
            foreach ($_SESSION['contactos'] as $key => $value) {
            ?>
              <tr>
                <td><?php echo $value['nombre'] . " ->> "; ?></td>
                <td><?php echo $value['telefono']; ?></td>
              </tr>
            <?php
            } ?>
          </table>
        </fieldset>
      <?php
      }
      ?>
      <fieldset class="fieldset">
        <legend>Nuevo contacto</legend>
        <table>

          <tr>
            <td><label for="nombre">Nombre: </label></td>
            <td><input type="text" name="nombre" id="nombre"></td>
          </tr>

          <tr>
            <td><label for="telefono">Teléfono: </label></td>
            <td><input type="text" name="telefono" id="telefono"></td>
          </tr>

          <tr>
            <td><button type="submit" name="aniadir">Añadir contacto</button></td>
            <td><button type="reset" name="limpiar">Limpiar campos</button></td>
          </tr>

        </table>
      </fieldset>
    </form>

    <?php
    if (count($_SESSION['contactos']) > 0) {
    ?>
      <form action="" method="GET">
        <fieldset class="fieldset">
          <legend>Vaciar agenda</legend>

          <button type="submit" name="vaciar" value="1">Vaciar</button>

        </fieldset>
      </form>

    <?php
    }
    ?>
  </div>
</body>

</html>