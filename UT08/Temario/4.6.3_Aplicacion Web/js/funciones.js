function getCoordenadas() {
    var dir = document.getElementById('dir').value;
    var res = xajax.request({xjxfun: 'getCoordenadas'}, {mode: 'synchronous', parameters: [dir]});
    if (res == false) {
        alert("Coordenada erróneas, revíselas");
    }
    return res;
}

function ordenarEnvios(id) {
    var puntos = $("#" + id + " input:hidden").map(function () {
        return this.value;
    }).get().join("|");
    var respuesta = xajax.request({xjxfun: "ordenarEnvios"}, {mode: 'synchronous', parameters: [puntos]});
    if (respuesta == false) {
        alert("No se pudo ordenar el envio");
        return respuesta;
    }
    // Si obtuvimos una respuesta, reordenamos los envíos del reparto
    // Cogemos la URL base del documento, quitando los parámetros GET si los hay
    var url = "http://127.0.0.1/curso/tema8/repartos/public/repartos.php";
    // Añadimos el código de la lista de reparto
    url += '?action=oEnvios&idLt=' + id;
    // Y un array con las nuevas posiciones que deben ocupar los envíos
    for (var r in respuesta) url += '&pos[]=' + respuesta[r];
    window.location = url;
}

//Nos devolverá algo como esto
//http://127.0.0.1/curso/tema8/repartos/public/repartos.php?action=oEnvios&idLt=T05iWTFRMUM4aFpqeVFIRQ&pos[]=2&pos[]=3&pos[]=1