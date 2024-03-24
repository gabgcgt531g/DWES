<?php

namespace Clases;

class GetExchangeRatesXMLSchemaResponse
{

    /**
     * @var string $GetExchangeRatesXMLSchemaResult
     */
    protected $GetExchangeRatesXMLSchemaResult = null;

    /**
     * @param string $GetExchangeRatesXMLSchemaResult
     */
    public function __construct($GetExchangeRatesXMLSchemaResult)
    {
      $this->GetExchangeRatesXMLSchemaResult = $GetExchangeRatesXMLSchemaResult;
    }

    /**
     * @return string
     */
    public function getGetExchangeRatesXMLSchemaResult()
    {
      return $this->GetExchangeRatesXMLSchemaResult;
    }

    /**
     * @param string $GetExchangeRatesXMLSchemaResult
     * @return \Clases\GetExchangeRatesXMLSchemaResponse
     */
    public function setGetExchangeRatesXMLSchemaResult($GetExchangeRatesXMLSchemaResult)
    {
      $this->GetExchangeRatesXMLSchemaResult = $GetExchangeRatesXMLSchemaResult;
      return $this;
    }

}
