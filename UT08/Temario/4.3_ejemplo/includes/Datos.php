<?php
require 'xajax_core/xajax.inc.php';
require 'Weather.php';
$xajax = new xajax();
$xajax->register(XAJAX_FUNCTION, 'getTiempo');
$xajax->register(XAJAX_FUNCTION, 'getLocalizacion');
$xajax->processRequest();

function getTiempo($la, $lo)
{

    $resp = new xajaxResponse();
    if (!validar($la, $lo)) {
        $resp->setReturnValue(false);
        return $resp;
    }
    $datos = new Weather($la, $lo);
    $tiempo = $datos->getTiempo();
    $temp = $tiempo['condition']['temperature'];
    $humedad = $tiempo['atmosphere']['humidity'];
    $tiem = $tiempo['condition']['text'];
    $resp->assign('tie', 'value', $tiem);
    $resp->assign('tem', 'value', $temp . "º");
    $resp->assign('hum', 'value', $humedad . "%");
    $resp->setReturnValue(true);
    return $resp;
}
function getLocalizacion($la, $lo)
{
    $resp = new xajaxResponse();
    if (!validar($la, $lo)) {
        $resp->setReturnValue(false);
        return $resp;
    }
    $datos = new Weather($la, $lo);
    $ubicacion = $datos->getLocalizacion();
    $dir = $ubicacion['addressLine'];
    $ciudad = $ubicacion['locality'];
    $pais = $ubicacion['countryRegion'];
    $resp->assign('dir', 'value', $dir);
    $resp->assign('ciu', 'value', $ciudad);
    $resp->assign('pai', 'value', $pais);
    $resp->setReturnValue(true);
    return $resp;
}

function validar($a, $b)
{
    if (strlen($a) == 0 || strlen($b) == 0 || !is_numeric($a) || !is_numeric($b)) return false;
    return true;
}
