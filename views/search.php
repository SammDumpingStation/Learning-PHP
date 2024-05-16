<?php include("../includes/search-user.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('css-meta-tag.php')?>
  <title>News Feed</title>
</head>
<body>

  <main>

    <?php include('search-bar.php')?>

    <h1 for="">Search Results:</h1>
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