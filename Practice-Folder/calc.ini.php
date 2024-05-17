<?php
  declare(strict_types=1);
  include('class-autoload.inc.php');

  $operator = $_GET['operation'];
  $firstEntry = $_GET['1st-entry'];
  $secondEntry = $_GET['2nd-entry'];

  $calculator = new Calculator((int)$firstEntry, (int)$secondEntry, $operator);
  
  try {
    echo $calculator->calcResults();
  } catch (\Throwable $e) {
    echo "Error! " . $e->getMessage();
  }
?>