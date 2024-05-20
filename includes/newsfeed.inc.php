<?php
session_start();

try {
    require_once "../includes/dbh.inc.php";

    if (isset($_SESSION['query']) && !is_null($_SESSION['query'])) {
        $query = $_SESSION['query'];
    } else {
        $query = "SELECT * FROM comments ORDER BY username LIMIT 10;";
    }
 
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

} catch (PDOException $e) {
    die("Query Failed. " . $e->getMessage());
}