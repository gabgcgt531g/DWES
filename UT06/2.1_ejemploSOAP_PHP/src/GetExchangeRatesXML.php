<?php

namespace Clases;

class GetExchangeRatesXML
{

    /**
     * @var string $strBank
     */
    protected $strBank = null;

    /**
     * @var string $strDate
     */
    protected $strDate = null;

    /**
     * @param string $strBank
     * @param string $strDate
     */
    public function __construct($strBank, $strDate)
    {
      $this->strBank = $strBank;
      $this->strDate = $strDate;
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
     * @return \Clases\GetExchangeRatesXML
     */
    public function setStrBank($strBank)
    {
      $this->strBank = $strBank;
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
     * @return \Clases\GetExchangeRatesXML
     */
    public function setStrDate($strDate)
    {
      $this->strDate = $strDate;
      return $this;
    }

}
