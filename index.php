<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <label for="">Input any Number</label><br>
    <input type="text" name="number"><br>
    <input type="submit" name="submit" value="Submit">

  </form>
</body>
</html>

<?php
  $number = $_GET['number'];

  if ($number == 0) {
    echo "Your number is zero";
  }
  elseif ($number > 0) {
    echo "Your number is positive";
  }
  else {
    echo "Your number is negative";
  }
?>