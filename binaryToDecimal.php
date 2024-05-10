<?php
  declare(strict_types=1);
  include('includes/class-autoload.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Binary to Decimal</title>
</head>
<body>
  <form action="includes/binaryToDecimal.inc.php" method="get">
    <label for="">Binary Unit</label><br>
    <input type="number" name="binary" placeholder="Binary Unit"><br>
    <input type="submit" name="submit" value="Translate">
  </form>
</body>
</html>