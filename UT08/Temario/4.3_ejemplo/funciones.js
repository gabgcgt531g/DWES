function getTiempo() {
    var la = document.getElementById('lat').value;
    var lo = document.getElementById('lon').value;
    var res = xajax.request({ xjxfun: 'getTiempo' }, { mode: 'synchronous', parameters: [la, lo] });
    if (res == false) {
        alert("Coordenada erróneas, revíselas");
    }
    return res;

}
function getLocalizacion() {
    var la = document.getElementById('lat').value;
    var lo = document.getElementById('lon').value;
    var res = xajax.request({ xjxfun: 'getLocalizacion' }, { mode: 'synchronous', parameters: [la, lo] });
    if (res == false) {
        alert("Coordenada erróneas, revíselas");
    }
    return res;

}