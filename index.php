<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <label for="">Input any String</label><br>
    <input type="text" name="string"><br>
    <input type="submit" name="submit" value="Submit">

  </form>
</body>
</html>

<?php
  $string = $_GET['string'];
  $stringLength = strlen($string);
  echo "Your string consists of {$stringLength} letters.";
?>