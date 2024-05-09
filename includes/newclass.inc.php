<?php 
  class Number {
    protected $num;
  }
  class OddOrEven extends Number {
    public function oddOrEven($num) {
      $this->num = $num;
      $number = $this->num;
      $type = null;

      if ($number == 0) {
        $type = ". That is a 0.";
      }
      elseif ($number % 2 == 0) {
        $type = ". That is an <strong>EVEN</strong> number";
      }
      else {
        $type = ". That is an <strong>ODD</strong> number";
      }
      return "Your number is: " . $number . $type;
    }
  }

  class MultiplicationTable extends Number {
    public function multiTable($num) {
      $this->num = $num;
      $numbers = $this->num;

      for ($i=0; $i <= 10; $i++) { 
        $product = $i * $numbers;
        echo "{$i} * {$numbers} = {$product} <br>";
      }
    }
  }
?>