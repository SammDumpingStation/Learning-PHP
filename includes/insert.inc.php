<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $insertID = $_POST['insert-id'];
  $insertName = $_POST['insert-username'];
  $insertComment = $_POST['insert-comment'];

  try {
    require_once "../includes/dbh.inc.php";

    $query = "INSERT INTO comments (username, comment_text) VALUES (':insertName', ':insertComment');";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":insertID", $insertID);
    $stmt->bindParam(":insertName", $insertName);
    $stmt->bindParam(":insertComment", $insertComment);

    $stmt->execute();

    // Redirect back to the newsfeed or another page after deletion
    header('Location: ../views/newsfeed.php');
    exit();

  } catch (PDOException $e) {
    die("Query Failed. " . $e->getMessage());
  }
} else {
  header('Location: ../views/newsfeed.php');
  exit();
}
?>
