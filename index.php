<?php
  declare(strict_types=1);
  include('includes/class-autoload.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="includes/calc.ini.php" method="get">
    <label for="">1st Number</label><br>
    <input type="number" name="1st-entry" placeholder="First Number" > <br>
    <label for="">Operation</label><br>

    <select name="operation">
      <option value="Addition">Addition</option>
      <option value="Subtraction">Subtraction</option>
      <option value="Multiplication">Multiplication</option>
      <option value="Division">Division</option>
    </select>
    <br>

    <label for="">2nd Number</label><br>
    <input type="number" name="2nd-entry" placeholder="Second Number" > <br>
    <input type="submit" name="calculate" value="Calculate" id="">
  </form>
</body>
</html>
