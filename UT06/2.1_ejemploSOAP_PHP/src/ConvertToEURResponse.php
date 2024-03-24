<?php

namespace Clases;

class ConvertToEURResponse
{

  /**
   * @var float $ConvertToEURResult
   */
  protected $ConvertToEURResult = null;

  /**
   * @param float $ConvertToEURResult
   */
  public function __construct($ConvertToEURResult)
  {
    $this->ConvertToEURResult = $ConvertToEURResult;
  }

  /**
   * @return float
   */
  public function getConvertToEURResult()
  {
    return $this->ConvertToEURResult;
  }

  /**
   * @param float $ConvertToEURResult
   * @return \Clases\ConvertToEURResponse
   */
  public function setConvertToEURResult($ConvertToEURResult)
  {
    $this->ConvertToEURResult = $ConvertToEURResult;
    return $this;
  }
}
