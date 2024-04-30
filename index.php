<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <label for="">Binary Number (no spaces)</label> <br>
    <input type="text" name="binary" placeholder="No Space"> <br><br>
    <input type="submit" value="Decimal Form"> <br>
  </form>
</body>
</html>

<?php 
  $binary = $_GET['binary'];
  $binaryLength = strlen($binary);
  $decimal = null;
  $value = null;

  for ($i=0; $i <= $binaryLength; $i++) {
    $bit = $binary[$i];
    if ($binaryLength < 8) {
      echo "You entered <strong>{$binaryLength}</strong> amount of number which is <strong> LESS </strong>than to make a binary unit. Please try again! <br>";
      $decimal = 0;
      break;
    }
    elseif ($binaryLength > 8) {
      echo "You entered <strong>{$binaryLength}</strong> amount of number which  is <strong>MORE</strong> than to make a binary unit. Please try again!<br>";
      $decimal = 0;
      break;
    }
    elseif ($binaryLength == 8 && $bit == 1) {
      $value = pow(2, 7 - $i);
    }
    elseif ($bit > 0 && $bit > 1) {
      echo "That was not a binary input. Please try again!<br>";
      $decimal*=0;
      break;      
    }
    else {
      $value = 0;
    }
    $decimal+=$value; 
  }
  echo"The decimal version is: {$decimal}";
?>