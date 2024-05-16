<?php
try {
    require_once "../includes/dbh.inc.php"; // Make sure the path is correct

    $query = "SELECT * FROM comments ORDER BY username";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

} catch (PDOException $e) {
    die("Query Failed. " . $e->getMessage());
}