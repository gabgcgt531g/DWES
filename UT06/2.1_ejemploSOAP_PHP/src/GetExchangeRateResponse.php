<?php

namespace Clases;

class GetExchangeRateResponse
{

    /**
     * @var float $GetExchangeRateResult
     */
    protected $GetExchangeRateResult = null;

    /**
     * @param float $GetExchangeRateResult
     */
    public function __construct($GetExchangeRateResult)
    {
      $this->GetExchangeRateResult = $GetExchangeRateResult;
    }

    /**
     * @return float
     */
    public function getGetExchangeRateResult()
    {
      return $this->GetExchangeRateResult;
    }

    /**
     * @param float $GetExchangeRateResult
     * @return \Clases\GetExchangeRateResponse
     */
    public function setGetExchangeRateResult($GetExchangeRateResult)
    {
      $this->GetExchangeRateResult = $GetExchangeRateResult;
      return $this;
    }

}
