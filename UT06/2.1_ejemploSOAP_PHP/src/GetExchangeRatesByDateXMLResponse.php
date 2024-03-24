<?php

namespace Clases;

class GetExchangeRatesByDateXMLResponse
{

    /**
     * @var string $GetExchangeRatesByDateXMLResult
     */
    protected $GetExchangeRatesByDateXMLResult = null;

    /**
     * @param string $GetExchangeRatesByDateXMLResult
     */
    public function __construct($GetExchangeRatesByDateXMLResult)
    {
      $this->GetExchangeRatesByDateXMLResult = $GetExchangeRatesByDateXMLResult;
    }

    /**
     * @return string
     */
    public function getGetExchangeRatesByDateXMLResult()
    {
      return $this->GetExchangeRatesByDateXMLResult;
    }

    /**
     * @param string $GetExchangeRatesByDateXMLResult
     * @return \Clases\GetExchangeRatesByDateXMLResponse
     */
    public function setGetExchangeRatesByDateXMLResult($GetExchangeRatesByDateXMLResult)
    {
      $this->GetExchangeRatesByDateXMLResult = $GetExchangeRatesByDateXMLResult;
      return $this;
    }

}
