<?php

namespace Clases;

class GetExchangeRatesXMLResponse
{

    /**
     * @var string $GetExchangeRatesXMLResult
     */
    protected $GetExchangeRatesXMLResult = null;

    /**
     * @param string $GetExchangeRatesXMLResult
     */
    public function __construct($GetExchangeRatesXMLResult)
    {
      $this->GetExchangeRatesXMLResult = $GetExchangeRatesXMLResult;
    }

    /**
     * @return string
     */
    public function getGetExchangeRatesXMLResult()
    {
      return $this->GetExchangeRatesXMLResult;
    }

    /**
     * @param string $GetExchangeRatesXMLResult
     * @return \Clases\GetExchangeRatesXMLResponse
     */
    public function setGetExchangeRatesXMLResult($GetExchangeRatesXMLResult)
    {
      $this->GetExchangeRatesXMLResult = $GetExchangeRatesXMLResult;
      return $this;
    }

}
