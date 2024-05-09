<?php
  class User {
    protected $name;
    protected $age;
  }

  class Greetings extends User {
    public function greetUser($name, $age) {
      $this->name = $name;
      $this->age = $age;

      return "Hello there. You are " . $this->name . " " . ". And you are " . $this->age . " years old.";
    }
  }
?>