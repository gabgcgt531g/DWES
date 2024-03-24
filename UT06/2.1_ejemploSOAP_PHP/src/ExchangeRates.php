<?php

namespace Clases;


/**
 * WebService provides exchange rate and currency conversion information.
 */
class ExchangeRates extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetExchangeRatesByValueXML' => 'Clases\\GetExchangeRatesByValueXML',
      'GetExchangeRatesByValueXMLResponse' => 'Clases\\GetExchangeRatesByValueXMLResponse',
      'GetExchangeRatesByDateXML' => 'Clases\\GetExchangeRatesByDateXML',
      'GetExchangeRatesByDateXMLResponse' => 'Clases\\GetExchangeRatesByDateXMLResponse',
      'GetExchangeRatesXML' => 'Clases\\GetExchangeRatesXML',
      'GetExchangeRatesXMLResponse' => 'Clases\\GetExchangeRatesXMLResponse',
      'GetCurrentExchangeRatesXML' => 'Clases\\GetCurrentExchangeRatesXML',
      'GetCurrentExchangeRatesXMLResponse' => 'Clases\\GetCurrentExchangeRatesXMLResponse',
      'GetExchangeRatesXMLSchema' => 'Clases\\GetExchangeRatesXMLSchema',
      'GetExchangeRatesXMLSchemaResponse' => 'Clases\\GetExchangeRatesXMLSchemaResponse',
      'GetCurrentExchangeRate' => 'Clases\\GetCurrentExchangeRate',
      'GetCurrentExchangeRateResponse' => 'Clases\\GetCurrentExchangeRateResponse',
      'GetExchangeRate' => 'Clases\\GetExchangeRate',
      'GetExchangeRateResponse' => 'Clases\\GetExchangeRateResponse',
      'ConvertToEUR' => 'Clases\\ConvertToEUR',
      'ConvertToEURResponse' => 'Clases\\ConvertToEURResponse',
      'ConvertToForeign' => 'Clases\\ConvertToForeign',
      'ConvertToForeignResponse' => 'Clases\\ConvertToForeignResponse',
      'CurrentConvertToEUR' => 'Clases\\CurrentConvertToEUR',
      'CurrentConvertToEURResponse' => 'Clases\\CurrentConvertToEURResponse',
      'CurrentConvertToForeign' => 'Clases\\CurrentConvertToForeign',
      'CurrentConvertToForeignResponse' => 'Clases\\CurrentConvertToForeignResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://webservices.gama-system.com/exchangerates.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Method returns an XML formatted string containing exchange rates for the specified bank and currency that are between specified values.
     *
     * @param GetExchangeRatesByValueXML $parameters
     * @return GetExchangeRatesByValueXMLResponse
     */
    public function GetExchangeRatesByValueXML(GetExchangeRatesByValueXML $parameters)
    {
      return $this->__soapCall('GetExchangeRatesByValueXML', array($parameters));
    }

    /**
     * Method returns an XML formatted string containing exchange rates for the specified bank and currency that are between specified dates.
     *
     * @param GetExchangeRatesByDateXML $parameters
     * @return GetExchangeRatesByDateXMLResponse
     */
    public function GetExchangeRatesByDateXML(GetExchangeRatesByDateXML $parameters)
    {
      return $this->__soapCall('GetExchangeRatesByDateXML', array($parameters));
    }

    /**
     * Method returns an XML formatted string containing exchange rates for the specified bank and date.
     *
     * @param GetExchangeRatesXML $parameters
     * @return GetExchangeRatesXMLResponse
     */
    public function GetExchangeRatesXML(GetExchangeRatesXML $parameters)
    {
      return $this->__soapCall('GetExchangeRatesXML', array($parameters));
    }

    /**
     * Method returns an XML formatted string containing current exchange rates for the specified bank.
     *
     * @param GetCurrentExchangeRatesXML $parameters
     * @return GetCurrentExchangeRatesXMLResponse
     */
    public function GetCurrentExchangeRatesXML(GetCurrentExchangeRatesXML $parameters)
    {
      return $this->__soapCall('GetCurrentExchangeRatesXML', array($parameters));
    }

    /**
     * Method returns XML schema (XSD) in which all XML formatted exchange rate information is in.
     *
     * @param GetExchangeRatesXMLSchema $parameters
     * @return GetExchangeRatesXMLSchemaResponse
     */
    public function GetExchangeRatesXMLSchema(GetExchangeRatesXMLSchema $parameters)
    {
      return $this->__soapCall('GetExchangeRatesXMLSchema', array($parameters));
    }

    /**
     * Method returns current specified exchange rate for the specified bank and currency.
     *
     * @param GetCurrentExchangeRate $parameters
     * @return GetCurrentExchangeRateResponse
     */
    public function GetCurrentExchangeRate(GetCurrentExchangeRate $parameters)
    {
      return $this->__soapCall('GetCurrentExchangeRate', array($parameters));
    }

    /**
     * Method returns specified exchange rate for the specified bank, date and currency.
     *
     * @param GetExchangeRate $parameters
     * @return GetExchangeRateResponse
     */
    public function GetExchangeRate(GetExchangeRate $parameters)
    {
      return $this->__soapCall('GetExchangeRate', array($parameters));
    }

    /**
     * Method converts the specified value of foreign currency to EUR.
     *
     * @param ConvertToEUR $parameters
     * @return ConvertToEURResponse
     */
    public function ConvertToEUR(ConvertToEUR $parameters)
    {
      return $this->__soapCall('ConvertToEUR', array($parameters));
    }

    /**
     * Method converts the specified value of EUR to foreign currency.
     *
     * @param ConvertToForeign $parameters
     * @return ConvertToForeignResponse
     */
    public function ConvertToForeign(ConvertToForeign $parameters)
    {
      return $this->__soapCall('ConvertToForeign', array($parameters));
    }

    /**
     * Method converts the current specified value of foreign currency to EUR.
     *
     * @param CurrentConvertToEUR $parameters
     * @return CurrentConvertToEURResponse
     */
    public function CurrentConvertToEUR(CurrentConvertToEUR $parameters)
    {
      return $this->__soapCall('CurrentConvertToEUR', array($parameters));
    }

    /**
     * Method converts the specified value of EUR to current foreign currency.
     *
     * @param CurrentConvertToForeign $parameters
     * @return CurrentConvertToForeignResponse
     */
    public function CurrentConvertToForeign(CurrentConvertToForeign $parameters)
    {
      return $this->__soapCall('CurrentConvertToForeign', array($parameters));
    }

}
