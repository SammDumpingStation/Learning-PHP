<?php
  $name = 'Samm';
  $food = 'Pizza';
  $email = 'sammaag@gmail.com';

  $age = 21;
  $users = 2;
  $quant = 3;

  $gpa = 1.5;

  // String Variables
  echo"I Like {$food}! <br>";
  echo"I am {$name} <br>";
  echo"My Email is {$email} <br>";

  // Integer Variables
  echo"I am {$age} years old <br>";
  echo"There are {$users} online users <br>";
  echo"There are {$quant} available. Would you like to purchase?<br>";

  // Float Variables
  echo"I averaged {$gpa} this school year";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <br>
  <button>Order Pizza</button>
</body>
</html>