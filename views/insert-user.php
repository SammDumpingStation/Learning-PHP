<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('../includes/css.inc.php')?>
  <link rel="stylesheet" href="../css/update-and-insert.css">
  <link rel="stylesheet" href="../css/insert.css">
  <title>Update User</title>
</head>
<body>
  <main>
    <?php 
      include('../includes/search-bar.inc.php');
    ?>

    <section>
      <div class="title-top">
        <h1>Add A New User</h1>
        <button type="reset" id="reset"><img class="reset-icon" src="../icons/icons8-reset-100.png" alt=""></button>                         
      </div>
      <form action="../includes/insert.inc.php" method="post" id="edit-post">
        <div class="top-section-insert">
          <label id="new-username-title">Make a New Username</label>
          <input type="text" placeholder="Username..." name="insert-username" id="insert-username"></input>
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