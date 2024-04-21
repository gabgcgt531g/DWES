<?php
require 'xajax_core/xajax.inc.php';
require 'Coordenadas.php';
$xajax = new xajax();
$xajax->register(XAJAX_FUNCTION, 'getCoordenadas');
$xajax->register(XAJAX_FUNCTION, 'ordenarEnvios');
$xajax->processRequest();

function getCoordenadas($dir)
{
    $resp = new xajaxResponse();
    $dir = trim($dir);
    if (strlen($dir) < 4) {
        $resp->setReturnValue(false);
        return $resp;
    }
    $c = new Coordenadas($dir);
    $lat = $c->getCoordenadas()[0];
    $lon = $c->getCoordenadas()[1];
    $resp->assign('lat', 'value', $lat);
    $resp->assign('lon', 'value', $lon);
    $resp->setReturnValue(true);
    return $resp;
}

function ordenarEnvios($puntos)
{
    $resp = new xajaxResponse();
    if (strlen(trim($puntos)) == 0) {
        $resp->setReturnValue(false);
        return $resp;
    }
    $c = new Coordenadas();
    $datos = $c->ordenarEnvios($puntos);
    $resp->setReturnValue($datos);
    return $resp;
}