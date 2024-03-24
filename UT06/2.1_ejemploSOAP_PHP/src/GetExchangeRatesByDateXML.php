<?php

namespace Clases;

class GetExchangeRatesByDateXML
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
     * @var string $strDateLow
     */
    protected $strDateLow = null;

    /**
     * @var string $strDateHigh
     */
    protected $strDateHigh = null;

    /**
     * @param string $strBank
     * @param string $strCurrency
     * @param string $strDateLow
     * @param string $strDateHigh
     */
    public function __construct($strBank, $strCurrency, $strDateLow, $strDateHigh)
    {
      $this->strBank = $strBank;
      $this->strCurrency = $strCurrency;
      $this->strDateLow = $strDateLow;
      $this->strDateHigh = $strDateHigh;
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
     * @return \Clases\GetExchangeRatesByDateXML
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
     * @return \Clases\GetExchangeRatesByDateXML
     */
    public function setStrCurrency($strCurrency)
    {
      $this->strCurrency = $strCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getStrDateLow()
    {
      return $this->strDateLow;
    }

    /**
     * @param string $strDateLow
     * @return \Clases\GetExchangeRatesByDateXML
     */
    public function setStrDateLow($strDateLow)
    {
      $this->strDateLow = $strDateLow;
      return $this;
    }

    /**
     * @return string
     */
    public function getStrDateHigh()
    {
      return $this->strDateHigh;
    }

    /**
     * @param string $strDateHigh
     * @return \Clases\GetExchangeRatesByDateXML
     */
    public function setStrDateHigh($strDateHigh)
    {
      $this->strDateHigh = $strDateHigh;
      return $this;
    }

}
