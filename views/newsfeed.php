<?php
  include('../includes/newsfeed.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('../includes/css.inc.php')?>
  <title>News Feed</title>
</head>
<body>

  <main>

    <?php 
      include('../includes/search-bar.inc.php');
      include('../includes/add-user.inc.php');
    ?>

    <section class="sort">
      <h1>Sort Users By:</h1>
      <form action="../includes/sorting.inc.php" method="post" class="sort-buttons">
        <button name="sort-options" value="alphabetical">Alphabetical Order</button>
        <button name="sort-options" value="recently-added">Recently added</button>        
      </form>

    </section>

    <section class="results">
      <?php if (empty($results)) { ?>
              <p>No Users Added.</p>
      <?php } else {?>
              <?php foreach ($results as $value) { ?>
                    <section class="posts">
                        <h2><?php echo htmlspecialchars($value['username']);?></h2>
                        <p><?php echo htmlspecialchars($value['comment_text']);?></p>
                      <div class="operations">
                        <form action="" class="options" method="post">
                            <button class="feed-button">
                                <img src="/icons/like.png" alt="">
                                <input type="hidden" name="likeID" value="<?php echo $value['id'] ?>" id="">
                                Like
                            </button>
                        </form>

                        <form action="update-user.php" class="options" method="post">
                            <button class="feed-button">
                                <img src="/icons/edit(1).png" alt="">
                                <input type="hidden" name="update-id" value="<?php echo $value['id'] ?>" id="">
                                <input type="hidden" name="update-comment" value="<?php echo $value['comment_text'] ?>" id="">
                                <input type="hidden" name="update-name" value="<?php echo $value['username'] ?>" id="">
                                Edit
                            </button>
                        </form>

                        <form action="../includes/delete.inc.php" class="options" method="post">
                            <button type="submit" class="feed-button" onclick="javascript:return confirm('Are you sure you want to delete this comment?')">
                                <img src="/icons/delete.png" alt="">
                                <input type="hidden" name="delete-id" value="<?php echo $value['id'] ?>" id="">
                                Delete
                            </button>
                        </form>
                      </div>
                      </section>
               <?php } ?>
      <?php }?>  
    </section>
  </main>
</body>
</html>