<?php

namespace Clases;

class CurrentConvertToForeign
{

    /**
     * @var float $dcmEUR
     */
    protected $dcmEUR = null;

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
     * @param float $dcmEUR
     * @param string $strBank
     * @param string $strCurrency
     * @param int $intRank
     */
    public function __construct($dcmEUR, $strBank, $strCurrency, $intRank)
    {
      $this->dcmEUR = $dcmEUR;
      $this->strBank = $strBank;
      $this->strCurrency = $strCurrency;
      $this->intRank = $intRank;
    }

    /**
     * @return float
     */
    public function getDcmEUR()
    {
      return $this->dcmEUR;
    }

    /**
     * @param float $dcmEUR
     * @return \Clases\CurrentConvertToForeign
     */
    public function setDcmEUR($dcmEUR)
    {
      $this->dcmEUR = $dcmEUR;
      return $this;
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
     * @return \Clases\CurrentConvertToForeign
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
     * @return \Clases\CurrentConvertToForeign
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
     * @return \Clases\CurrentConvertToForeign
     */
    public function setIntRank($intRank)
    {
      $this->intRank = $intRank;
      return $this;
    }

}
