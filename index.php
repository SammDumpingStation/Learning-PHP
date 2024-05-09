<?php
  include('includes/newclass.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
      <label for="">Type a Number</label> <br>
      <input type="text" placeholder="Number" name="number"> <br>
      <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
  $number = $_GET['number'];

  if (isset($_GET['submit'])) {
    $oddOrEven = new Number();
    echo $oddOrEven->oddOrEven($number);
  }
?>
