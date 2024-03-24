<?php

namespace Clases;

class CurrentConvertToEUR
{

  /**
   * @var float $dcmValue
   */
  protected $dcmValue = null;

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
   * @param float $dcmValue
   * @param string $strBank
   * @param string $strCurrency
   * @param int $intRank
   */
  public function __construct($dcmValue, $strBank, $strCurrency, $intRank)
  {
    $this->dcmValue = $dcmValue;
    $this->strBank = $strBank;
    $this->strCurrency = $strCurrency;
    $this->intRank = $intRank;
  }

  /**
   * @return float
   */
  public function getDcmValue()
  {
    return $this->dcmValue;
  }

  /**
   * @param float $dcmValue
   * @return \Clases\CurrentConvertToEUR
   */
  public function setDcmValue($dcmValue)
  {
    $this->dcmValue = $dcmValue;
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
   * @return \Clases\CurrentConvertToEUR
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
   * @return \Clases\CurrentConvertToEUR
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
   * @return \Clases\CurrentConvertToEUR
   */
  public function setIntRank($intRank)
  {
    $this->intRank = $intRank;
    return $this;
  }
}
