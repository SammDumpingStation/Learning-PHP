<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('css-meta-tag.php')?>
  <link rel="stylesheet" href="../css/update.css">
  <title>Update User</title>
</head>
<body>
  <main>
    <?php include('search-bar.php')?>

    <section>
      <form action="../includes/update.inc.php" method="post" id="edit-post">
        <h1><?php echo $_POST['update-name'] ?></h1>
        <textarea type="text" placeholder="What's on your mind?" name="update-comment" id="edit-input"><?php echo $_POST['update-comment'] ?></textarea>
        <input type="hidden" name="update-id" value="<?php echo $_POST['update-id'] ?>" id="">
        <button type="submit" id="save">Save Changes</button>
      </form>
    </section>
  </main>
</body>
</html>