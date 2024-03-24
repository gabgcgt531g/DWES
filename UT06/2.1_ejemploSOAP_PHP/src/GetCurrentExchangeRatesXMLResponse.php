<?php

namespace Clases;

class GetCurrentExchangeRatesXMLResponse
{

    /**
     * @var string $GetCurrentExchangeRatesXMLResult
     */
    protected $GetCurrentExchangeRatesXMLResult = null;

    /**
     * @param string $GetCurrentExchangeRatesXMLResult
     */
    public function __construct($GetCurrentExchangeRatesXMLResult)
    {
      $this->GetCurrentExchangeRatesXMLResult = $GetCurrentExchangeRatesXMLResult;
    }

    /**
     * @return string
     */
    public function getGetCurrentExchangeRatesXMLResult()
    {
      return $this->GetCurrentExchangeRatesXMLResult;
    }

    /**
     * @param string $GetCurrentExchangeRatesXMLResult
     * @return \Clases\GetCurrentExchangeRatesXMLResponse
     */
    public function setGetCurrentExchangeRatesXMLResult($GetCurrentExchangeRatesXMLResult)
    {
      $this->GetCurrentExchangeRatesXMLResult = $GetCurrentExchangeRatesXMLResult;
      return $this;
    }

}
