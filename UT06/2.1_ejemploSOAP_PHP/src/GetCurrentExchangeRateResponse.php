<?php

namespace Clases;

class GetCurrentExchangeRateResponse
{

    /**
     * @var float $GetCurrentExchangeRateResult
     */
    protected $GetCurrentExchangeRateResult = null;

    /**
     * @param float $GetCurrentExchangeRateResult
     */
    public function __construct($GetCurrentExchangeRateResult)
    {
      $this->GetCurrentExchangeRateResult = $GetCurrentExchangeRateResult;
    }

    /**
     * @return float
     */
    public function getGetCurrentExchangeRateResult()
    {
      return $this->GetCurrentExchangeRateResult;
    }

    /**
     * @param float $GetCurrentExchangeRateResult
     * @return \Clases\GetCurrentExchangeRateResponse
     */
    public function setGetCurrentExchangeRateResult($GetCurrentExchangeRateResult)
    {
      $this->GetCurrentExchangeRateResult = $GetCurrentExchangeRateResult;
      return $this;
    }

}
