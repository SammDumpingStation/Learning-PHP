<?php include("../includes/newsfeed.inc.php");
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

    <H1 for="">Search Results:</H1>
    <section class="results">
      <?php if (empty($results)) { ?>
              <p>The User Doesn't Exist!!</p>
      <?php } else {?>
              <?php foreach ($results as $value) { ?>
                    <section class="posts">
                        <h2><?php echo htmlspecialchars($value['username']);?></h2>
                        <p><?php echo htmlspecialchars($value['comment_text']);?></p>
                        <div class="operations">

                          <form action="" class="options">
                            <img src="/icons/like.png" alt="">
                            <input type="hidden" name="like" value="<?php $value['id']?>" id="">
                            <label for="">Like</label>
                          </form>

                          <form action="../includes/update.inc.php" class="options">
                            <img src="/icons/edit(1).png" alt="">
                            <input type="hidden" name="update" value="<?php $value['id']?>" id="">
                            <label for="">Update</label>
                          </form>

                          <form action="../includes/delete.inc.php" class="options">
                            <img src="/icons/delete.png" alt="">
                            <input type="hidden" name="delete" value="<?php $value['id']?>" id="">
                            <label for="">Delete</label>
                          </form>

                        </div>
                      </section>
               <?php } ?>
      <?php }?>  
    </section>
    <form action="newsfeed.php" method="post">
      <button id="go-back">GO BACK</button>
    </form>

  </main>
</body>
</html>