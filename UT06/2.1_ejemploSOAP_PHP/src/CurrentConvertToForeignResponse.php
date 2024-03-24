<?php

namespace Clases;

class CurrentConvertToForeignResponse
{

    /**
     * @var float $CurrentConvertToForeignResult
     */
    protected $CurrentConvertToForeignResult = null;

    /**
     * @param float $CurrentConvertToForeignResult
     */
    public function __construct($CurrentConvertToForeignResult)
    {
      $this->CurrentConvertToForeignResult = $CurrentConvertToForeignResult;
    }

    /**
     * @return float
     */
    public function getCurrentConvertToForeignResult()
    {
      return $this->CurrentConvertToForeignResult;
    }

    /**
     * @param float $CurrentConvertToForeignResult
     * @return \Clases\CurrentConvertToForeignResponse
     */
    public function setCurrentConvertToForeignResult($CurrentConvertToForeignResult)
    {
      $this->CurrentConvertToForeignResult = $CurrentConvertToForeignResult;
      return $this;
    }

}
