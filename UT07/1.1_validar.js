function validar_email() {
  valor = document.getElementById("email").value;
  pos_arroba = valor.indexOf("@");
  pos_punto = valor.lastIndexOf(".");
  if (pos_arroba < 1 || pos_punto < pos_arroba + 2 || pos_punto + 2 >= valor.length) {
    alert('Dirección de correo no válida.');
    return false;
  }
  return true;
}
