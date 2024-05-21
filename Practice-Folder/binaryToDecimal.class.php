<?php

  class BinaryToDecimal {
    public $binary;
    
    public function __construct(int $binary)
    {
      $this->binary = $binary;
    }

    public function decimalConversion() {
      $binary = strval($this->binary);
      $binaryLength = strlen($binary);
      $decimal = null;

      for ($i=0; $i < $binaryLength; $i++) { 
        $bits = $binary[$i];
        $decimal += $bits * (2**(7-$i));
      }
      return $decimal;
    }

    public function binaryConversion() {
      $decimal = $this->decimalConversion();
      $binary = null;

      for ($i=0; $i < 8; $i++) { 
        $binary = $decimal / 2;
        
        echo $decimal . " % 2 = " . $binary . '<br>';
      }
    }
  }
?>