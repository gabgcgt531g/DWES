<?php
//1.- Incluimos las librerias Xajax
require_once "xajax/xajax_core/xajax.inc.php";
//2.- Creamos las funciones de validación que serán lammadas desde JS
function validarNombre($nombre)
{
  if (strlen($nombre) < 4) return false;
  return true;
}
function validarEmail($email)
{
  return preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $email);
}
function validarPasswords($pass1, $pass2)
{
  return ($pass1 == $pass2 && strlen($pass1) > 5);
}
function validarFormulario($valores)
{
  $respuesta = new xajaxResponse();
  $error = false;
  if (!validarNombre($valores['usu'])) {
    $respuesta->assign("errUsu", "innerHTML", "El nombre debe tener más de 3 caracteres.");
    $error = true;
  } else $respuesta->clear("errUsu", "innerHTML");
  if (!validarPasswords($valores['pass1'], $valores['pass2'])) {
    $respuesta->assign("errPass", "innerHTML", "La contraseña debe ser mayor de 5 caracteres o no coinciden.");
    $error = true;
  } else $respuesta->clear("errPass", "innerHTML");
  if (!validarEmail($valores['mail'])) {
    $respuesta->assign("errMail", "innerHTML", "La dirección de email no es válida.");
    $error = true;
  } else $respuesta->clear("errMail", "innerHTML");
  if (!$error) $respuesta->alert("Todo correcto.");

  $respuesta->assign("enviar", "value", "Enviar");
  $respuesta->assign("enviar", "disabled", false);

  return $respuesta;
}
