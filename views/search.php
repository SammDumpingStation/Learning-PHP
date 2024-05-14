<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $usersearch = $_POST['usersearch'];

  try {
    require_once "../includes/dbh.inc.php";

    $query = "SELECT * FROM users WHERE username = :usersearch;";

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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/logIn-general.css">
  <link rel="stylesheet" href="../css/search.css">
  <title>News Feed</title>
</head>
<body>

  <main>

    <form id="search-section" action="newsfeed.php" method="post">
        <div id="search-bar">
          <img src="../icons/icons8-search.svg" alt="search-icon" id="search-icon">
          <input type="text" name="searchbar" id="search-input" placeholder="Search....">
        </div>
      <button id="search-button">Search</button>
    </form>

    <H1 for="">Search Results:</H1>
    <section class="posts">
      <?php if (empty($results)) { ?>
              <p>The User Doesn't Exist!!</p>
      <?php } else {?>
              <?php var_dump($results); ?>
      <?php }?>
      
    </section>

  </main>
</body>
</html>