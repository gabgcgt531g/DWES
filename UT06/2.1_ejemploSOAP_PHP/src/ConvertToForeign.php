<?php

namespace Clases;

class ConvertToForeign
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
   * @var string $strDate
   */
  protected $strDate = null;

  /**
   * @var int $intRank
   */
  protected $intRank = null;

  /**
   * @param float $dcmEUR
   * @param string $strBank
   * @param string $strCurrency
   * @param string $strDate
   * @param int $intRank
   */
  public function __construct($dcmEUR, $strBank, $strCurrency, $strDate, $intRank)
  {
    $this->dcmEUR = $dcmEUR;
    $this->strBank = $strBank;
    $this->strCurrency = $strCurrency;
    $this->strDate = $strDate;
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
   * @return \Clases\ConvertToForeign
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
   * @return \Clases\ConvertToForeign
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
   * @return \Clases\ConvertToForeign
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
   * @return \Clases\ConvertToForeign
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
   * @return \Clases\ConvertToForeign
   */
  public function setIntRank($intRank)
  {
    $this->intRank = $intRank;
    return $this;
  }
}
