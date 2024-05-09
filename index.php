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
      <label for="">Name</label> <br>
      <input type="text" placeholder="Name" name="name"> <br>
      <label for="">Age</label> <br>
      <input type="text" placeholder="Age" name="age"> <br>
      <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
  $name = $_GET['name'];
  $age = $_GET['age'];

  $greetings = new Greetings();
  echo $greetings->greetUser($name, $age);
?>
