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

    public function calcResults() {
      $total = null;
      if ($this->operation == 'Addition') {
        $total = $this->firstNumber + $this->secondNumber;
      }
      elseif ($this->operation == 'Subtraction') {
        $total = $this->firstNumber - $this->secondNumber;
      }
      elseif ($this->operation == 'Multiplication') {
        $total = $this->firstNumber * $this->secondNumber;
      }
      elseif ($this->operation == 'Division') {
        $total = $this->firstNumber / $this->secondNumber;
      }
      else {
        echo "Error";
      }
      return "You used {$this->operation}, Your Total is: {$total}!";
    }
  }
?>