<?php

class Customer {
  private $name = "Samm Caagbay";
  private $age = 34;
  private $gender = "Others";

  public function customerInfo() {
    echo "Your name is {$this->name}. 
    You are {$this->age}. 
    You selected {$this->gender} 
    as your gender";
  }
}