<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $deleteID = $_POST['deleteID'];

  try {
    require_once "../includes/dbh.inc.php";

    $query = "DELETE FROM comments WHERE id = :deleteID;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":deleteID", $deleteID, PDO::PARAM_INT);

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
