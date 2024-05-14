<?php

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
    
    <section class="posts">
      <h2>Samm Caagbay</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates odio rerum magnam doloremque harum! Officiis maiores ab quibusdam quidem sunt blanditiis! Enim aliquam vero dignissimos nemo alias pariatur qui autem.</p>
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
  </main>
</body>
</html>