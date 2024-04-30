<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <label for="">Radius:</label>
    <input type="text" name="radius">
    <input type="submit" value="Calculate">
  </form>
</body>
</html>

<?php 
  $radius = $_GET['radius'];
  $circumference =  round(2 * (pi() * $radius), 2) ;
  $area = round(pi() * ($radius ** 2), 2) ;
  $volume = round(4/3 * (pi() * ($radius ** 3)), 2) ;

  echo"Circumference: {$circumference}cm <br>";
  echo"Area: {$area}cm^2 <br>";
  echo"Volume: {$volume}cm^3 <br>";
?>