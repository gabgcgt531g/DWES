<?php

namespace Clases;

class GetExchangeRatesByValueXML
{

    /**
     * @var string $strBank
     */
    protected $strBank = null;

    /**
     * @var string $strCurrency
     */
    protected $strCurrency = null;

    /**
     * @var float $dcmLow
     */
    protected $dcmLow = null;

    /**
     * @var float $dcmHigh
     */
    protected $dcmHigh = null;

    /**
     * @var int $intRank
     */
    protected $intRank = null;

    /**
     * @param string $strBank
     * @param string $strCurrency
     * @param float $dcmLow
     * @param float $dcmHigh
     * @param int $intRank
     */
    public function __construct($strBank, $strCurrency, $dcmLow, $dcmHigh, $intRank)
    {
      $this->strBank = $strBank;
      $this->strCurrency = $strCurrency;
      $this->dcmLow = $dcmLow;
      $this->dcmHigh = $dcmHigh;
      $this->intRank = $intRank;
    }

    /**
     * @return string
     */
    public function getStrBank()
    {
      return $this->strBank;
    }

    /**
     * @param string $strBank
     * @return \Clases\GetExchangeRatesByValueXML
     */
    public function setStrBank($strBank)
    {
      $this->strBank = $strBank;
      return $this;
    }

    /**
     * @return string
     */
    public function getStrCurrency()
    {
      return $this->strCurrency;
    }

    /**
     * @param string $strCurrency
     * @return \Clases\GetExchangeRatesByValueXML
     */
    public function setStrCurrency($strCurrency)
    {
      $this->strCurrency = $strCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getDcmLow()
    {
      return $this->dcmLow;
    }

    /**
     * @param float $dcmLow
     * @return \Clases\GetExchangeRatesByValueXML
     */
    public function setDcmLow($dcmLow)
    {
      $this->dcmLow = $dcmLow;
      return $this;
    }

    /**
     * @return float
     */
    public function getDcmHigh()
    {
      return $this->dcmHigh;
    }

    /**
     * @param float $dcmHigh
     * @return \Clases\GetExchangeRatesByValueXML
     */
    public function setDcmHigh($dcmHigh)
    {
      $this->dcmHigh = $dcmHigh;
      return $this;
    }

    /**
     * @return int
     */
    public function getIntRank()
    {
      return $this->intRank;
    }

    /**
     * @param int $intRank
     * @return \Clases\GetExchangeRatesByValueXML
     */
    public function setIntRank($intRank)
    {
      $this->intRank = $intRank;
      return $this;
    }

}
