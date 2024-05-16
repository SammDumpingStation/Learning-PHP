<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $updateID = $_POST['update-id'];
  $updateComment = $_POST['update-comment'];

  try {
    require_once "../includes/dbh.inc.php";

    $query = "UPDATE comments SET comment_text = :updateComment WHERE id = :updateID;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":updateComment", $updateComment);
    $stmt->bindParam(":updateID", $updateID);

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
