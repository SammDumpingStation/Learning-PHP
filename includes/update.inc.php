<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $usersearch = $_POST['usersearch'];

  try {
    require_once "../includes/dbh.inc.php";

    $query = "SELECT * FROM comments WHERE username = :usersearch;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":usersearch", $usersearch);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

  } catch (PDOException $e) {
    die("Query Failed. " . $e->getMessage());
  }
}
 else {
  header('Location: ../views/newsfeed.php');
}
?>