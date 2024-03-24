<?php

namespace Clases;

class ConvertToEUR
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
   * @var string $strDate
   */
  protected $strDate = null;

  /**
   * @var int $intRank
   */
  protected $intRank = null;

  /**
   * @param float $dcmValue
   * @param string $strBank
   * @param string $strCurrency
   * @param string $strDate
   * @param int $intRank
   */
  public function __construct($dcmValue, $strBank, $strCurrency, $strDate, $intRank)
  {
    $this->dcmValue = $dcmValue;
    $this->strBank = $strBank;
    $this->strCurrency = $strCurrency;
    $this->strDate = $strDate;
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
   * @return \Clases\ConvertToEUR
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
   * @return \Clases\ConvertToEUR
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
   * @return \Clases\ConvertToEUR
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
   * @return \Clases\ConvertToEUR
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
   * @return \Clases\ConvertToEUR
   */
  public function setIntRank($intRank)
  {
    $this->intRank = $intRank;
    return $this;
  }
}
