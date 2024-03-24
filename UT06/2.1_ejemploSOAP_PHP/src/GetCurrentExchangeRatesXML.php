<?php

namespace Clases;

class GetCurrentExchangeRatesXML
{

    /**
     * @var string $strBank
     */
    protected $strBank = null;

    /**
     * @param string $strBank
     */
    public function __construct($strBank)
    {
      $this->strBank = $strBank;
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
     * @return \Clases\GetCurrentExchangeRatesXML
     */
    public function setStrBank($strBank)
    {
      $this->strBank = $strBank;
      return $this;
    }

}
