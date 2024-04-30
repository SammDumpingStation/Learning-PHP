<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <label for="">Select a Number</label> <br>
    <input type="text" name="number"> <br><br>
    <input type="submit" value="Multiply"> <br>
  </form>
</body>
</html>

<?php 
  $number = $_GET['number'];
  for ($i=0; $i <= 10; $i++) { 
    $total = $number * $i;
    echo "{$number} x {$i} = {$total} <br>";
  }
  echo "Multiplication Table of {$number}!!";
?>