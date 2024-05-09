
<?php

class Person {
  private $first = "Samm";
  private $last = 'Cagbay';
  private $age = "21";

  public function greetUser() {
    $fName = $this->first;
    $lName = $this->last;
    $age = $this->age;
    $greet = "Hello there {$fName} {$lName}. You are {$age} years old.";
    return $greet;
  }
}

class Pet {
  public function owner(){
    $a = "Yahoo There!";
    return $a;
  }
}
?>