<?php

class Coordenadas
{
    public static $iniciourl = "http://dev.virtualearth.net/REST/v1/Locations/ES/Almeria/";
    public static $finurl = "?include=ciso2&maxResults=1&c=es&key=tu_KEY";
    public $coordenadas;
    public $url;

    public function __construct()
    {
        $num = func_num_args();
        if ($num == 1) {
            $dir = str_replace(" ", "%20", func_get_arg(0));
            $this->url = self::$iniciourl . "$dir" . self::$finurl;
        }
    }


    public function getCoordenadas()
    {
        $salida = file_get_contents($this->url);
        $salida1 = json_decode($salida, true);
        return $salida1["resourceSets"][0]["resources"][0]["point"]["coordinates"];
    }

    public function ordenarEnvios($dato)
    {
        //Ponemos las coordenadas del alamacen por ejemplo '36.86071,-2440779' como inicio y fin de la ruta
        $base = "http://dev.virtualearth.net/REST/v1/Routes/driving?c=es&wayPoint.0=36.86071,-2.440779&";
        $puntos = explode("|", $dato);
        $num = 1;
        $trozo = "";
        for ($i = 0; $i < count($puntos); $i++) {
            $trozo .= "wayPoint." . $num++ . "=" . $puntos[$i] . "&";
        }
        $trozo .= "wayPoint." . $num . "=36.86071,-2.440779&optimize=distance&optWp=true&routeAttributes=routePath&key=tu_KEY";
        $url = $base . $trozo;
        $salida = file_get_contents($url);
        $salida1 = json_decode($salida, true);
        $wayp = $salida1["resourceSets"][0]["resources"][0]['waypointsOrder'];
        //quitamos el primero y el ultimo (inicio y fin) (El almacen)
        array_shift($wayp);
        array_pop($wayp);

        for ($i = 0; $i < count($wayp); $i++) {
            $resp[] = substr(strstr($wayp[$i], '.'), 1);
        }
        return $resp;
    }
}

