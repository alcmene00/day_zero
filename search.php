<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
  ?>
  <head>
    <link rel="stylesheet" href="search.css" />
    <title>Day Zero - Search</title>
  </head>
  <?php 
      include_once 'menu.php';
  ?>
  <body>
    <!-- MAIN -->
    <main class="background-search">
      <div class="search">
        <h3>What are you looking for?</h3>
        <div class="search-box">
          <input type="text" name="box" placeholder="Search" />
          <img src="pictures/search-icon.png" alt="search" width="40px" />
        </div>
      </div>
    </main>
    <!-- FOOTER -->
    <?php 
      include_once 'footer.php';
    ?>
    <script src="menu.js"></script>
  </body>
</html>
