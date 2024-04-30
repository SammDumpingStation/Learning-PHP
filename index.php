<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <label>X:</label> 
    <input type="text" name="X"><br>
    <label>Y:</label>
    <input type="text" name="Y"><br>
    <label>Z:</label>
    <input type="text" name="Z"><br>
    <input type="submit" value="Calculate">
  </form>
</body>
</html>

<?php
  $x = $_GET['X'];
  $Y = $_GET['Y'];
  $Z = $_GET['Z'];
  $total = null;

  $total = abs($x);
  echo $total;

?>