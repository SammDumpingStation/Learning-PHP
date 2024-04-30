<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">Quantity: </label> <br>
    <input type="text" name="quantity"> <br>
    <input type="submit" value="Total">
  </form>
</body>
</html>

<?php 
  $price = 5.99;
  $quant = $_POST['quantity'];
  $total = $price * $quant;

  echo"You have ordered {$quant} xa of Pizza/s <br>";
  echo"Your total is: \${$total}";
?>