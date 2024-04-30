<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">Username:</label><br>
    <input type="text" name="username"> <br>
    <label for="">Password</label> <br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in" name="login">
  </form>
</body>
</html>

<?php
  // foreach ($_POST as $key => $value) {
  //   echo "{$key} = {$value} <br>";
  // }

  if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      if (empty($username)) {
        echo"You have not typed in your username. <br>";
      }
      else {
        echo "Username: {$username} <br>";
      }
      if (empty($password)) {
        echo "You have not typed in your password <br>";
      }
      else {
        echo "Password: {$password} <br>";
      }
      if (!empty($username) && !empty($password)) {
        echo"Log-in = {$_POST['login']} <br>";
        echo "Welcome User!";
      }
  }
?>