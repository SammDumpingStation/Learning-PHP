<?php
  // declare(strict_types=1);
  include('class-autoload.inc.php');

  $binary = $_GET['binary'];

  $binaryConversion = new BinaryToDecimal((int)$binary);
  try {
    // echo $binaryConversion->binary;
    // echo "<br>";
    echo $binaryConversion->decimalConversion();
    echo "<br>";
    echo $binaryConversion->binaryConversion();
  } catch (\Throwable $th) {
    echo "Error! " . $e->getMessage();
  }
?>