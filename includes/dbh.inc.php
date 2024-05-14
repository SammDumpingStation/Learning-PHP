<?php

$dsn = "mysql:host=localhost;dbname=PHPandMySQL;";
$dbusername = "root";
$dbpassword = "Golempekkawizard69";

try {
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection Failed! Problem: " . $e->getMessage();
}