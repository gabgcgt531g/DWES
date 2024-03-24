<?php

namespace Clases;

class ConvertToForeignResponse
{

    /**
     * @var float $ConvertToForeignResult
     */
    protected $ConvertToForeignResult = null;

    /**
     * @param float $ConvertToForeignResult
     */
    public function __construct($ConvertToForeignResult)
    {
      $this->ConvertToForeignResult = $ConvertToForeignResult;
    }

    /**
     * @return float
     */
    public function getConvertToForeignResult()
    {
      return $this->ConvertToForeignResult;
    }

    /**
     * @param float $ConvertToForeignResult
     * @return \Clases\ConvertToForeignResponse
     */
    public function setConvertToForeignResult($ConvertToForeignResult)
    {
      $this->ConvertToForeignResult = $ConvertToForeignResult;
      return $this;
    }

}
