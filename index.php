<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <input type="radio" name="credit_card" value="VISA"> VISA <br>
    <input type="radio" name="credit_card" value="MasterCard"> MasterCard <br>
    <input type="radio" name="credit_card" value="American Express"> American Express <br>
    <input type="submit" name="submit" value="submit">
  </form>
</body>
</html>

<?php
    if (isset($_GET['submit'])) {
      if (empty($_GET['credit_card'])) {
        echo "Please select your credit card";
      }
      else {
        echo"You have selected: {$_GET["credit_card"]}";
      }
    }
?>