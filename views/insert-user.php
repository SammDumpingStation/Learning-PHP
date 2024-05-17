<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('../includes/css-meta-tag.php')?>
  <link rel="stylesheet" href="../css/update.css">
  <title>Update User</title>
</head>
<body>
  <main>
    <?php 
      include('../includes/search-bar.inc.php');
      include('../includes/add-user.inc.php');
    ?>

    <section>
      <h1>Add A New User</h1>
      <form action="../includes/insert.inc.php" method="post" id="edit-post">
        <div class="top-section">
          <label for="">Make a New Username</label>
          <input type="text" placeholder="Username..." name="insert-username"></input>
          <button type="reset" id="reset"><img class="reset-icon" src="../icons/icons8-reset-100.png" alt=""></button>          
        </div>
        <textarea type="text" placeholder="What's on your mind?" name="insert-comment" id="edit-input"></textarea>
        <input type="hidden" name="insert-id">

        <div class="bottom-section">
            <a href="newsfeed.php" id="cancel-link"><button type="button" id="cancel-button">Cancel</button></a>
            <button type="submit" id="save">Save Changes</button>          
        </div>

      </form>
    </section>
  </main>
</body>
</html>