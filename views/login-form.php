<?php
  declare(strict_types=1);
  include('../includes/class-autoload.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/logIn-general.css">
  <link rel="stylesheet" href="../css/logIn-main.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="/images/laravel.svg">
  <title>PHP AND MYSQL V-01</title>
</head>
<body>
  <main>
    <div id="black-circle"></div>

    <form action="../includes/login.inc.php" method="post">
      <h1>PHP & MYSQL V-01</h1>

      <section id="login-body">
        <div class="input-field">
          <label for="">Username</label>
          <input type="text" name="username" class="input" placeholder="Username">
        </div>

        <div class="input-field">
          <label for="">Password</label>
          <input type="password" name="password" class="input" placeholder="Password">
        </div>

        <button type="submit" name="submit" id="login-button">LOGIN</button>
        <p>Don't have an account? <a href="register.php" id="link">Register</a> </p>
      </section>
    </form>    
  </main>

</body>
</html>