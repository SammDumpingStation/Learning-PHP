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
      echo "You entered {$binaryLength} amount of number which is LESS than to make a binary unit. Please try again!";
    }
    elseif ($binaryLength > 8) {
      echo "You entered {$binaryLength} amount of number which is MORE than to make a binary unit. Please try again!";
    } 
    elseif($binaryLength == 8) {
      if ($i == 0 && $bit == 1) {
        $value = 128;
      }
      elseif ($i == 1 && $bit == 1) {
        $value = 64;
      }
      elseif ($i == 2 && $bit == 1) {
        $value = 32;
      }
      elseif ($i == 3 && $bit == 1) {
        $value = 16;
      }
      elseif ($i == 4 && $bit == 1) {
        $value = 8;
      }
      elseif ($i == 5 && $bit == 1) {
        $value = 4;
      }
      elseif ($i == 6 && $bit == 1) {
        $value = 2;
      }
      elseif ($i == 7 && $bit == 1) {
        $value = 1;
      }
      else {
        $value = 0;
      }
      
    }$decimal+=$value;
  }
  echo"The decimal version is: {$decimal}";
?>