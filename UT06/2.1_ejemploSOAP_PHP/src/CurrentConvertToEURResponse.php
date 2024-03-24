<?php

namespace Clases;

class CurrentConvertToEURResponse
{

    /**
     * @var float $CurrentConvertToEURResult
     */
    protected $CurrentConvertToEURResult = null;

    /**
     * @param float $CurrentConvertToEURResult
     */
    public function __construct($CurrentConvertToEURResult)
    {
      $this->CurrentConvertToEURResult = $CurrentConvertToEURResult;
    }

    /**
     * @return float
     */
    public function getCurrentConvertToEURResult()
    {
      return $this->CurrentConvertToEURResult;
    }

    /**
     * @param float $CurrentConvertToEURResult
     * @return \Clases\CurrentConvertToEURResponse
     */
    public function setCurrentConvertToEURResult($CurrentConvertToEURResult)
    {
      $this->CurrentConvertToEURResult = $CurrentConvertToEURResult;
      return $this;
    }

}
