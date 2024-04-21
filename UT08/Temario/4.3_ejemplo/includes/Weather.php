<?php
// Copyright 2019 Oath Inc. Licensed under the terms of the zLib license see https://opensource.org/licenses/Zlib for terms.
class Weather
{
    public $response;
    public $url = 'https://weather-ydn-yql.media.yahoo.com/forecastrss';
    public $url1 = "http://dev.virtualearth.net/REST/v1/Locations";
    //Key Bing
    public $keyBing = "Pon tu key de bing Maps";
    //Keys yahoo
    private $app_id = 'Pon tu id de aplicación de yahoo';
    private $consumer_key = 'Pon tu clave de yahoo';
    private $consumer_secret = 'Pon tu secret de yahoo';

    private $options;
    private $oauth;
    private $query;
    public $revGeocodeUrl;

    public function __construct($la, $lo)
    {
        //-----Weahter-----------------------------------
        $this->query = ['lat' => $la, 'lon' => $lo, 'u' => 'c', 'format' => 'json'];
        $this->oauth = [
            'oauth_consumer_key' => $this->consumer_key,
            'oauth_nonce' => uniqid(mt_rand(1, 1000)),
            'oauth_signature_method' => 'HMAC-SHA1',
            'oauth_timestamp' => time(),
            'oauth_version' => '1.0'
        ];
        $base_info = $this->buildBaseString($this->url, 'GET', array_merge($this->query, $this->oauth));
        $composite_key = rawurlencode($this->consumer_secret) . '&';
        $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
        $this->oauth['oauth_signature'] = $oauth_signature;
        $header = array(
            $this->buildAuthorizationHeader($this->oauth),
            'X-Yahoo-App-Id: ' . $this->app_id
        );
        $this->options = array(
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_HEADER => false,
            CURLOPT_URL => $this->url . '?' . http_build_query($this->query),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false
        );
        //------------------Bing----------------------------------
        $this->revGeocodeUrl = $this->url1 . "/$la,$lo?c=es&output=json&key={$this->keyBing}";
    }

    public function buildBaseString($baseURI, $method, $params)
    {
        $r = array();
        ksort($params);
        foreach ($params as $key => $value) {
            $r[] = "$key=" . rawurlencode($value);
        }
        return $method . "&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
    }

    public function buildAuthorizationHeader()
    {
        $r = 'Authorization: OAuth ';
        $values = array();
        foreach ($this->oauth as $key => $value) {
            $values[] = "$key=\"" . rawurlencode($value) . "\"";
        }
        $r .= implode(', ', $values);
        return $r;
    }
    public function getTiempo()
    {
        $ch = curl_init();
        curl_setopt_array($ch, $this->options);
        $response = curl_exec($ch);
        curl_close($ch);
        $salida = json_decode($response, true);
        return $salida['current_observation'];
    }
    public function getLocalizacion()
    {
        $salida = file_get_contents($this->revGeocodeUrl);
        $salida1 = json_decode($salida, true);
        return $salida1["resourceSets"][0]["resources"][0]["address"];
    }
}
