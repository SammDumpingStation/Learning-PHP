<?php
  class Calculator {
    private $firstNumber;
    private $secondNumber;
    private $operation;

    public function __construct($first, $second, $operation){
      $this->firstNumber = $first;
      $this->secondNumber = $second;
      $this->operation = $operation;

    }
  }
?>