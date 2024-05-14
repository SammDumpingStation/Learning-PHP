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

    <form id="search-section" action="search.php" method="post">
        <div id="search-bar">
          <img src="../icons/icons8-search.svg" alt="search-icon" id="search-icon">
          <input type="text" name="usersearch" id="search-input" placeholder="Search....">
        </div>
      <button id="search-button">Search</button>
    </form>

    <section class="results">
      <?php if (empty($results)) { ?>
              <p>Database Connection Failed!</p>
      <?php } else {?>
              <?php foreach ($results as $value) { ?>
                    <section class="posts">
                        <h2><?php echo htmlspecialchars($value['username']);?></h2>
                        <p><?php echo htmlspecialchars($value['comment_text']);?></p>
                        <div class="operations">

                          <div class="options">
                            <img src="/icons/like.png" alt="">
                            <label for="">Like</label>
                          </div>

                          <div class="options">
                            <img src="/icons/edit(1).png" alt="">
                            <label for="">Edit</label>
                          </div>

                          <div class="options">
                            <img src="/icons/delete.png" alt="">
                            <label for="">Delete</label>
                          </div>

                        </div>
                      </section>
               <?php } ?>
      <?php }?>  
    </section>
  </main>
</body>
</html>