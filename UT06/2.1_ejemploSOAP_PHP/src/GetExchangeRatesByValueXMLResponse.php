<?php

namespace Clases;

class GetExchangeRatesByValueXMLResponse
{

    /**
     * @var string $GetExchangeRatesByValueXMLResult
     */
    protected $GetExchangeRatesByValueXMLResult = null;

    /**
     * @param string $GetExchangeRatesByValueXMLResult
     */
    public function __construct($GetExchangeRatesByValueXMLResult)
    {
      $this->GetExchangeRatesByValueXMLResult = $GetExchangeRatesByValueXMLResult;
    }

    /**
     * @return string
     */
    public function getGetExchangeRatesByValueXMLResult()
    {
      return $this->GetExchangeRatesByValueXMLResult;
    }

    /**
     * @param string $GetExchangeRatesByValueXMLResult
     * @return \Clases\GetExchangeRatesByValueXMLResponse
     */
    public function setGetExchangeRatesByValueXMLResult($GetExchangeRatesByValueXMLResult)
    {
      $this->GetExchangeRatesByValueXMLResult = $GetExchangeRatesByValueXMLResult;
      return $this;
    }

}
