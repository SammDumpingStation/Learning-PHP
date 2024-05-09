
<?php

class Person {
  protected $first = "Samm";
  protected $last = 'Cagbay';
  private $age = "21";

  public function greetUser() {
    $fName = $this->first;
    $lName = $this->last;
    $age = $this->age;
    $greet = "Hello there {$fName} {$lName}. You are {$age} years old.";
    return $greet;
  }
}

class Pet extends Person{
  function petOwner(){
    $fName = $this->first;
    $lName = $this->last;
    $ownerName = "{$fName} {$lName}";
    $petName = 'Cream';
    $ownerGreet = "Hi I am {$petName}, and my owners name is {$ownerName}"; 
    return $ownerGreet;
  }
}
?>