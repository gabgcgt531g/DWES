<?php

namespace Clases;

class GetExchangeRate
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
     * @var string $strDate
     */
    protected $strDate = null;

    /**
     * @var int $intRank
     */
    protected $intRank = null;

    /**
     * @param string $strBank
     * @param string $strCurrency
     * @param string $strDate
     * @param int $intRank
     */
    public function __construct($strBank, $strCurrency, $strDate, $intRank)
    {
      $this->strBank = $strBank;
      $this->strCurrency = $strCurrency;
      $this->strDate = $strDate;
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
     * @return \Clases\GetExchangeRate
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
     * @return \Clases\GetExchangeRate
     */
    public function setStrCurrency($strCurrency)
    {
      $this->strCurrency = $strCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getStrDate()
    {
      return $this->strDate;
    }

    /**
     * @param string $strDate
     * @return \Clases\GetExchangeRate
     */
    public function setStrDate($strDate)
    {
      $this->strDate = $strDate;
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
     * @return \Clases\GetExchangeRate
     */
    public function setIntRank($intRank)
    {
      $this->intRank = $intRank;
      return $this;
    }

}
