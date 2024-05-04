<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <label for="">Input any Sentence</label><br>
    <input type="text" name="sentence"><br>
    <input type="submit" name="submit" value="Submit">

  </form>
</body>
</html>

<?php
  $sentence = $_GET['sentence'];
  $wordCounter =str_word_count($sentence) ;
  echo "Your sentence consists of {$wordCounter} words.";
?>