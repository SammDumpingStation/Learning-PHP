<?php
  include('includes/newclass.inc.php');
  include('classes/calculator.class.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="includes/styles.inc.css">
  <title>Document</title>
</head>
<body>
  <form action="classses/calculator.class.php" method="get">
    <button class="buttons numbers" type="button" value="1" name="numbers">1</button>
    <button class="buttons numbers" type="button" value="2" name="numbers">2</button>
    <button class="buttons numbers" type="button" value="3" name="numbers">3</button>
    <button class="buttons numbers" type="button" value="4" name="numbers">4</button>
    <button class="buttons numbers" type="button" value="5" name="numbers">5</button>
    <button class="buttons numbers" type="button" value="6" name="numbers">6</button>
    <button class="buttons numbers" type="button" value="7" name="numbers">7</button>
    <button class="buttons numbers" type="button" value="8" name="numbers">8</button>
    <button class="buttons numbers" type="button" value="9" name="numbers">9</button>
    <button class="buttons numbers" type="button" value="0" name="numbers">0</button>
    <button class="buttons numbers" type="button" value="00" name="numbers">00</button>
    <button class="buttons numbers" type="button" value="." name="numbers">.</button>

    <button class="buttons operations" type="button" value="+" name="operations">+</button>
    <button class="buttons operations" type="button" value="-" name="operations">-</button>
    <button class="buttons operations" type="button" value="x" name="operations">x</button>
    <button class="buttons operations" type="button" value="/" name="operations">&divide;</button>
    <button class="buttons operations" type="button" value="=" name="operations">=</button>
    <button class="buttons operations" type="button" value="%" name="operations">%</button>
    <button class="buttons operations" type="button" value="all-clear" name="operations">AC</button>
    <button class="buttons operations" type="button" value="clear" name="operations">DEL</button>
  </form>
</body>
</html>
