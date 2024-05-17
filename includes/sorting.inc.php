<?php 
session_start();
$chooseQuery = null;
$sortingOption = $_POST['sort-options'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($sortingOption)) {
        if ($sortingOption == 'recently-added') {
            $chooseQuery = "SELECT * FROM comments ORDER BY id DESC;";
        } else {
            $chooseQuery = "SELECT * FROM comments ORDER BY username;";
        }
    }
}

$_SESSION['query'] = $chooseQuery;
if (!is_null($chooseQuery)) {
    $_SESSION['query'] = $chooseQuery;
}

    header('Location: ../views/newsfeed.php');