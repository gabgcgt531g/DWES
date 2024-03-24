<?php

namespace Clases;

class GetCurrentExchangeRate
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
     * @var int $intRank
     */
    protected $intRank = null;

    /**
     * @param string $strBank
     * @param string $strCurrency
     * @param int $intRank
     */
    public function __construct($strBank, $strCurrency, $intRank)
    {
      $this->strBank = $strBank;
      $this->strCurrency = $strCurrency;
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
     * @return \Clases\GetCurrentExchangeRate
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
     * @return \Clases\GetCurrentExchangeRate
     */
    public function setStrCurrency($strCurrency)
    {
      $this->strCurrency = $strCurrency;
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
     * @return \Clases\GetCurrentExchangeRate
     */
    public function setIntRank($intRank)
    {
      $this->intRank = $intRank;
      return $this;
    }

}
